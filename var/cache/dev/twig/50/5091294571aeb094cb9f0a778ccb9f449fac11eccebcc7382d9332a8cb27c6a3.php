<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_80d6a99a23793ca81696969ea4f35323e35ed20ee3e4b7d0d0c3359762f4ed7d extends Twig_Template
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
        $__internal_d031ff0f4d72b76f2b5dd8a69a2971aee4df15ddef19d308dec08070c99886fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d031ff0f4d72b76f2b5dd8a69a2971aee4df15ddef19d308dec08070c99886fc->enter($__internal_d031ff0f4d72b76f2b5dd8a69a2971aee4df15ddef19d308dec08070c99886fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a09699e970ab7354ac499ee7affed0dc6c2723779bc61b30f6107683f4927292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09699e970ab7354ac499ee7affed0dc6c2723779bc61b30f6107683f4927292->enter($__internal_a09699e970ab7354ac499ee7affed0dc6c2723779bc61b30f6107683f4927292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d031ff0f4d72b76f2b5dd8a69a2971aee4df15ddef19d308dec08070c99886fc->leave($__internal_d031ff0f4d72b76f2b5dd8a69a2971aee4df15ddef19d308dec08070c99886fc_prof);

        
        $__internal_a09699e970ab7354ac499ee7affed0dc6c2723779bc61b30f6107683f4927292->leave($__internal_a09699e970ab7354ac499ee7affed0dc6c2723779bc61b30f6107683f4927292_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
