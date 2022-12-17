<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('/{_locale}/project', name: 'app_project_')]
class ProjectController extends AbstractController
{
    #[Route('', 'index')]
    public function index(): Response
    {
        return $this->render('project.html.twig');
    }
}