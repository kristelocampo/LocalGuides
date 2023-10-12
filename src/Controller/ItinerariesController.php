<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Itineraries;
use App\Form\ItinerariesType;
use App\Repository\GuideRepository;
use App\Repository\ImageRepository;
use App\Repository\ItinerariesRepository;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/itineraries')]
class ItinerariesController extends AbstractController
{

    #[Route('/', name: 'app_itineraries_index', methods: ['GET'])]
    public function index(ItinerariesRepository $itinerariesRepository, GuideRepository $guideRepository, ImageRepository $imageRepository): Response
    {
        $userId = $this->getUser()->getId();

        $guideId = $guideRepository->findGuideById($userId);

        $itineraries = $itinerariesRepository->getItineraryByGuideId($guideId);
        $itinerary = $itinerariesRepository->showAllItineraries();
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('itineraries/index.html.twig', [
                'itineraries' => $itinerary,
            ]);
        }
        elseif($this->isGranted('ROLE_GUIDE')){
            return $this->render('itineraries/index.html.twig', [
                'itineraries' => $itineraries,
            ]);
        }

    }

    #[Route('/new', name: 'app_itineraries_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        GuideRepository $guideRepository,
        ImageService $imageService): Response
    {
        $itinerary = new Itineraries();
        $isAdmin = $this->isGranted("ROLE_ADMIN");

        $form = $this->createForm(ItinerariesType::class, $itinerary, [
            'is_admin' => $isAdmin,
        ]);
        $form->handleRequest($request);

        //get guide_id who is logged in
        $userId = $this->getUser()->getId();

        // Today's date
        $today = new \DateTime();

        if ($form->isSubmitted() && $form->isValid()) {
            // Get image
            $images = $form->get('id_image')->getData();

            $folder = 'itinerary';
            $fileName = $imageService->add($images, $folder, 300, 300);

            $img = new Image();
            $img->setName($fileName);
            $itinerary->addIdImage($img);

            // Check if the user is an admin
            if ($isAdmin) {
                // Set guideId from the form if it's an admin
                $guideId = $form->get('id_guide')->getData();
                $itinerary->setIdGuide($guideId);
            } else {
                // Get the guide_id who is logged in
                $userId = $this->getUser()->getId();
                // Get the guideId from the repository based on the logged-in user's id
                $guideId = $guideRepository->findGuide($userId);
                // Set guideId
                $itinerary->setIdGuide($guideId);
            }

            $itinerary->setCreatedDate($today);

            $entityManager->persist($itinerary);
            $entityManager->flush();

            $this->addFlash('success', 'Successfully added');

            if($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('app_article_index');
            }
            elseif ($this->isGranted('ROLE_GUIDE')){
                return $this->redirectToRoute('app_guide_dashboard');
            }
            else{
                return $this->redirectToRoute('app_home');
            }

            return $this->redirectToRoute('app_itineraries_index');
        }

        return $this->render('itineraries/new.html.twig', [
            'itinerary' => $itinerary,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_itineraries_show', methods: ['GET'])]
    public function show(ItinerariesRepository $itinerariesRepository, $id): Response
    {
        $itinerary = $itinerariesRepository->getItineraryById($id);

        return $this->render('itineraries/show.html.twig', [
            'itinerary' => $itinerary,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_itineraries_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Itineraries $itinerary, EntityManagerInterface $entityManager, ImageService $imageService, ImageRepository $imageRepository, $id): Response
    {
        $form = $this->createForm(ItinerariesType::class, $itinerary);
        $form->handleRequest($request);

        $images = $imageRepository->getImagesByItinerary($id);
        $existingImage = $imageRepository->findOneBy(['itineraries' => $itinerary]);

        if ($form->isSubmitted() && $form->isValid()) {
            $newImageFile = $form->get('id_image')->getData();

            if ($newImageFile) {
                // A new image file was uploaded, handle it
                $folder = 'itinerary';

                // Call service to add image
                $fileName = $imageService->add($newImageFile, $folder, 300, 300);

                if ($existingImage) {
                    $existingImage->setName($fileName);
                } else {
                    $newImage = new Image();
                    $newImage->setName($fileName);
                    $newImage->setItineraries($itinerary);
                    $entityManager->persist($newImage);
                }
            }
            $entityManager->flush();

            $this->addFlash('success', 'Successfully edited');

            return $this->redirectToRoute('app_itineraries_index');
        }

        return $this->render('itineraries/edit.html.twig', [
            'itinerary' => $itinerary,
            'form' => $form,
            'images' => $images
        ]);
    }

    #[Route('/{id}', name: 'app_itineraries_delete', methods: ['POST'])]
    public function delete(Request $request, Itineraries $itinerary, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$itinerary->getId(), $request->request->get('_token'))) {
            $images = $itinerary->getIdImages();

            foreach ($images as $image) {
                $entityManager->remove($image);
            }

            $entityManager->remove($itinerary);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_itineraries_index');
    }

}
