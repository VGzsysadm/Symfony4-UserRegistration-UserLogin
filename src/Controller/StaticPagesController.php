<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticPagesController extends Controller
{
    /**
     * @Route("/privacy-policy", name="privacy_policy")
     */
    public function index()
    {
        return $this->render('static_pages/privacypolicy.html.twig', [
            'controller_name' => 'StaticPagesController',
        ]);
    }
}
