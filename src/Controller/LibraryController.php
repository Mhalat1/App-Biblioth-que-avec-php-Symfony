<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LibraryController extends AbstractController
{
    #[Route("/", name: "app_home")]
    public function index(): Response {
        return $this->render('library/index.html.twig', [
            'message' => 'Bienvenue à la bibliothèque',
        ]);
    }


    #[Route('/listBooks', name: 'listBooks')]
    public function listBooks()
    {
    }

    #[Route('/bookDetails', name: 'app_welcome')]
    public function hello()
    {

        $url = $this->generateUrl('app_welcome');

        return new Response($url);
    }

    #[Route('/bookDetails/{id}', name: 'bookDetails')]
    public function helloWithId($id)
    {
        $url = "http://127.0.0.1:8000/" . $this->generateUrl('bookDetails', ['id' => $id]);

        return $this->render('library/contact.html.twig', [
            'url' => $url,
        ]);
        
    }
}
