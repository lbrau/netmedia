<?php

namespace NetMedia\NetMadiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NetMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
