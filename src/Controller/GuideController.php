<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Form\GuideType;
use App\Repository\ArticleRepository;
use App\Repository\GuideRepository;
use App\Repository\ItinerariesRepository;
use App\Repository\LanguageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/guide')]
class GuideController extends AbstractController
{
    #[Route('/dashboard', name: 'app_guide_dashboard')]
    public function dashboard(GuideRepository $guideRepository,
                              ArticleRepository $articleRepository,
                              ItinerariesRepository $itinerariesRepository): Response
    {
        // Fetch user_id
        $userId = $this->getUser()->getId();

        $guide = $guideRepository->showGuideById($userId);

        $guideId = $guideRepository->findGuideById($userId);
        $articles = $articleRepository->getArticleByGuideId($guideId);
        $itineraries = $itinerariesRepository->getItineraryByGuideId($guideId);

        $guides = $guideRepository->findGuide($userId);
        $language = $guides->getLanguage();

        $location = $guideRepository->getLocationByGuideId($guideId);

        return $this->render('guide/dashboard.html.twig', [
            'guide' => $guide,
            'articles' => $articles,
            'itineraries' => $itineraries,
            'language' => $language,
            'location' => $location
        ]);
    }

    #[Route('/', name: 'app_guide_index', methods: ['GET'])]
    public function index(GuideRepository $guideRepository): Response
    {
        return $this->render('guide/index.html.twig', [
            'guides' => $guideRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_guide_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isGranted("ROLE_ADMIN")) {
            return $this->redirectToRoute('app_register_guide');
        }

        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($guide);
            $entityManager->flush();

            return $this->redirectToRoute('app_guide_index');
        }

        return $this->render('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_show', methods: ['GET'])]
    public function show(Guide $guide): Response
    {
        return $this->render('guide/show.html.twig', [
            'guide' => $guide,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_guide_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Guide $guide, EntityManagerInterface $entityManager, LanguageRepository $languageRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->flush();

            if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('app_guide_index');
            }
            elseif ($this->isGranted('ROLE_GUIDE')){
                return $this->redirectToRoute('app_guide_dashboard');
            }

        }

        return $this->render('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_delete', methods: ['POST'])]
    public function delete(Request $request, Guide $guide, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $entityManager->remove($guide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_guide_index');
    }


    #[Route('/itineraries', name: 'app_itineraries_guide', methods: ['GET'])]
    public function itineraries(GuideRepository $guideRepository): Response
    {
        return $this->render('guide/index.html.twig', [
            'guides' => $guideRepository->findAll(),
        ]);
    }




}
