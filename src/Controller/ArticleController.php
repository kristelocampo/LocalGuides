<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\GuideRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, GuideRepository $guideRepository): Response
    {
        // Get User Id
        $userId = $this->getUser()->getId();

        if (!$userId){
            return $this->redirectToRoute('app_home');
        }

        // Get GuideId from User
        $guideId = $guideRepository->findGuideById($userId);

        // Get articles by guideId
        $articles = $articleRepository->getArticleByGuideId($guideId);
        $showArticles = $articleRepository->showAllArticle();

        if($this->isGranted('ROLE_ADMIN')) {
            return $this->render('article/index.html.twig', [
                'articles' => $showArticles,
            ]);
        }
        elseif($this->isGranted('ROLE_GUIDE')){
            return $this->render('article/index.html.twig', [
                'articles' => $articles,
            ]);
        }
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        GuideRepository $guideRepository): Response
    {
        $article = new Article();

        $isAdmin = $this->isGranted("ROLE_ADMIN");

        $form = $this->createForm(ArticleType::class, $article, [
            'is_admin' => $isAdmin,
        ]);
        $form->handleRequest($request);

        //get user_id who is logged in
        $userId = $this->getUser()->getId();

        if ($form->isSubmitted() && $form->isValid()) {
            // Check if the user is an admin
            if ($isAdmin) {
                // Set guideId from the form if it's an admin
                $guideId = $form->get('id_guide')->getData();
                $article->setIdGuide($guideId);
            } else {
                // Get the guideId from the repository based on the logged-in user's id
                $guideId = $guideRepository->findGuide($userId);
                // Set the guideId property of the Article entity
                $article->setIdGuide($guideId);
            }

            $entityManager->persist($article);
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
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {

        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index');
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index');
    }


}
