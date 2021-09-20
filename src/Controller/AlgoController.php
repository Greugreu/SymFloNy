<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\Boolean;
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
            'result' => json_encode($this->bubble([55, 2, 8])),
            'controller_name' => 'AlgoController',
        ]);
    }

    protected function fact(int $nmbr): int
    {
        if ($nmbr !== 0)
        {
            return $nmbr * $this->fact( $nmbr - 1);
        } else {
            return 1;
        }
    }

    protected function bubble(array $arr): array
    {
        $isSwap = true;
        while($isSwap === true) {
            $isSwap = false;
            $length = count($arr);
            for ($i = 0; $i < $length - 1; $i++)
            {
                if ($arr[$i] > $arr[$i + 1])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1 ] = $temp;
                    $isSwap = true;
                }
            }
        }
        return $arr;
    }
}
