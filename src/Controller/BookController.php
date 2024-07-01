<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController {
    #[Route("/books", name:"book_list")]
    public function list(): Response {
        $books = [
            ['id' => 1, 'title' => '1984', 'author' => 'George Orwell'],
            ['id' => 2, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
            ['id' => 3, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ];

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route("/books/{id}", name:"book_detail")]
    public function detail($id): Response {
        $books = [
            1 => ['title' => '1984', 'author' => 'George Orwell', 'description' => 'Dystopian novel.'],
            2 => ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'description' => 'Novel about racial injustice.'],
            3 => ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'description' => 'Novel about the American dream.'],
        ];

        if (!isset($books[$id])) {
            throw $this->createNotFoundException('The book does not exist');
        }

        return $this->render('book/detail.html.twig', [
            'book' => $books[$id],
        ]);
    }



    #[Route("/Contact", name:"Contact")]
    public function Contact() : Response {
        $books = [
            ['id' => 1, 'title' => '1984', 'author' => 'George Orwell'],
            ['id' => 2, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
            ['id' => 3, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ];

                return $this->render('book/contact.html.twig', [
            'books' => $books,
        ]);}
    }