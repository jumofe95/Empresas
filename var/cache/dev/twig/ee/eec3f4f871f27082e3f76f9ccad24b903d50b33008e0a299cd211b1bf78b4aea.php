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
        $__internal_da4f19641c233313c0c71c0ff085618f2e76f7f443b891b9532ccdf7a4e043c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4f19641c233313c0c71c0ff085618f2e76f7f443b891b9532ccdf7a4e043c8->enter($__internal_da4f19641c233313c0c71c0ff085618f2e76f7f443b891b9532ccdf7a4e043c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0599012449d9334f3dc0d394d013904b80c3dfdc4be42b76860a649442e215b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0599012449d9334f3dc0d394d013904b80c3dfdc4be42b76860a649442e215b0->enter($__internal_0599012449d9334f3dc0d394d013904b80c3dfdc4be42b76860a649442e215b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da4f19641c233313c0c71c0ff085618f2e76f7f443b891b9532ccdf7a4e043c8->leave($__internal_da4f19641c233313c0c71c0ff085618f2e76f7f443b891b9532ccdf7a4e043c8_prof);

        
        $__internal_0599012449d9334f3dc0d394d013904b80c3dfdc4be42b76860a649442e215b0->leave($__internal_0599012449d9334f3dc0d394d013904b80c3dfdc4be42b76860a649442e215b0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0516675bdfd2feab8d1b1238ec5147483c36426f93da566ba90db15de64533e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0516675bdfd2feab8d1b1238ec5147483c36426f93da566ba90db15de64533e6->enter($__internal_0516675bdfd2feab8d1b1238ec5147483c36426f93da566ba90db15de64533e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d3033d4247e045f280980d9294051192d5bfb300c23a53f2698f1f4f3662b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3033d4247e045f280980d9294051192d5bfb300c23a53f2698f1f4f3662b4f->enter($__internal_4d3033d4247e045f280980d9294051192d5bfb300c23a53f2698f1f4f3662b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestor FCT";
        
        $__internal_4d3033d4247e045f280980d9294051192d5bfb300c23a53f2698f1f4f3662b4f->leave($__internal_4d3033d4247e045f280980d9294051192d5bfb300c23a53f2698f1f4f3662b4f_prof);

        
        $__internal_0516675bdfd2feab8d1b1238ec5147483c36426f93da566ba90db15de64533e6->leave($__internal_0516675bdfd2feab8d1b1238ec5147483c36426f93da566ba90db15de64533e6_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_becf15424e213e7b15a8a7c4f8acb12d214280e9f9a3e901b7025c2b2c9309f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becf15424e213e7b15a8a7c4f8acb12d214280e9f9a3e901b7025c2b2c9309f9->enter($__internal_becf15424e213e7b15a8a7c4f8acb12d214280e9f9a3e901b7025c2b2c9309f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3f5768bad61d091155af9e1635f69b919a5d663cda356da97a38b7cbfa3576f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5768bad61d091155af9e1635f69b919a5d663cda356da97a38b7cbfa3576f9->enter($__internal_3f5768bad61d091155af9e1635f69b919a5d663cda356da97a38b7cbfa3576f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3f5768bad61d091155af9e1635f69b919a5d663cda356da97a38b7cbfa3576f9->leave($__internal_3f5768bad61d091155af9e1635f69b919a5d663cda356da97a38b7cbfa3576f9_prof);

        
        $__internal_becf15424e213e7b15a8a7c4f8acb12d214280e9f9a3e901b7025c2b2c9309f9->leave($__internal_becf15424e213e7b15a8a7c4f8acb12d214280e9f9a3e901b7025c2b2c9309f9_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8fb8bfde59ff5e51a4eacd86c71bb0f7f609e23c227afeb8936a28f78a3dc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fb8bfde59ff5e51a4eacd86c71bb0f7f609e23c227afeb8936a28f78a3dc02->enter($__internal_f8fb8bfde59ff5e51a4eacd86c71bb0f7f609e23c227afeb8936a28f78a3dc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb197959e560db85ef97b90b99200788504f3b330060d567068de29a722653e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb197959e560db85ef97b90b99200788504f3b330060d567068de29a722653e2->enter($__internal_eb197959e560db85ef97b90b99200788504f3b330060d567068de29a722653e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "                        ";
        
        $__internal_eb197959e560db85ef97b90b99200788504f3b330060d567068de29a722653e2->leave($__internal_eb197959e560db85ef97b90b99200788504f3b330060d567068de29a722653e2_prof);

        
        $__internal_f8fb8bfde59ff5e51a4eacd86c71bb0f7f609e23c227afeb8936a28f78a3dc02->leave($__internal_f8fb8bfde59ff5e51a4eacd86c71bb0f7f609e23c227afeb8936a28f78a3dc02_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6da257db234d31863155ba72dfe52e8e025e49cdd7639c403336a3c98d5a3c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da257db234d31863155ba72dfe52e8e025e49cdd7639c403336a3c98d5a3c99->enter($__internal_6da257db234d31863155ba72dfe52e8e025e49cdd7639c403336a3c98d5a3c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88b2862b5ef919b82715980522992c59f7fd5b04af2dd07593fe70047b18e685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b2862b5ef919b82715980522992c59f7fd5b04af2dd07593fe70047b18e685->enter($__internal_88b2862b5ef919b82715980522992c59f7fd5b04af2dd07593fe70047b18e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_88b2862b5ef919b82715980522992c59f7fd5b04af2dd07593fe70047b18e685->leave($__internal_88b2862b5ef919b82715980522992c59f7fd5b04af2dd07593fe70047b18e685_prof);

        
        $__internal_6da257db234d31863155ba72dfe52e8e025e49cdd7639c403336a3c98d5a3c99->leave($__internal_6da257db234d31863155ba72dfe52e8e025e49cdd7639c403336a3c98d5a3c99_prof);

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
