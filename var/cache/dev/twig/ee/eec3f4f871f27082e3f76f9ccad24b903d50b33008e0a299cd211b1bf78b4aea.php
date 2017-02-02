<?php

/* ::base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
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
        $__internal_3ab656e4543fec73d513136192ebd6650c194c603b6e3512a0956c30399d3292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab656e4543fec73d513136192ebd6650c194c603b6e3512a0956c30399d3292->enter($__internal_3ab656e4543fec73d513136192ebd6650c194c603b6e3512a0956c30399d3292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_51ff12ac04a56b2228ba91ee0a31df584bb743a94ed2b6015519250615250c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff12ac04a56b2228ba91ee0a31df584bb743a94ed2b6015519250615250c8b->enter($__internal_51ff12ac04a56b2228ba91ee0a31df584bb743a94ed2b6015519250615250c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3ab656e4543fec73d513136192ebd6650c194c603b6e3512a0956c30399d3292->leave($__internal_3ab656e4543fec73d513136192ebd6650c194c603b6e3512a0956c30399d3292_prof);

        
        $__internal_51ff12ac04a56b2228ba91ee0a31df584bb743a94ed2b6015519250615250c8b->leave($__internal_51ff12ac04a56b2228ba91ee0a31df584bb743a94ed2b6015519250615250c8b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a315dcfc797a833db6ed65c5294a3a566433ef425f8548eeabfd6f99fc935484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a315dcfc797a833db6ed65c5294a3a566433ef425f8548eeabfd6f99fc935484->enter($__internal_a315dcfc797a833db6ed65c5294a3a566433ef425f8548eeabfd6f99fc935484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7639aa94ada100c877093e3c7bb19c0c843f1cf41751ed3c4252db26a159bfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7639aa94ada100c877093e3c7bb19c0c843f1cf41751ed3c4252db26a159bfbf->enter($__internal_7639aa94ada100c877093e3c7bb19c0c843f1cf41751ed3c4252db26a159bfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestor FCT";
        
        $__internal_7639aa94ada100c877093e3c7bb19c0c843f1cf41751ed3c4252db26a159bfbf->leave($__internal_7639aa94ada100c877093e3c7bb19c0c843f1cf41751ed3c4252db26a159bfbf_prof);

        
        $__internal_a315dcfc797a833db6ed65c5294a3a566433ef425f8548eeabfd6f99fc935484->leave($__internal_a315dcfc797a833db6ed65c5294a3a566433ef425f8548eeabfd6f99fc935484_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3261e7640066341678c6aad462b772f53bcf360d352b9b882fde0011a902994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3261e7640066341678c6aad462b772f53bcf360d352b9b882fde0011a902994->enter($__internal_e3261e7640066341678c6aad462b772f53bcf360d352b9b882fde0011a902994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04c78f3ada37bb335125080fc8969cd16a0b6bcc6a94e4522dfeaeb730c0f293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c78f3ada37bb335125080fc8969cd16a0b6bcc6a94e4522dfeaeb730c0f293->enter($__internal_04c78f3ada37bb335125080fc8969cd16a0b6bcc6a94e4522dfeaeb730c0f293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_04c78f3ada37bb335125080fc8969cd16a0b6bcc6a94e4522dfeaeb730c0f293->leave($__internal_04c78f3ada37bb335125080fc8969cd16a0b6bcc6a94e4522dfeaeb730c0f293_prof);

        
        $__internal_e3261e7640066341678c6aad462b772f53bcf360d352b9b882fde0011a902994->leave($__internal_e3261e7640066341678c6aad462b772f53bcf360d352b9b882fde0011a902994_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02950e1b93190281cd9d27386ff3073f63a871cf50e60bc746713df70c0d793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02950e1b93190281cd9d27386ff3073f63a871cf50e60bc746713df70c0d793->enter($__internal_d02950e1b93190281cd9d27386ff3073f63a871cf50e60bc746713df70c0d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcc65f310254bf868b9aa9690951e3effb651144672f949e2ffdf253664733ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc65f310254bf868b9aa9690951e3effb651144672f949e2ffdf253664733ce->enter($__internal_fcc65f310254bf868b9aa9690951e3effb651144672f949e2ffdf253664733ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "                        ";
        
        $__internal_fcc65f310254bf868b9aa9690951e3effb651144672f949e2ffdf253664733ce->leave($__internal_fcc65f310254bf868b9aa9690951e3effb651144672f949e2ffdf253664733ce_prof);

        
        $__internal_d02950e1b93190281cd9d27386ff3073f63a871cf50e60bc746713df70c0d793->leave($__internal_d02950e1b93190281cd9d27386ff3073f63a871cf50e60bc746713df70c0d793_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef94466151d04a284f84c05f62929423cc11092e8481bea9e91f66bb7a60c441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef94466151d04a284f84c05f62929423cc11092e8481bea9e91f66bb7a60c441->enter($__internal_ef94466151d04a284f84c05f62929423cc11092e8481bea9e91f66bb7a60c441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_defff7256922d518c7b7ee7f5ae108c8eaa8bc23f588931c4b0695113fef0aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defff7256922d518c7b7ee7f5ae108c8eaa8bc23f588931c4b0695113fef0aa9->enter($__internal_defff7256922d518c7b7ee7f5ae108c8eaa8bc23f588931c4b0695113fef0aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_defff7256922d518c7b7ee7f5ae108c8eaa8bc23f588931c4b0695113fef0aa9->leave($__internal_defff7256922d518c7b7ee7f5ae108c8eaa8bc23f588931c4b0695113fef0aa9_prof);

        
        $__internal_ef94466151d04a284f84c05f62929423cc11092e8481bea9e91f66bb7a60c441->leave($__internal_ef94466151d04a284f84c05f62929423cc11092e8481bea9e91f66bb7a60c441_prof);

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
        return array (  217 => 95,  209 => 89,  200 => 88,  190 => 78,  181 => 77,  169 => 17,  158 => 8,  149 => 7,  131 => 6,  119 => 97,  117 => 88,  106 => 79,  104 => 77,  42 => 19,  40 => 7,  36 => 6,  29 => 1,);
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
", "::base.html.twig", "C:\\xampp\\symfony\\Empresas\\app\\Resources\\views\\base.html.twig");
    }
}
