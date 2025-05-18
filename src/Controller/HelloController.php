<?php

namespace App\Controller;

use App\Entity\HelloWorld;
use App\Repository\HelloWorldRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HelloController extends AbstractController
{
    public function __construct(private readonly HelloWorldRepository $repo)
    {

    }

    #[Route('/', name: 'app_hello')]
    public function index(): Response
    {
        $helloWorld = $this->repo->findAll();
//        dd($helloWorld);
        return $this->render('hello/index.html.twig', [
            'helloWorld' => $helloWorld,
        ]);

    }
}
