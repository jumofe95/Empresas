<?php

namespace EmpresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EmpresaBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\Request;
use EmpresaBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class EmpresaController extends Controller
{

	 /**
     * @Route("/all", name="all")
     */
    public function allAction()
    {

    $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Empresa');
    // find *all* Empresas
    $empresas = $repository->findAll();

      return $this->render('EmpresaBundle:Default:empresas_all.html.twig', array("empresas"=>$empresas));
    }


	 /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
			$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'No puedes acceder si no eres admin!');

	    $empresa = new Empresa();
	    $form = $this->createForm(EmpresaType::class, $empresa);
	    $form->handleRequest($request);

	    if ($form->isSubmitted() && $form->isValid()){
	      //obtiene los datos
	      $evento = $form->getData();
	      //los sube a la bbdd
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($evento);
	      $em->flush();

	      return $this -> redirectToRoute('all');
	    }

	    return $this->render('EmpresaBundle:Default:empresas_new.html.twig', array("form" => $form->createView()));
    }



   /**
   * @Route("/api")
   * @Method({"GET"})
   */
  public function getAction()
  {
    $empresas = $this->getDoctrine()->getManager()->createQuery('SELECT c FROM EmpresaBundle:Empresa c')->getArrayResult();
    $response = new Response(json_encode($empresas));

    return $response;
  }

}
