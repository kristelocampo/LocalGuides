<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/verify', name: 'app_verify', methods: ['GET'])]
    public function index(
        Security $security,
        AuthorizationCheckerInterface $authorizationChecker): Response
    {
        $user = $security->getUser();

        if($user === null)
        {
            throw $this->createAccessDeniedException('You must Login');
        }

        if ($authorizationChecker->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('app_admin_dashboard');
        }
        elseif ($authorizationChecker->isGranted('ROLE_GUIDE')) {
            return $this->redirectToRoute('app_guide_dashboard');
        }
        elseif ($authorizationChecker->isGranted('ROLE_USER')){
            return $this->redirectToRoute('app_home');
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
}
