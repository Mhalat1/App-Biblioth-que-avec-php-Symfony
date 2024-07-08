<?php
namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController {
    #[Route("/books", name:"book_list")]
    public function list(BookRepository $repo): Response {
        $books = $repo ->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route("/books/{id}", name:"book_detail")]
    public function liste(BookRepository $repo, $id): Response {
        $books = $repo ->findAll();
        if (!isset($books[$id-1])) {
            throw $this->createNotFoundException('The book does not exist');
        }
        return $this->render('book/detail.html.twig', [
            'book' => $books[$id-1],
        ]);
    }



    #[Route("/Contact", name:"Contact")]
    public function Contact(BookRepository $repo) : Response {
        $books = $repo ->findAll();
                return $this->render('book/contact.html.twig', [
            'books' => $books,
        ]);}
    }