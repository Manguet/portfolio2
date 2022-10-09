<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('/', name: 'base')]
class DefaultController extends AbstractController
{
    #[Route('', '_index')]
    public function homepage(): Response
    {
        return $this->render('homepage.html.twig');
    }
}