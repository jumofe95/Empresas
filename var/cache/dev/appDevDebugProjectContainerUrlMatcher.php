<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/config')) {
            // config_default_index
            if (rtrim($pathinfo, '/') === '/config') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'config_default_index');
                }

                return array (  '_controller' => 'ConfigBundle\\Controller\\DefaultController::indexAction',  '_route' => 'config_default_index',);
            }

            // all_config
            if ($pathinfo === '/config/all') {
                return array (  '_controller' => 'ConfigBundle\\Controller\\DefaultController::allAction',  '_route' => 'all_config',);
            }

            // config_default_new
            if ($pathinfo === '/config/new') {
                return array (  '_controller' => 'ConfigBundle\\Controller\\DefaultController::newAction',  '_route' => 'config_default_new',);
            }

        }

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

        // logout
        if ($pathinfo === '/usuario/usuarios/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
