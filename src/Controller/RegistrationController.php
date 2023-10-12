<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Entity\User;
use App\Form\GuideType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_register_user')]
    public function registerUser(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager): Response
    {

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('plainPassword')->getData()));

            // set user roles
            $user->setRoles(['ROLE_USER']);
            $entityManager->persist($user);
            $entityManager->flush();


            return $this->redirectToRoute('app_home');

        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/register/guide', name: 'app_register_guide')]
    public function registerGuide(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        SessionInterface $session): Response
    {

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('plainPassword')->getData()));

            // set user roles
            $user->setRoles(['ROLE_GUIDE']);
            $entityManager->persist($user);
            $entityManager->flush();

            // Save user id in session
            $session->set('user_id', $user->getId());


            return $this->redirectToRoute('app_register_details');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/register/details', name: 'app_register_details')]
    public function registerDetails(
        Request $request,
        EntityManagerInterface $entityManager,
        SessionInterface $session): Response
    {
        //get user id session
        $userId = $session->get('user_id');
        // get userId
        $user = $entityManager->getRepository(User::class)->find($userId);

        // if $userID and $user not found
        if (!$userId || !$user) {
            $errorMessage = 'ID not found';
            $this->addFlash('error', $errorMessage);
        }

        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // Get the selected Location entity
            $selectedLocation = $form->get('id_location')->getData();

            // Set the selected Location entity as id_location
            $guide->setIdLocation($selectedLocation);
            $guide->setUserId($user);
            $entityManager->persist($guide);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('registration/guide.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


}
