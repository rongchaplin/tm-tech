<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 *
 * This is the base controller that handles the initial page rendering for the React JS app.
 */
class HomeController extends AbstractController
{
    /**
     * The main endpoint for initial page rendering.
     *
     * @Route("/")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
