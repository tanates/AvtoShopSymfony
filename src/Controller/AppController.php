<?php

namespace App\Controller;

use App\Repository\AvtoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
class AppController extends AbstractController
{
     private $twig;
     public function __construct(Environment $twig){
        $this->twig = $twig;
     }

     #[Route('/', name: 'indexApp')]
    public function index(AvtoRepository $avtoRepository): Response
    {
        $data = $avtoRepository->findAllAsArray();
        $html = $this->twig->render('index.html.twig', [
            'data' => $data
        ]);
        
        return new Response($html);
    }
}
