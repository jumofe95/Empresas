<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_c2de5f926b1aac0ebe6522d5a43415c4a8f7007c0374f563951d99841d133686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ab62458d6e4c9b7bfab3572935458bbb039e2992925a13743a26283b984276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ab62458d6e4c9b7bfab3572935458bbb039e2992925a13743a26283b984276->enter($__internal_b2ab62458d6e4c9b7bfab3572935458bbb039e2992925a13743a26283b984276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        $__internal_8da28bdc76d4bde9c23c03fce7ea7ec0618c0655846bfd42ba413dba1c68ed3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da28bdc76d4bde9c23c03fce7ea7ec0618c0655846bfd42ba413dba1c68ed3b->enter($__internal_8da28bdc76d4bde9c23c03fce7ea7ec0618c0655846bfd42ba413dba1c68ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        // line 1
        echo "<body>

  ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "  <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
  ";
        }
        // line 6
        echo "
  <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
  </form>

</body>
";
        
        $__internal_b2ab62458d6e4c9b7bfab3572935458bbb039e2992925a13743a26283b984276->leave($__internal_b2ab62458d6e4c9b7bfab3572935458bbb039e2992925a13743a26283b984276_prof);

        
        $__internal_8da28bdc76d4bde9c23c03fce7ea7ec0618c0655846bfd42ba413dba1c68ed3b->leave($__internal_8da28bdc76d4bde9c23c03fce7ea7ec0618c0655846bfd42ba413dba1c68ed3b_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  37 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>

  {% if error %}
  <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
  {% endif %}

  <form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
  </form>

</body>
", "UsuarioBundle:Default:login.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle/Resources/views/Default/login.html.twig");
    }
}
