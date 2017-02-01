<?php

/* ProfesorBundle:Default:profesores_new.html.twig */
class __TwigTemplate_d4f1386d283986c0980551b9144d0fff43e0ca7d631a44de8c82cba36dd2b02e extends Twig_Template
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
        $__internal_5f78544330eef5c4678663cbd41536798529a07a03e09b96158b96152192da71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f78544330eef5c4678663cbd41536798529a07a03e09b96158b96152192da71->enter($__internal_5f78544330eef5c4678663cbd41536798529a07a03e09b96158b96152192da71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_new.html.twig"));

        $__internal_3f156fb4ce1bf356bc7910a8ffb9cdbce7e31b773af0f2e54a1c597893753c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f156fb4ce1bf356bc7910a8ffb9cdbce7e31b773af0f2e54a1c597893753c6e->enter($__internal_3f156fb4ce1bf356bc7910a8ffb9cdbce7e31b773af0f2e54a1c597893753c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f78544330eef5c4678663cbd41536798529a07a03e09b96158b96152192da71->leave($__internal_5f78544330eef5c4678663cbd41536798529a07a03e09b96158b96152192da71_prof);

        
        $__internal_3f156fb4ce1bf356bc7910a8ffb9cdbce7e31b773af0f2e54a1c597893753c6e->leave($__internal_3f156fb4ce1bf356bc7910a8ffb9cdbce7e31b773af0f2e54a1c597893753c6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78d48eccac2191cc46565c220351f1048be5f6132f37df221a73bacb3758076f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d48eccac2191cc46565c220351f1048be5f6132f37df221a73bacb3758076f->enter($__internal_78d48eccac2191cc46565c220351f1048be5f6132f37df221a73bacb3758076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9b80359671f51ae53c87ee86d3c631c4a9883f6bd4ada620e0d30170599d6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b80359671f51ae53c87ee86d3c631c4a9883f6bd4ada620e0d30170599d6b8->enter($__internal_e9b80359671f51ae53c87ee86d3c631c4a9883f6bd4ada620e0d30170599d6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Nuevo profesor.</h2>
<!-- (form) es el array que hemos devuelto en la funcion \"newAction()\" del controlador ProfesorController-->
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_e9b80359671f51ae53c87ee86d3c631c4a9883f6bd4ada620e0d30170599d6b8->leave($__internal_e9b80359671f51ae53c87ee86d3c631c4a9883f6bd4ada620e0d30170599d6b8_prof);

        
        $__internal_78d48eccac2191cc46565c220351f1048be5f6132f37df221a73bacb3758076f->leave($__internal_78d48eccac2191cc46565c220351f1048be5f6132f37df221a73bacb3758076f_prof);

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

{% endblock %}", "ProfesorBundle:Default:profesores_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle/Resources/views/Default/profesores_new.html.twig");
    }
}
