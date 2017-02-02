<?php

namespace ProfesorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ProfesorBundle\Entity\Profesor;
use Symfony\Component\HttpFoundation\Request;
use ProfesorBundle\Form\ProfesorType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class ProfesorController extends Controller
{
	 /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ProfesorBundle:Default:index.html.twig');
    }


     /**
     * @Route("/all", name="allprofesores")
     */
    public function allAction()
    {
      //conecta la bd y la entidad de Profesor y la guarda en la variable $repository
	    $repository = $this->getDoctrine()->getRepository('ProfesorBundle:Profesor');
	    // find *all* Alumnos
	    $profesores = $repository->findAll();

      // devuelve un array de profesores
	     return $this->render('ProfesorBundle:Default:profesores_all.html.twig', array("profesores"=>$profesores));
    }



   	/**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
			$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'No puedes acceder si no eres admin!');

      //se crea una variable de tipo Profesor, que la enlaza con ProfesorType (que será el php creado para "pintar" la interfaz del formulario)
	    $profesor = new Profesor();
	    $form = $this->createForm(ProfesorType::class, $profesor);
	    $form->handleRequest($request);

      //si el formulario tiene todos los campos validos y se le pula el boton de SUBMIT...
	    if ($form->isSubmitted() && $form->isValid()){
	      //obtiene los datos
	      $evento = $form->getData();
	      //los sube a la bbdd
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($evento);
	      $em->flush();

        //redirecciona a allprofesores (/all)
	      return $this -> redirectToRoute('allprofesores');
	    }
        //devuelve la vista del formulario, que posteriormente se implantará en el twig correspondiente
	    return $this->render('ProfesorBundle:Default:profesores_new.html.twig', array("form" => $form->createView()));
    }


   /**
   * @Route("/api")
   * @Method({"GET"})
   */
  public function getAction()
  {
    //conecta con doctrine y se guarda en la variable $profesores una consulta para sacar toda la info de los profesores
    $profesores = $this->getDoctrine()->getManager()->createQuery('SELECT c FROM ProfesorBundle:Profesor c')->getArrayResult();
    //obtenemos un Response de tipo json de todos los profesores
    $response = new Response(json_encode($profesores));

    return $response;
  }


}
