<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        $name = 1;

        return $this->render('CasinoGeneralBundle:Default:index.html.twig', array(
            'name' => $name
        ));
    }
}
