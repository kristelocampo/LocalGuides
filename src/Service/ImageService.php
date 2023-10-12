<?php

namespace App\Service;

use Exception;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function add(UploadedFile $picture, string $folder = '', int $width = 250, int $height = 250)
    {
        // Generate a new unique file name for the image
        $fileName = md5(uniqid(rand(), true)) . '.webp';

        // Check if the uploaded file is an image
        $pictureInfo = $picture->getClientMimeType();
        if (!in_array($pictureInfo, ['image/png', 'image/jpeg', 'image/webp'])) {
            throw new Exception('Invalid image format');
        }

        // Create an image resource from the uploaded file
        switch ($pictureInfo) {
            case 'image/png':
                $pictureSource = imagecreatefrompng($picture->getPathname());
                break;
            case 'image/jpeg':
                $pictureSource = imagecreatefromjpeg($picture->getPathname());
                break;
            case 'image/webp':
                $pictureSource = imagecreatefromwebp($picture->getPathname());
                break;
            default:
                throw new Exception('Invalid image format');
        }

        // Calculate image dimensions
        $imageWidth = imagesx($pictureSource);
        $imageHeight = imagesy($pictureSource);

        // Determine image orientation and cropping parameters
        $squareSize = min($imageWidth, $imageHeight);
        $src_x = ($imageWidth - $squareSize) / 2;
        $src_y = ($imageHeight - $squareSize) / 2;

        // Create a new resized image
        $resizedPicture = imagecreatetruecolor($width, $height);
        imagecopyresampled($resizedPicture, $pictureSource, 0, 0, $src_x, $src_y, $width, $height, $squareSize, $squareSize);

        $path = $this->params->get('images_directory') . $folder;

        // Create destination directory if it doesn't exist
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        // Save the resized image
        imagewebp($resizedPicture, $path . '/' . $fileName);

        // Move the original image to the specified directory
        $picture->move($path, $fileName);

        return $fileName;
    }

}