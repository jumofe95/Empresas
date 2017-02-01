<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48d9a140dbdd2a82d0f0f3384bf26717bb6c632e5405846ff3c606e797f62e52 extends Twig_Template
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
        $__internal_a8e27d70257ef591e478321f725d2101139b44381cb1f33c3e51388bca7cd57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e27d70257ef591e478321f725d2101139b44381cb1f33c3e51388bca7cd57b->enter($__internal_a8e27d70257ef591e478321f725d2101139b44381cb1f33c3e51388bca7cd57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a27f564da4937092ee69cacf4167b5c448ab65b596255d0190826b2f79558373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27f564da4937092ee69cacf4167b5c448ab65b596255d0190826b2f79558373->enter($__internal_a27f564da4937092ee69cacf4167b5c448ab65b596255d0190826b2f79558373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a8e27d70257ef591e478321f725d2101139b44381cb1f33c3e51388bca7cd57b->leave($__internal_a8e27d70257ef591e478321f725d2101139b44381cb1f33c3e51388bca7cd57b_prof);

        
        $__internal_a27f564da4937092ee69cacf4167b5c448ab65b596255d0190826b2f79558373->leave($__internal_a27f564da4937092ee69cacf4167b5c448ab65b596255d0190826b2f79558373_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
