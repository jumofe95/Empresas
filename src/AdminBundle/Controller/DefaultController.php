<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'No puedes acceder si no eres admin!');

        return $this->render('AdminBundle:Default:index.html.twig');
    }
}
