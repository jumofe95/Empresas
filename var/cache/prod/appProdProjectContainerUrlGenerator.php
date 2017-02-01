<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuarioBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuarioBundle\\Controller\\DefaultController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuarioBundle\\Controller\\DefaultController::usuariosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuarioBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/usuarios/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profesor_profesor_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profesor/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allprofesores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profesor/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profesor_profesor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profesor/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profesor_profesor_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProfesorBundle\\Controller\\ProfesorController::getAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profesor/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IndexBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_alumno_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AlumnoBundle\\Controller\\AlumnoController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empresa_empresa_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empresa_empresa_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::getAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
