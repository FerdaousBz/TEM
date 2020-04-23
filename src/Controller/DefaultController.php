<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
  /**
      * @Route("/", name="homepage")
      */
    public function index(){

      return $this->render('base.html.twig');

    }
}
