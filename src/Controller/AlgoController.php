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
            'result' => json_encode($this->bubble([55, 2, [5, 3, 1, [9, 8, 7]] , 8])),
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
        $newArr = [];
        while($isSwap === true) {
            $isSwap = false;
            for ($i = 0; $i < count($arr) - 1; $i++)
            {
               if (is_array($arr[$i]))
               {
                   $this->bubble($arr[$i]);
               } else {
                   $tempArr = [];
                   if ($arr[$i] > $arr[$i + 1])
                   {
                       $temp = $tempArr[$i];
                       $tempArr[$i] = $tempArr[$i + 1];
                       $tempArr[$i + 1 ] = $temp;
                       $isSwap = true;
                       $arr[$i] = $tempArr;
                   }
               }
            }
        }
        return $arr;
    }

}
