<?php

namespace NetMedia\NetMadiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use NetMedia\NetMadiaBundle\Entity\Categorie;
use NetMedia\NetMadiaBundle\Entity\Media;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author optimus
 */
class AdminController extends Controller{
    
    /**
     * Gere l'affichage de la page d'accueil du producteur du media.
     * 
     * @access public
     * @author optimus <laurent.brau@gmail.com>
     * @return type
     */
    public function homePageAction()
    {
         $oEm = $this->getDoctrine()->getEntityManager();
         
         $oResquest = $this->getRequest();
         $media = new Media();
         $media->setActif(true);
         $media->setDescription("description coincoin");
         $media->setJacket("une jacket");
         $media->setDuree(30);
         $media->setPoids(30);

         $form = $this->createFormBuilder($media)
                 ->add('titre', 'text')
                 ->add('file')
                 ->getForm();
         
         if ($oResquest->isMethod('post')) {
             
             //echo "post pushed";
             
             $form->bind($oResquest);
             //var_dump("<PRE>",$media);die;
             if ($form->isValid()) {
                 
                 // methode de gestion de l'upload definit dans l'entity
                 $media->upload();
                 
                 $oEm->persist($media);
                 $oEm->flush();
             }
         }
      
//        return $this->render('NetMediaBundle:Admin:admin_home_page.html.twig', array(
//           'form' => $form->createView(),
//       ));
         return $this->render('NetMediaBundle:Front:maquette/clientConsultation.html.twig');
    }
    
    /**
     * methode de gestion de la requete ajax pour l'affichage de la jacket.
     *
     * @access public 
     * @author optimus <laurent.brau@gmail.com>
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homePage2Action() {
        
        //echo " #methode ajax# ";
        $oEm = $this->getDoctrine()->getManager();
        $oMediaRepository = $oEm->getRepository("NetMediaBundle:Media");
        $media = new Media();
        
        $oRequest = $this->getRequest();
        //echo "dans la methode ajax: ";
        
        if ($oRequest->isMethod('post')) {
            $odataRequest = $oRequest->request;
            //$rep = $oMediaRepository->checkTwinMediaTitle($odataRequest->get('sCuid'));

           $rep = $oMediaRepository->checkTwinMediaTitle('iron');
           
            if (false != $rep) {
                
                foreach ($rep as $k=>$o) {
                    
                    echo $k."  :  ".$o->getTitre();
                }
                //echo "dans la requete<br>";
            }
            else {
                
                //echo "aucun media dans la base<br>";die;
            }
        }
        
        //$sJacketDir = __DIR__.'/../../../../web/uploads/documents';
        $sJacketDir = __DIR__;
        //echo "sonde server root :",$_SERVER['DOCUMENT_ROOT']."/Projets/NetMedia/web/uploads/documents/chiot2.jpg";
        //echo " sonde sur la methode realpath  :",  realpath('chiot2.jpg');die;
        
        //header('Content-Type: image/jpg');
        //echo "Applications/MAMP/htdocs/Projets/NetMedia/web/uploads/documents/chiot2.jpg";
        //echo $_SERVER['DOCUMENT_ROOT']."/Projets/NetMedia/web/uploads/documents/novedia2.png";
        return new \Symfony\Component\HttpFoundation\Response($_SERVER['DOCUMENT_ROOT']."/Projets/NetMedia/web/uploads/documents/novedia2.png");
        //return $this->render($sJacketDir);
    }
}

?>
