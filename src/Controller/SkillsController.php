<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('/skills', name: 'app_skills_')]
class SkillsController extends AbstractController
{
    #[Route('', 'index')]
    public function index(): Response
    {
        return $this->render('skills.html.twig');
    }
}