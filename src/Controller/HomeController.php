<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{


    /**
     * @var \App\Repository\CategoryRepository
     */
    private $categoryRepository;

    public function __construct(
        \App\Repository\CategoryRepository $categoryRepository
    )
    {

        $this->categoryRepository = $categoryRepository;
    }

    public function index(): Response {
        $categories = $this->categoryRepository->findAll();
        dump($this->categoryRepository->count([]));
        return $this->render('home.html.twig', ['categories' => $categories]);
    }
}