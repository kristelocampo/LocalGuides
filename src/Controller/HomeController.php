<?php

namespace App\Controller;


use App\Entity\Review;
use App\Form\ProfileEditType;
use App\Form\ReviewType;
use App\Repository\ArticleRepository;
use App\Repository\GuideRepository;
use App\Repository\ImageRepository;
use App\Repository\ItinerariesRepository;
use App\Repository\ReviewRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ItinerariesRepository $itinerariesRepository,
        ArticleRepository $articleRepository,
        UserRepository $userRepository): Response
    {
        $showArticles = $articleRepository->showAllArticle();
        $showItineraries = $itinerariesRepository->showAllItineraries();

        if ($this->isGranted("ROLE_USER")) {
            $userId = $this->getUser()->getId();

            $user = $userRepository->getUserById($userId);
            return $this->render('home/index.html.twig', [
                'showItineraries' => $showItineraries,
                'showArticles' => $showArticles,
                'user' => $user,]);
        }
        else{
            return $this->render('home/index.html.twig', [
                'showItineraries' => $showItineraries,
                'showArticles' => $showArticles
            ]);
        }

    }

    #[Route('/showarticles', name: 'app_articles')]
    public function articles(
        ArticleRepository $articleRepository,
        UserRepository $userRepository): Response
    {
        $showArticles = $articleRepository->showAllArticle();

        if ($this->isGranted("ROLE_USER")) {
            $userId = $this->getUser()->getId();

            $user = $userRepository->getUserById($userId);
            return $this->render('home/articles.html.twig', [
                'showArticles' => $showArticles,
                'user' => $user,]);
        }
        else{
            return $this->render('home/articles.html.twig', [
                'showArticles' => $showArticles
            ]);
        }

    }

    #[Route('/itinerary', name: 'app_itinerary')]
    public function iteneraries(
        ItinerariesRepository $itinerariesRepository,
        UserRepository $userRepository): Response
    {
        $showItineraries = $itinerariesRepository->showAllItineraries();

        if ($this->isGranted("ROLE_USER")) {
            $userId = $this->getUser()->getId();

            $user = $userRepository->getUserById($userId);
            return $this->render('home/itineraries.html.twig', [
                'showItineraries' => $showItineraries,
                'user' => $user,]);
        }
        else{
            return $this->render('home/itineraries.html.twig', [
                'showItineraries' => $showItineraries,
            ]);
        }

    }

    #[Route('showArticle/{id}', name: 'app_article_show_user', methods: ['GET', 'POST'])]
    public function showArticle(ArticleRepository $articleRepository, $id,
                                Request $request,
                                UserRepository $userRepository,
                                ReviewRepository $reviewRepository,
                                EntityManagerInterface $entityManager): Response
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        $articleId = $articleRepository->find($id);
        $article = $articleRepository->getArticleById($articleId);

        $reviews = $reviewRepository->getReviewByArticleId($id);

        $user = null;

        if ($this->isGranted("ROLE_USER") or $this->isGranted("ROLE_GUIDE")){
            $userId = $this->getUser()->getId();
            $user = $userRepository->getUserById($userId);
        }

        if($form->isSubmitted() && $form->isValid()){

            $review->setIdUser($user);
            $review->setIdArticle($articleId);

            $entityManager->persist($review);
            $entityManager->flush();

            $this->addFlash('success', 'Review submitted successfully');

            return $this->redirectToRoute('app_article_show_user', ['id' => $id]);
        }

        return $this->render('home/showArticle.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
            'reviews' => $reviews,
            'user' => $user
        ]);
    }

    #[Route('showItinerary/{id}', name: 'app_itinerary_show_user', methods: ['GET', 'POST'])]
    public function showItineraries(ItinerariesRepository $itinerariesRepository,
                                    $id,
                                    Request $request,
                                    UserRepository $userRepository,
                                    ReviewRepository $reviewRepository,
                                    EntityManagerInterface $entityManager,
                                    ImageRepository $imageRepository): Response
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        $itineraryId = $itinerariesRepository->find($id);
        $itinerary = $itinerariesRepository->getItineraryById($itineraryId);

        $reviews = $reviewRepository->getReviewByItineraryId($id);

        $images = $imageRepository->getImagesByItinerary($itineraryId);

        $user = null;

        if ($this->isGranted("ROLE_USER") or $this->isGranted("ROLE_GUIDE")){
            $userId = $this->getUser()->getId();
            $user = $userRepository->getUserById($userId);
        }

        if($form->isSubmitted() && $form->isValid()){
            $review->setIdUser($user);
            $review->setIdItinerary($itineraryId);

            $entityManager->persist($review);
            $entityManager->flush();

            $this->addFlash('success', 'Review submitted successfully');

            return $this->redirectToRoute('app_itinerary_show_user', ['id' => $id]);

        }

        return $this->render('home/showItineraries.html.twig', [
            'itinerary' => $itinerary,
            'form' => $form,
            'reviews' => $reviews,
            'user' => $user,
            'images' => $images
        ]);
    }

    #[Route('showGuide/{idGuide}', name: 'app_guide_details', methods: ['GET'])]
    public function showGuideDetails($idGuide,
                                     GuideRepository $guideRepository,
                                     ArticleRepository $articleRepository,
                                     ItinerariesRepository $itinerariesRepository): Response
    {

        $guide = $guideRepository->showGuideDetailsByGuide($idGuide);
        $articles = $articleRepository->getArticleByGuideId($idGuide);
        $itineraries = $itinerariesRepository->getItineraryByGuideId($idGuide);


        return $this->render('home/showGuideDetails.html.twig',[
            'guide' => $guide,
            'articles' => $articles,
            'itineraries' => $itineraries
        ]);
    }

}
