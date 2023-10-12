<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Guide;
use App\Entity\Itineraries;
use App\Entity\Language;
use App\Entity\Location;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{

    #[Route('/dashboard', name: 'app_admin_dashboard')]
    public function index(EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $articleCount = $entityManager->getRepository(Article::class)->count([]);
        $itineraryCount = $entityManager->getRepository(Itineraries::class)->count([]);
        $guideCount = $entityManager->getRepository(Guide::class)->count([]);
        $languageCount = $entityManager->getRepository(Language::class)->count([]);
        $locationCount = $entityManager->getRepository(Location::class)->count([]);



        return $this->render('admin/index.html.twig', [
            'articleCount' => $articleCount,
            'itineraryCount' => $itineraryCount,
            'guideCount' => $guideCount,
            'languageCount' => $languageCount,
            'locationCount'=> $locationCount,
        ]);
    }
}
