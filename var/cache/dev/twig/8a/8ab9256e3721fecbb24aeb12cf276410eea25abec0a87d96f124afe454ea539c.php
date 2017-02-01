<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d6205aa200191499e338b35e586f74564abb8cd01f8fa93ad85bae60e70facc9 extends Twig_Template
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
        $__internal_58f220c16c40164ac460c3c9f8f91f3f922e18cf79b8d5c08f0284ec1954fe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f220c16c40164ac460c3c9f8f91f3f922e18cf79b8d5c08f0284ec1954fe6b->enter($__internal_58f220c16c40164ac460c3c9f8f91f3f922e18cf79b8d5c08f0284ec1954fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a88b9726c15ab9a95b1898521ac065483cc57653672d1cd96ab7453cbec222e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88b9726c15ab9a95b1898521ac065483cc57653672d1cd96ab7453cbec222e7->enter($__internal_a88b9726c15ab9a95b1898521ac065483cc57653672d1cd96ab7453cbec222e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_58f220c16c40164ac460c3c9f8f91f3f922e18cf79b8d5c08f0284ec1954fe6b->leave($__internal_58f220c16c40164ac460c3c9f8f91f3f922e18cf79b8d5c08f0284ec1954fe6b_prof);

        
        $__internal_a88b9726c15ab9a95b1898521ac065483cc57653672d1cd96ab7453cbec222e7->leave($__internal_a88b9726c15ab9a95b1898521ac065483cc57653672d1cd96ab7453cbec222e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
