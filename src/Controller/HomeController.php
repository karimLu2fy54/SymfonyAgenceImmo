<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController{

    private $twig;

    public function __construct($twig){

        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */

    public function index(){

        return $this->render('pages/home.twig.html');
    }
}

