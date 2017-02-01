<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e340f7fc21c468ae34188b011f0a77ce04653697dac808cfae2fef3a9223058 extends Twig_Template
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
        $__internal_9bfd1ebad0d75a27cd7bd75e983b4115de05494a255a5bac377ce242c3b217de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfd1ebad0d75a27cd7bd75e983b4115de05494a255a5bac377ce242c3b217de->enter($__internal_9bfd1ebad0d75a27cd7bd75e983b4115de05494a255a5bac377ce242c3b217de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b1aaf06a1b04ae988027dd8a5bd025710dc52059464b8111ea11db64badfbc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aaf06a1b04ae988027dd8a5bd025710dc52059464b8111ea11db64badfbc53->enter($__internal_b1aaf06a1b04ae988027dd8a5bd025710dc52059464b8111ea11db64badfbc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9bfd1ebad0d75a27cd7bd75e983b4115de05494a255a5bac377ce242c3b217de->leave($__internal_9bfd1ebad0d75a27cd7bd75e983b4115de05494a255a5bac377ce242c3b217de_prof);

        
        $__internal_b1aaf06a1b04ae988027dd8a5bd025710dc52059464b8111ea11db64badfbc53->leave($__internal_b1aaf06a1b04ae988027dd8a5bd025710dc52059464b8111ea11db64badfbc53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
