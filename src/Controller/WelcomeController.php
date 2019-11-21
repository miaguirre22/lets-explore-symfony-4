<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome_page")
     */
    public function index()
    {
        return $this->render('welcome/welcome_index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);

        // return new Response('hello', Response::HTTP_OK);
    }
    
    /**
     * @Route(
     *      "/hello-page/{name}", 
     *      name="hello_page", 
     *      defaults={"name" = "default name"},
     *      requirements={"name"="[A-Za-z]+"})
     * @param string $name
     */
    public function hello(string $name)
    {
        return $this->render('hello_page.html.twig', [
            'name' => $name,
            // 'name' => $request->query->get('name', 'world'),
            // 'some_variable' => $request->query->get('someVar', 'variable by default')
        ]);
    }
}
