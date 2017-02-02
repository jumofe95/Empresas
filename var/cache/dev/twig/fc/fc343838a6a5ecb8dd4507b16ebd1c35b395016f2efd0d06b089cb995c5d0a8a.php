<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_041025330dc5030040ef57b36cd9c3001eaa93670c67b82807a66b7caba88128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UsuarioBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7738dfa7e8d63c3179252ea64f2d427435a34a85e8dd1e7ddfc6d7dcaa81a494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7738dfa7e8d63c3179252ea64f2d427435a34a85e8dd1e7ddfc6d7dcaa81a494->enter($__internal_7738dfa7e8d63c3179252ea64f2d427435a34a85e8dd1e7ddfc6d7dcaa81a494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        $__internal_07bb6bb6aa3e67dae0132d8475666ef816610d91029daebda6a9d386b57dbcd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bb6bb6aa3e67dae0132d8475666ef816610d91029daebda6a9d386b57dbcd7->enter($__internal_07bb6bb6aa3e67dae0132d8475666ef816610d91029daebda6a9d386b57dbcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7738dfa7e8d63c3179252ea64f2d427435a34a85e8dd1e7ddfc6d7dcaa81a494->leave($__internal_7738dfa7e8d63c3179252ea64f2d427435a34a85e8dd1e7ddfc6d7dcaa81a494_prof);

        
        $__internal_07bb6bb6aa3e67dae0132d8475666ef816610d91029daebda6a9d386b57dbcd7->leave($__internal_07bb6bb6aa3e67dae0132d8475666ef816610d91029daebda6a9d386b57dbcd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edae00329b5b602165005a35bf8b5602ee69fe3ebe1441557d4281ed3a24499c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edae00329b5b602165005a35bf8b5602ee69fe3ebe1441557d4281ed3a24499c->enter($__internal_edae00329b5b602165005a35bf8b5602ee69fe3ebe1441557d4281ed3a24499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_309d1e53155c37f71f993b3a90a109d265845fd6569f573f51697b38f4369877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309d1e53155c37f71f993b3a90a109d265845fd6569f573f51697b38f4369877->enter($__internal_309d1e53155c37f71f993b3a90a109d265845fd6569f573f51697b38f4369877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
  <label for=\"username\">Username:</label>
  <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

  <label for=\"password\">Password:</label>
  <input type=\"password\" id=\"password\" name=\"_password\" />

  <button type=\"submit\">login</button>
</form>


";
        
        $__internal_309d1e53155c37f71f993b3a90a109d265845fd6569f573f51697b38f4369877->leave($__internal_309d1e53155c37f71f993b3a90a109d265845fd6569f573f51697b38f4369877_prof);

        
        $__internal_edae00329b5b602165005a35bf8b5602ee69fe3ebe1441557d4281ed3a24499c->leave($__internal_edae00329b5b602165005a35bf8b5602ee69fe3ebe1441557d4281ed3a24499c_prof);

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
        return array (  68 => 11,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

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


{% endblock %}
", "UsuarioBundle:Default:login.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
