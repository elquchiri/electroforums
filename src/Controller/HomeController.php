<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response {
        $data = [
            [
                'category' => "Forum de bienvenue",
                'forums' => [
                    [
                        'title' => "Forum du bienvenue",
                        'updated' => "@mdo",
                        'count' => "458 . 4587",
                        'activity' => "Ok",
                        'icon' => 'clock-o'
                    ],
                    [
                        'title' => "Forum du bienvenue 2",
                        'updated' => "@mdo",
                        'count' => "458 . 4587",
                        'activity' => "Ok",
                        'icon' => 'check'
                    ]
                ]
            ],
            [
                'category' => "Développement informatique",
                'forums' => [
                    [
                        'title' => "Design & Sketching",
                        'updated' => "@mdo",
                        'count' => "458 . 4587",
                        'activity' => "Ok",
                        'icon' => 'users'
                    ],
                    [
                        'title' => "L'univers PHP",
                        'updated' => "@mdo",
                        'count' => "458 . 4587",
                        'activity' => "Ok",
                        'icon' => 'code'
                    ]
                ]
            ]
        ];
        return $this->render('hello.html.twig', ['categories' => $data]);
    }
}