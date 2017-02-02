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
        $__internal_fcacd1c95d53cbbad5ddc7785ffba9674bf69940c6d81808a9dd695fd966b4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcacd1c95d53cbbad5ddc7785ffba9674bf69940c6d81808a9dd695fd966b4dc->enter($__internal_fcacd1c95d53cbbad5ddc7785ffba9674bf69940c6d81808a9dd695fd966b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a51c67fd594165b5c31ff790c4eb0f6a7bac1d800fb55b3668cc8605fda83459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51c67fd594165b5c31ff790c4eb0f6a7bac1d800fb55b3668cc8605fda83459->enter($__internal_a51c67fd594165b5c31ff790c4eb0f6a7bac1d800fb55b3668cc8605fda83459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
          <a>
            Gestor FCT.
          </a>
        </li>

        <li>
          <a href=\"/usuario/usuarios\"><i class=\"fa fa-fw fa-user\"></i> Mi cuenta</a>
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

        ";
        // line 68
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 69
            echo "          ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 70
                echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-link\"></i> Admin <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"dropdown-header\">Panel Admin</li>
              <li><a href=\"/config/all\">Ver Configuración</a></li>
              <li><a href=\"/config/new\">Añadir Configuración</a></li>
            </ul>
          </li>
          ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "


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
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->


  ";
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "</body>
</html>
";
        
        $__internal_fcacd1c95d53cbbad5ddc7785ffba9674bf69940c6d81808a9dd695fd966b4dc->leave($__internal_fcacd1c95d53cbbad5ddc7785ffba9674bf69940c6d81808a9dd695fd966b4dc_prof);

        
        $__internal_a51c67fd594165b5c31ff790c4eb0f6a7bac1d800fb55b3668cc8605fda83459->leave($__internal_a51c67fd594165b5c31ff790c4eb0f6a7bac1d800fb55b3668cc8605fda83459_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ce1c5e801cb3914660a40919f6d45a2449a8d73f6aab0edc6747a99767770e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce1c5e801cb3914660a40919f6d45a2449a8d73f6aab0edc6747a99767770e7->enter($__internal_0ce1c5e801cb3914660a40919f6d45a2449a8d73f6aab0edc6747a99767770e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b80c59866a96239b9c105e09ec60cadd601d3d28686f03902e3ebf3217d04b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b80c59866a96239b9c105e09ec60cadd601d3d28686f03902e3ebf3217d04b6->enter($__internal_1b80c59866a96239b9c105e09ec60cadd601d3d28686f03902e3ebf3217d04b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestor FCT";
        
        $__internal_1b80c59866a96239b9c105e09ec60cadd601d3d28686f03902e3ebf3217d04b6->leave($__internal_1b80c59866a96239b9c105e09ec60cadd601d3d28686f03902e3ebf3217d04b6_prof);

        
        $__internal_0ce1c5e801cb3914660a40919f6d45a2449a8d73f6aab0edc6747a99767770e7->leave($__internal_0ce1c5e801cb3914660a40919f6d45a2449a8d73f6aab0edc6747a99767770e7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a132ed507c1ab204f8bda094690a9c05bc210501a8b7e8f43c3f7613722fee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a132ed507c1ab204f8bda094690a9c05bc210501a8b7e8f43c3f7613722fee8->enter($__internal_4a132ed507c1ab204f8bda094690a9c05bc210501a8b7e8f43c3f7613722fee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_43f3829b659a95805a13dca66a1b2ad8cf2c4599448859a5e95b6229d7079b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f3829b659a95805a13dca66a1b2ad8cf2c4599448859a5e95b6229d7079b5d->enter($__internal_43f3829b659a95805a13dca66a1b2ad8cf2c4599448859a5e95b6229d7079b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <!-- BOOTSTRAP Latest compiled and minified CSS -->
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
        
        $__internal_43f3829b659a95805a13dca66a1b2ad8cf2c4599448859a5e95b6229d7079b5d->leave($__internal_43f3829b659a95805a13dca66a1b2ad8cf2c4599448859a5e95b6229d7079b5d_prof);

        
        $__internal_4a132ed507c1ab204f8bda094690a9c05bc210501a8b7e8f43c3f7613722fee8->leave($__internal_4a132ed507c1ab204f8bda094690a9c05bc210501a8b7e8f43c3f7613722fee8_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cd6381cc8f79f3d30c2c9a5d5e71e975d2567ad83fb3299958e21532e30a6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd6381cc8f79f3d30c2c9a5d5e71e975d2567ad83fb3299958e21532e30a6f2->enter($__internal_2cd6381cc8f79f3d30c2c9a5d5e71e975d2567ad83fb3299958e21532e30a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6f0cd0f2ccff737537c38e4aa64129798d95cd99524abbaaabea7781a1942db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f0cd0f2ccff737537c38e4aa64129798d95cd99524abbaaabea7781a1942db->enter($__internal_c6f0cd0f2ccff737537c38e4aa64129798d95cd99524abbaaabea7781a1942db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "            ";
        
        $__internal_c6f0cd0f2ccff737537c38e4aa64129798d95cd99524abbaaabea7781a1942db->leave($__internal_c6f0cd0f2ccff737537c38e4aa64129798d95cd99524abbaaabea7781a1942db_prof);

        
        $__internal_2cd6381cc8f79f3d30c2c9a5d5e71e975d2567ad83fb3299958e21532e30a6f2->leave($__internal_2cd6381cc8f79f3d30c2c9a5d5e71e975d2567ad83fb3299958e21532e30a6f2_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_841910fde11a35da4bf727eba32936bc4103b57a20ee2f6bd55d1c7b55fdde4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841910fde11a35da4bf727eba32936bc4103b57a20ee2f6bd55d1c7b55fdde4c->enter($__internal_841910fde11a35da4bf727eba32936bc4103b57a20ee2f6bd55d1c7b55fdde4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d9333aeb6b4682f7ede58c324f607479a5aaa4925d06ebd6fd8df6322da8eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9333aeb6b4682f7ede58c324f607479a5aaa4925d06ebd6fd8df6322da8eac->enter($__internal_4d9333aeb6b4682f7ede58c324f607479a5aaa4925d06ebd6fd8df6322da8eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "  <!-- BOOTSTRAP Latest compiled and minified JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

  <!-- SIDEBAR -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sidebar.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_4d9333aeb6b4682f7ede58c324f607479a5aaa4925d06ebd6fd8df6322da8eac->leave($__internal_4d9333aeb6b4682f7ede58c324f607479a5aaa4925d06ebd6fd8df6322da8eac_prof);

        
        $__internal_841910fde11a35da4bf727eba32936bc4103b57a20ee2f6bd55d1c7b55fdde4c->leave($__internal_841910fde11a35da4bf727eba32936bc4103b57a20ee2f6bd55d1c7b55fdde4c_prof);

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
        return array (  246 => 115,  238 => 109,  229 => 108,  219 => 98,  210 => 97,  198 => 17,  187 => 8,  178 => 7,  160 => 6,  148 => 117,  146 => 108,  135 => 99,  133 => 97,  114 => 80,  111 => 79,  100 => 70,  97 => 69,  95 => 68,  42 => 19,  40 => 7,  36 => 6,  29 => 1,);
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
          <a>
            Gestor FCT.
          </a>
        </li>

        <li>
          <a href=\"/usuario/usuarios\"><i class=\"fa fa-fw fa-user\"></i> Mi cuenta</a>
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

        {% if app.user != null %}
          {% if is_granted('ROLE_SUPER_ADMIN') %}
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-link\"></i> Admin <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"dropdown-header\">Panel Admin</li>
              <li><a href=\"/config/all\">Ver Configuración</a></li>
              <li><a href=\"/config/new\">Añadir Configuración</a></li>
            </ul>
          </li>
          {% endif %}
        {% endif %}



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
