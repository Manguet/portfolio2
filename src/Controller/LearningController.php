<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('/learn', name: 'app_learn_')]
class LearningController extends AbstractController
{
    #[Route('', 'index')]
    public function homepage(): Response
    {
        return $this->render('learn.html.twig');
    }
}