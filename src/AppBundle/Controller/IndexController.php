<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:index.html.twig');
    }

    public function accesoriosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:accesorios.html.twig');
    }

    public function contactoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:contacto.html.twig');
    }

    public function localizadoresAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:localizadores.html.twig');
    }

    public function radiosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:radios.html.twig');
    }

    public function tacografosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:tacografos.html.twig');
    }

    public function taximetrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:taximetros.html.twig');
    }
}
