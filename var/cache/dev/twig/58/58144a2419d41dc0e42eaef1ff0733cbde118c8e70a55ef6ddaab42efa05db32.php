<?php

/* ProfesorBundle:Default:profesores_new.html.twig */
class __TwigTemplate_81fec06c418737bfac480fee39387e4e27c391654212745085f2e9173a6d711e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProfesorBundle:Default:profesores_new.html.twig", 1);
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
        $__internal_9ac28051a0ae843ffe2ada9d8e2df6884fd287941c4307e70301b052426d5d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac28051a0ae843ffe2ada9d8e2df6884fd287941c4307e70301b052426d5d6b->enter($__internal_9ac28051a0ae843ffe2ada9d8e2df6884fd287941c4307e70301b052426d5d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_new.html.twig"));

        $__internal_fabde915d11e8effdc78acc40435dbb0d7d0404ed990a36218371eab471006b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabde915d11e8effdc78acc40435dbb0d7d0404ed990a36218371eab471006b2->enter($__internal_fabde915d11e8effdc78acc40435dbb0d7d0404ed990a36218371eab471006b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac28051a0ae843ffe2ada9d8e2df6884fd287941c4307e70301b052426d5d6b->leave($__internal_9ac28051a0ae843ffe2ada9d8e2df6884fd287941c4307e70301b052426d5d6b_prof);

        
        $__internal_fabde915d11e8effdc78acc40435dbb0d7d0404ed990a36218371eab471006b2->leave($__internal_fabde915d11e8effdc78acc40435dbb0d7d0404ed990a36218371eab471006b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc068b056c5a10071fe71abe2d6490f01fc534dcdd8b3c0f0fff0ab7bfacdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc068b056c5a10071fe71abe2d6490f01fc534dcdd8b3c0f0fff0ab7bfacdd2->enter($__internal_dfc068b056c5a10071fe71abe2d6490f01fc534dcdd8b3c0f0fff0ab7bfacdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9257edecc31a0542c3c257ef2d7f7bffc95a23e50f967fde7a967073632a54d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9257edecc31a0542c3c257ef2d7f7bffc95a23e50f967fde7a967073632a54d7->enter($__internal_9257edecc31a0542c3c257ef2d7f7bffc95a23e50f967fde7a967073632a54d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Nuevo profesor.</h2>
<!-- (form) es el array que hemos devuelto en la funcion \"newAction()\" del controlador ProfesorController-->
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_9257edecc31a0542c3c257ef2d7f7bffc95a23e50f967fde7a967073632a54d7->leave($__internal_9257edecc31a0542c3c257ef2d7f7bffc95a23e50f967fde7a967073632a54d7_prof);

        
        $__internal_dfc068b056c5a10071fe71abe2d6490f01fc534dcdd8b3c0f0fff0ab7bfacdd2->leave($__internal_dfc068b056c5a10071fe71abe2d6490f01fc534dcdd8b3c0f0fff0ab7bfacdd2_prof);

    }

    public function getTemplateName()
    {
        return "ProfesorBundle:Default:profesores_new.html.twig";
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

{% endblock %}", "ProfesorBundle:Default:profesores_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle\\Resources\\views\\Default\\profesores_new.html.twig");
    }
}
