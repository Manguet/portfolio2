<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('/experience', name: 'app_experience_')]
class ExperienceController extends AbstractController
{
    #[Route('', 'index')]
    public function index(): Response
    {
        return $this->render('experience.html.twig');
    }
}