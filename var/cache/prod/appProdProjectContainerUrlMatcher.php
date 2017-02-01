<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // admin_default_index
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_default_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_default_index');
                }

                return array (  '_controller' => 'UsuarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuario_default_index',);
            }

            // user_registration
            if ($pathinfo === '/usuario/register') {
                return array (  '_controller' => 'UsuarioBundle\\Controller\\DefaultController::registerAction',  '_route' => 'user_registration',);
            }

            if (0 === strpos($pathinfo, '/usuario/usuarios')) {
                // usuarios
                if ($pathinfo === '/usuario/usuarios') {
                    return array (  '_controller' => 'UsuarioBundle\\Controller\\DefaultController::usuariosAction',  '_route' => 'usuarios',);
                }

                // login
                if ($pathinfo === '/usuario/usuarios/login') {
                    return array (  '_controller' => 'UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/profesor')) {
            // profesor_profesor_index
            if (rtrim($pathinfo, '/') === '/profesor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profesor_profesor_index');
                }

                return array (  '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::indexAction',  '_route' => 'profesor_profesor_index',);
            }

            // allprofesores
            if ($pathinfo === '/profesor/all') {
                return array (  '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::allAction',  '_route' => 'allprofesores',);
            }

            // profesor_profesor_new
            if ($pathinfo === '/profesor/new') {
                return array (  '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::newAction',  '_route' => 'profesor_profesor_new',);
            }

            // profesor_profesor_get
            if ($pathinfo === '/profesor/api') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profesor_profesor_get;
                }

                return array (  '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::getAction',  '_route' => 'profesor_profesor_get',);
            }
            not_profesor_profesor_get:

        }

        // index_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index_default_index');
            }

            return array (  '_controller' => 'IndexBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index_default_index',);
        }

        // alumno_alumno_all
        if ($pathinfo === '/alumno/all') {
            return array (  '_controller' => 'AlumnoBundle\\Controller\\AlumnoController::allAction',  '_route' => 'alumno_alumno_all',);
        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // all
            if ($pathinfo === '/empresa/all') {
                return array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::allAction',  '_route' => 'all',);
            }

            // empresa_empresa_new
            if ($pathinfo === '/empresa/new') {
                return array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_empresa_new',);
            }

            // empresa_empresa_get
            if ($pathinfo === '/empresa/api') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_empresa_get;
                }

                return array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::getAction',  '_route' => 'empresa_empresa_get',);
            }
            not_empresa_empresa_get:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
