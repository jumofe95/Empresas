<?php

/* @Profesor/Default/profesores_new.html.twig */
class __TwigTemplate_81fec06c418737bfac480fee39387e4e27c391654212745085f2e9173a6d711e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Profesor/Default/profesores_new.html.twig", 1);
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
        $__internal_08bafdc47c96c89b6d12e7a8837e98cc203272abedb2ec515d7924179206b6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bafdc47c96c89b6d12e7a8837e98cc203272abedb2ec515d7924179206b6c8->enter($__internal_08bafdc47c96c89b6d12e7a8837e98cc203272abedb2ec515d7924179206b6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/profesores_new.html.twig"));

        $__internal_5cc0acd0061de92c2cbaf488dfeac0490e88e29107810e7ccf2c00428d81fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc0acd0061de92c2cbaf488dfeac0490e88e29107810e7ccf2c00428d81fc7e->enter($__internal_5cc0acd0061de92c2cbaf488dfeac0490e88e29107810e7ccf2c00428d81fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/profesores_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08bafdc47c96c89b6d12e7a8837e98cc203272abedb2ec515d7924179206b6c8->leave($__internal_08bafdc47c96c89b6d12e7a8837e98cc203272abedb2ec515d7924179206b6c8_prof);

        
        $__internal_5cc0acd0061de92c2cbaf488dfeac0490e88e29107810e7ccf2c00428d81fc7e->leave($__internal_5cc0acd0061de92c2cbaf488dfeac0490e88e29107810e7ccf2c00428d81fc7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b09c94fc8dd79755d88a92bcde78b1a976e9f345d1e85883f78a75e70fff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b09c94fc8dd79755d88a92bcde78b1a976e9f345d1e85883f78a75e70fff42->enter($__internal_65b09c94fc8dd79755d88a92bcde78b1a976e9f345d1e85883f78a75e70fff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dd0a0aaa0ca0c1c5fa21dcf67a02027f169e7b694ca2a5d44023b6c64e70194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd0a0aaa0ca0c1c5fa21dcf67a02027f169e7b694ca2a5d44023b6c64e70194->enter($__internal_7dd0a0aaa0ca0c1c5fa21dcf67a02027f169e7b694ca2a5d44023b6c64e70194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Nuevo profesor.</h2>
<!-- (form) es el array que hemos devuelto en la funcion \"newAction()\" del controlador ProfesorController-->
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_7dd0a0aaa0ca0c1c5fa21dcf67a02027f169e7b694ca2a5d44023b6c64e70194->leave($__internal_7dd0a0aaa0ca0c1c5fa21dcf67a02027f169e7b694ca2a5d44023b6c64e70194_prof);

        
        $__internal_65b09c94fc8dd79755d88a92bcde78b1a976e9f345d1e85883f78a75e70fff42->leave($__internal_65b09c94fc8dd79755d88a92bcde78b1a976e9f345d1e85883f78a75e70fff42_prof);

    }

    public function getTemplateName()
    {
        return "@Profesor/Default/profesores_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h2>Nuevo profesor.</h2>
<!-- (form) es el array que hemos devuelto en la funcion \"newAction()\" del controlador ProfesorController-->
\t{{form(form)}}

{% endblock %}", "@Profesor/Default/profesores_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle\\Resources\\views\\Default\\profesores_new.html.twig");
    }
}
