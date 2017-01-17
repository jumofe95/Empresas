<?php

namespace AlumnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AlumnoController extends Controller
{
    /**
     * @Route("/all")
     */
    public function allAction()
    {
	    $repository = $this->getDoctrine()->getRepository('AlumnoBundle:Alumno');
	    // find *all* Alumnos
	    $alumnos = $repository->findAll();

	      return $this->render('AlumnoBundle:Default:alumnos_all.html.twig', array("alumnos"=>$alumnos));
    }

}
