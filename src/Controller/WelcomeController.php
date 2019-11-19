<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome_path", name="welcome_name")
     */
    public function index()
    {
        return $this->render('welcome/welcome_index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);

        // return new Response('hello', Response::HTTP_OK);
    }
}
