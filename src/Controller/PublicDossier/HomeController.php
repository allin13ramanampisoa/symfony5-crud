<?php

namespace App\Controller\PublicDossier;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/public/dossier/home", name="public_dossier_home")
     */
    public function index(): Response
    {
        return $this->render('public_dossier/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
