<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatadragonController extends AbstractController
{
    /**
     * @Route("/DataD", name="DataD")
     */
    public function index(): Response
    {
        $call = file_get_contents("https://ddragon.leagueoflegends.com/cdn/9.3.1/data/en_US/item.json");
        $data = json_decode($call, true);
        $arr = [];

        foreach ($data as $k => $v) {
            if ($k === 'data'){
                foreach ($v as $id => $item)
                    $arr[$id] = [
                        'name' => $item['name'],
                        'description' => $item['plaintext'],
                        'gold' => $item['gold']
                    ];

                        //[$arr['name'] => $item['name'], $arr["description"] => $item['plaintext'], $item['gold'] => $item['gold']];
            }
        }

        return $this->render('DDragon/index.html.twig', [
            'result' =>  $arr,
            'controller_name' => 'DatadragonController',
        ]);
    }
}