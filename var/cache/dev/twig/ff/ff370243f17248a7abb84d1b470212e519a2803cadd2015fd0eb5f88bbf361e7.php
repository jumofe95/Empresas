<?php

/* ::base.html.twig */
class __TwigTemplate_b0aade11d78d2d9051071cda41a3e1d7f7b01b9f75e098f283b1ab795b95d3ce extends Twig_Template
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
        $__internal_1f294e91d004ad235fc76454f495bbd38aa6663622fe7ed87a0f5029f954e29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f294e91d004ad235fc76454f495bbd38aa6663622fe7ed87a0f5029f954e29e->enter($__internal_1f294e91d004ad235fc76454f495bbd38aa6663622fe7ed87a0f5029f954e29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1f294e91d004ad235fc76454f495bbd38aa6663622fe7ed87a0f5029f954e29e->leave($__internal_1f294e91d004ad235fc76454f495bbd38aa6663622fe7ed87a0f5029f954e29e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_49936b0f513012702e98fd19754f58d75dd0aa8632c4f7287f3973047943a25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49936b0f513012702e98fd19754f58d75dd0aa8632c4f7287f3973047943a25e->enter($__internal_49936b0f513012702e98fd19754f58d75dd0aa8632c4f7287f3973047943a25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Gestor FCT";
        
        $__internal_49936b0f513012702e98fd19754f58d75dd0aa8632c4f7287f3973047943a25e->leave($__internal_49936b0f513012702e98fd19754f58d75dd0aa8632c4f7287f3973047943a25e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2978f65c4964bfd5aee14e5d7ae70200ac29f8008c3109040f2415fc9a5ad190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2978f65c4964bfd5aee14e5d7ae70200ac29f8008c3109040f2415fc9a5ad190->enter($__internal_2978f65c4964bfd5aee14e5d7ae70200ac29f8008c3109040f2415fc9a5ad190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

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
        
        $__internal_2978f65c4964bfd5aee14e5d7ae70200ac29f8008c3109040f2415fc9a5ad190->leave($__internal_2978f65c4964bfd5aee14e5d7ae70200ac29f8008c3109040f2415fc9a5ad190_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_10be2e83f158cbe038ec277583df436d3016ce69a93bd4f907aec29d26902e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10be2e83f158cbe038ec277583df436d3016ce69a93bd4f907aec29d26902e56->enter($__internal_10be2e83f158cbe038ec277583df436d3016ce69a93bd4f907aec29d26902e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 78
        echo "                        ";
        
        $__internal_10be2e83f158cbe038ec277583df436d3016ce69a93bd4f907aec29d26902e56->leave($__internal_10be2e83f158cbe038ec277583df436d3016ce69a93bd4f907aec29d26902e56_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2bd14029c4e632badf45a903aa09347dba7b6f199915a4d0100253b62db300c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bd14029c4e632badf45a903aa09347dba7b6f199915a4d0100253b62db300c->enter($__internal_a2bd14029c4e632badf45a903aa09347dba7b6f199915a4d0100253b62db300c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

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
        
        $__internal_a2bd14029c4e632badf45a903aa09347dba7b6f199915a4d0100253b62db300c->leave($__internal_a2bd14029c4e632badf45a903aa09347dba7b6f199915a4d0100253b62db300c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 95,  182 => 89,  176 => 88,  169 => 78,  163 => 77,  154 => 17,  143 => 8,  137 => 7,  125 => 6,  116 => 97,  114 => 88,  103 => 79,  101 => 77,  39 => 19,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Gestor FCT{% endblock %}</title>
        {% block stylesheets %}
            <!-- BOOTSTRAP Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <!-- BOOTSTRAP Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

            <!-- SIDEBAR-->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
                        {% block body %}
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->


        {% block javascripts %}
            <!-- BOOTSTRAP Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
            <!-- SIDEBAR -->
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
            <script src=\"{{ asset('js/sidebar.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\symfony\\Empresas\\app/Resources\\views/base.html.twig");
    }
}
