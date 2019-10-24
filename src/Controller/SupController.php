<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SupController extends AbstractController
{
    /**
     * @Route("/blog/page1", name="page1")
     */
    public function page1()
    {
        return $this->render('sup/page1.html.twig', [
            'controller_name' => 'SupController',
        ]);
    }

    /**
     * @Route("/blog/page2", name="page2")
     */
    public function page2()
    {
        return $this->render('sup/page2.html.twig', [
            'controller_name' => 'SupController',
        ]);
    }
}
