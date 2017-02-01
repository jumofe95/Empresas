<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
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
        $__internal_c87fc931a47a879d19d3736a6e64f8271df50faf34cf1484437ef0d63c8d9e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87fc931a47a879d19d3736a6e64f8271df50faf34cf1484437ef0d63c8d9e28->enter($__internal_c87fc931a47a879d19d3736a6e64f8271df50faf34cf1484437ef0d63c8d9e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8965195a827528d204693e0d8012401c8976c7f10e4538147b60e40ee85675fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8965195a827528d204693e0d8012401c8976c7f10e4538147b60e40ee85675fa->enter($__internal_8965195a827528d204693e0d8012401c8976c7f10e4538147b60e40ee85675fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c87fc931a47a879d19d3736a6e64f8271df50faf34cf1484437ef0d63c8d9e28->leave($__internal_c87fc931a47a879d19d3736a6e64f8271df50faf34cf1484437ef0d63c8d9e28_prof);

        
        $__internal_8965195a827528d204693e0d8012401c8976c7f10e4538147b60e40ee85675fa->leave($__internal_8965195a827528d204693e0d8012401c8976c7f10e4538147b60e40ee85675fa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_533b9eac8bdb7a36e843dbfaec0457fa0c6af2de9dff7304099874f5632c0539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533b9eac8bdb7a36e843dbfaec0457fa0c6af2de9dff7304099874f5632c0539->enter($__internal_533b9eac8bdb7a36e843dbfaec0457fa0c6af2de9dff7304099874f5632c0539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99d8239d07bd8153944129392c8b1b809ada25fdb2ed01ee198ff687730f68ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d8239d07bd8153944129392c8b1b809ada25fdb2ed01ee198ff687730f68ba->enter($__internal_99d8239d07bd8153944129392c8b1b809ada25fdb2ed01ee198ff687730f68ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestor FCT";
        
        $__internal_99d8239d07bd8153944129392c8b1b809ada25fdb2ed01ee198ff687730f68ba->leave($__internal_99d8239d07bd8153944129392c8b1b809ada25fdb2ed01ee198ff687730f68ba_prof);

        
        $__internal_533b9eac8bdb7a36e843dbfaec0457fa0c6af2de9dff7304099874f5632c0539->leave($__internal_533b9eac8bdb7a36e843dbfaec0457fa0c6af2de9dff7304099874f5632c0539_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d030805a6cc2af5025ef1b4c5b6afc0be0103db084e04821bc45a4edc98bf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d030805a6cc2af5025ef1b4c5b6afc0be0103db084e04821bc45a4edc98bf96->enter($__internal_6d030805a6cc2af5025ef1b4c5b6afc0be0103db084e04821bc45a4edc98bf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a1a30966490f9613fbc55959f2968dbb4446add126da546b1a9f88ddd69178c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1a30966490f9613fbc55959f2968dbb4446add126da546b1a9f88ddd69178c->enter($__internal_9a1a30966490f9613fbc55959f2968dbb4446add126da546b1a9f88ddd69178c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9a1a30966490f9613fbc55959f2968dbb4446add126da546b1a9f88ddd69178c->leave($__internal_9a1a30966490f9613fbc55959f2968dbb4446add126da546b1a9f88ddd69178c_prof);

        
        $__internal_6d030805a6cc2af5025ef1b4c5b6afc0be0103db084e04821bc45a4edc98bf96->leave($__internal_6d030805a6cc2af5025ef1b4c5b6afc0be0103db084e04821bc45a4edc98bf96_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_c781e98d606ff25b2a9a6ceb973f5d20d72af532b791c8affbece797138dcb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c781e98d606ff25b2a9a6ceb973f5d20d72af532b791c8affbece797138dcb25->enter($__internal_c781e98d606ff25b2a9a6ceb973f5d20d72af532b791c8affbece797138dcb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b0697d421add072670a87561200a901e2b5a851895a2ded6cb08859acbeea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0697d421add072670a87561200a901e2b5a851895a2ded6cb08859acbeea13->enter($__internal_2b0697d421add072670a87561200a901e2b5a851895a2ded6cb08859acbeea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "                        ";
        
        $__internal_2b0697d421add072670a87561200a901e2b5a851895a2ded6cb08859acbeea13->leave($__internal_2b0697d421add072670a87561200a901e2b5a851895a2ded6cb08859acbeea13_prof);

        
        $__internal_c781e98d606ff25b2a9a6ceb973f5d20d72af532b791c8affbece797138dcb25->leave($__internal_c781e98d606ff25b2a9a6ceb973f5d20d72af532b791c8affbece797138dcb25_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08aba5abd34d1ee3c8ec54e45bd9e978b05fc8c0e68814c7736b634657feb1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08aba5abd34d1ee3c8ec54e45bd9e978b05fc8c0e68814c7736b634657feb1fc->enter($__internal_08aba5abd34d1ee3c8ec54e45bd9e978b05fc8c0e68814c7736b634657feb1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0622fc9cf65d4af17989a1567a17a585b7e15e8cb707aae196b84678a248cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0622fc9cf65d4af17989a1567a17a585b7e15e8cb707aae196b84678a248cea->enter($__internal_c0622fc9cf65d4af17989a1567a17a585b7e15e8cb707aae196b84678a248cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c0622fc9cf65d4af17989a1567a17a585b7e15e8cb707aae196b84678a248cea->leave($__internal_c0622fc9cf65d4af17989a1567a17a585b7e15e8cb707aae196b84678a248cea_prof);

        
        $__internal_08aba5abd34d1ee3c8ec54e45bd9e978b05fc8c0e68814c7736b634657feb1fc->leave($__internal_08aba5abd34d1ee3c8ec54e45bd9e978b05fc8c0e68814c7736b634657feb1fc_prof);

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
", "::base.html.twig", "C:\\xampp\\symfony\\Empresas\\app/Resources\\views/base.html.twig");
    }
}
