<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/first", name="first")
     */
    public function index(Request $request)
    {
//        dump($request);
//        $response = new Response("<h1>Hello World</h1>");
//        $responsejson = new JsonResponse(array(
//            "name" => "nganbe",
//            "first name" => "patrick"
//        ));
//        dump($response);
//        return $responsejson;
        return $this->render('first/index.html.twig', [
            //'controller_name' => 'FirstController',
            'esm' => 'Patrick',
            'age' => '99 ans',
            'ville' => 'Tokyo',
            'ideal' => 'La volonté du D',
        ]);
    }

    public function second(){
        return $this.$this->render('first/npd.html.twig');
    }
}
