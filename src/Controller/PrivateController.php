<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrivateController extends Controller
{
    /**
     * @Route("/private", name="private")
     */
    public function index()
    {
        return $this->render('private/index.html.twig', [
            'controller_name' => 'PrivateController',
        ]);
    }
}
