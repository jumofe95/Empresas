<?php

/* base.html.twig */
class __TwigTemplate_ce9e170efda896d4287434d334c40079305b78ad011d51b954dc8ea834a95a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

      <div id=\"wrapper\">
        <div class=\"overlay\"></div>
        <!-- Sidebar -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"sidebar-wrapper\" role=\"navigation\">
            <ul class=\"nav sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"#\">
                       Gestor FCT.
                    </a>
                </li>
                <li>
                    <a href=\"/\"><i class=\"fa fa-fw fa-home\"></i> Home</a>
                </li>
                
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-briefcase\"></i> Empresa <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li class=\"dropdown-header\">Gestor Empresas</li>
                    <li><a href=\"/empresa/all\">Ver Empresas</a></li>
                    <li><a href=\"/empresa/new\">Añadir Empresa</a></li>
                  </ul>
                </li>
                
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> Alumno <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li class=\"dropdown-header\">Gestor Alumnos</li>
                    <li><a href=\"/alumno/all\">Ver Alumnos</a></li>
                  </ul>
                </li>

                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-briefcase\"></i> Profesor <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li class=\"dropdown-header\">Gestor Profesores</li>
                    <li><a href=\"/profesor/all\">Ver Profesores</a></li>
                    <li><a href=\"/profesor/new\">Añadir Profesor</a></li>
                  </ul>
                </li>

            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
          <button type=\"button\" class=\"hamburger is-closed animated fadeInLeft\" data-toggle=\"offcanvas\">
            <span class=\"hamb-top\"></span>
            <span class=\"hamb-middle\"></span>
            <span class=\"hamb-bottom\"></span>
          </button>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->


        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Gestor FCT";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <!-- BOOTSTRAP Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <!-- BOOTSTRAP Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

            <!-- SIDEBAR-->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        // line 78
        echo "                        ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "            <!-- BOOTSTRAP Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
            <!-- SIDEBAR -->
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sidebar.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 95,  155 => 89,  152 => 88,  148 => 78,  145 => 77,  139 => 17,  128 => 8,  125 => 7,  119 => 6,  113 => 97,  111 => 88,  100 => 79,  98 => 77,  36 => 19,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\symfony\\Empresas\\app\\Resources\\views\\base.html.twig");
    }
}
