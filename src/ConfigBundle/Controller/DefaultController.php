<?php

namespace ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConfigBundle\Entity\Config;
use Symfony\Component\HttpFoundation\Request;
use ConfigBundle\Form\ConfigType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;




class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ConfigBundle:Default:all_config.html.twig');
    }



    /**
      * @Route("/all", name="all_config")
      */
     public function allAction()
     {
       $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, '¡No puedes acceder si no eres SuperAdmin!');

     $repository = $this->getDoctrine()->getRepository('ConfigBundle:Config');
     // find *all* configs
     $config = $repository->findAll();

       return $this->render('ConfigBundle:Default:all_config.html.twig', array("configs"=>$config));
     }


    /**
      * @Route("/new")
      */
     public function newAction(Request $request)
     {
       $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, '¡No puedes acceder si no eres SuperAdmin!');

       $config = new Config();
       $form = $this->createForm(ConfigType::class, $config);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()){
         //obtiene los datos
         $evento = $form->getData();
         //los sube a la bbdd
         $em = $this->getDoctrine()->getManager();
         $em->persist($evento);
         $em->flush();

         return $this -> redirectToRoute('all_config');
       }

       return $this->render('ConfigBundle:Default:new_config.html.twig', array("form" => $form->createView()));
     }

}
