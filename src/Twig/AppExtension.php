<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('ratingStars', [$this, 'ratingStarsFilter']),
        ];
    }

    public function ratingStarsFilter($rating, $maxRating = 5)
    {
        $rating = max(0, min($rating, $maxRating));

        $fullStars = floor($rating);
        $halfStars = round($rating - $fullStars);
        $emptyStars = $maxRating - $fullStars - $halfStars;

        $stars = str_repeat('★', $fullStars) . str_repeat('½', $halfStars) . str_repeat('☆', $emptyStars);

        return $stars;
    }
}
