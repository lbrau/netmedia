<?php

namespace NetMedia\NetMadiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FrontController
 *
 * @author optimus
 */
class FrontController extends Controller {
    
     public function accueilAction()
    {
        return $this->render('NetMediaBundle:Front:home_page.html.twig');
    }
}

?>
