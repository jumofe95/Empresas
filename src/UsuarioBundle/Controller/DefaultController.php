<?php

namespace UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UsuarioBundle\Entity\Usuario;
use UsuarioBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UsuarioBundle:Default:index.html.twig');
    }

/**
 * @Route("/register", name="user_registration")
 */
  public function registerAction(Request $request)
  {
      // 1) build the form
      $user = new Usuario();
      $form = $this->createForm(UsuarioType::class, $user);

      // 2) handle the submit (will only happen on POST)
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

          // 3) Encode the password (you could also do this via Doctrine listener)
          $password = $this->get('security.password_encoder')
              ->encodePassword($user, $user->getPlainPassword());
          $user->setPassword($password);

          // 4) save the User!
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();

          // ... do any other work - like sending them an email, etc
          // maybe set a "flash" success message for the user

          //return $this->redirectToRoute('home');
          return new Response("¡Usuario Registrado!");
      }

      return $this->render(
          'UsuarioBundle:Default:register.html.twig',
          array('form' => $form->createView())
      );
  }


  /**
   * @Route("/usuarios", name="usuarios")
   */
  public function usuariosAction()
  {
      return $this->render('UsuarioBundle:Default:usuarios.html.twig');
  }


  /**
 * @Route("/usuarios/login", name="login")
 */
public function loginAction(Request $request)
{
  $authenticationUtils = $this->get('security.authentication_utils');

  // get the login error if there is one
  $error = $authenticationUtils->getLastAuthenticationError();

  // last username entered by the user
  $lastUsername = $authenticationUtils->getLastUsername();

  return $this->render('UsuarioBundle:Default:login.html.twig', array(
      'last_username' => $lastUsername,
      'error'         => $error,
  ));

}



}
