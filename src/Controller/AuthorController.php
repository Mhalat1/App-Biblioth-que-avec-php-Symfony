<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    private $repo;

    public function __construct(AuthorRepository $repo) {
        $this->repo = $repo;
    }

    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        $authors = $this->repo->findAll();

        return $this->render('author/index.html.twig', [
            'authors' => $authors,
        ]);
    }


}
