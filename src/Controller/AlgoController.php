<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlgoController extends AbstractController
{
    /**
     * @Route("/algo", name="algo")
     */
    public function index(): Response
    {
        return $this->render('algo/index.html.twig', [
            'result' => $this->fact(5),
            'controller_name' => 'AlgoController',
        ]);
    }

    protected function fact($nmbr)
    {
        if ($nmbr !== 0)
        {
            return $nmbr * $this->fact( $nmbr - 1);
        } else {
            return 1;
        }
    }
}
