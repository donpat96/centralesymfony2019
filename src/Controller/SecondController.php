<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    /**
     * @Route("/second/{nom}/{prenom}/{age}/{ville}/{section}", name="second")
     */
    public function index($section, $nom, $prenom, $age, $ville)
    {
//        $res=new Response("<html><body>Bonjour $section !</body></html>");
//        return $res;
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'ville' => $ville,
            'masection'=> $section,
        ]);
    }
}
