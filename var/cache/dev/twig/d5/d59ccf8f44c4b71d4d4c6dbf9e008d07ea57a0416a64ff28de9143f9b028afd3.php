<?php

/* UsuarioBundle:Default:register.html.twig */
class __TwigTemplate_9f7ad3715fdcdd74799138bd82ba03d4ae6ae12eb726692d3ae6b9e62c77c39a extends Twig_Template
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
        $__internal_198dc1e750c001ab1968924cf20f76b98eaabaa3a8c4d692e7d549c1a4ddfd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198dc1e750c001ab1968924cf20f76b98eaabaa3a8c4d692e7d549c1a4ddfd2c->enter($__internal_198dc1e750c001ab1968924cf20f76b98eaabaa3a8c4d692e7d549c1a4ddfd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:register.html.twig"));

        $__internal_08efac195304761f764b6f95ae0208ddab2de421307cefe2eca59bb0d605ce0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08efac195304761f764b6f95ae0208ddab2de421307cefe2eca59bb0d605ce0e->enter($__internal_08efac195304761f764b6f95ae0208ddab2de421307cefe2eca59bb0d605ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:register.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Registrate!</button>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_198dc1e750c001ab1968924cf20f76b98eaabaa3a8c4d692e7d549c1a4ddfd2c->leave($__internal_198dc1e750c001ab1968924cf20f76b98eaabaa3a8c4d692e7d549c1a4ddfd2c_prof);

        
        $__internal_08efac195304761f764b6f95ae0208ddab2de421307cefe2eca59bb0d605ce0e->leave($__internal_08efac195304761f764b6f95ae0208ddab2de421307cefe2eca59bb0d605ce0e_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

    <button type=\"submit\">Registrate!</button>
{{ form_end(form) }}
", "UsuarioBundle:Default:register.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle/Resources/views/Default/register.html.twig");
    }
}
