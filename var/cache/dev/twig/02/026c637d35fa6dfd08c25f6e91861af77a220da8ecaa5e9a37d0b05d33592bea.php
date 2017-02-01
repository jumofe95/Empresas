<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0c0667108b7526b278f58daca20e3415e962b60926beb668d392a86ebfb5b787 extends Twig_Template
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
        $__internal_97bc62223d31198a3a089bf22a33b816453b4dd68822c61bfd06a663388f0d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bc62223d31198a3a089bf22a33b816453b4dd68822c61bfd06a663388f0d56->enter($__internal_97bc62223d31198a3a089bf22a33b816453b4dd68822c61bfd06a663388f0d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6ef5487f3404c6bde328fe744491b9f95744967c2d29e613416f001ff7f9a8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef5487f3404c6bde328fe744491b9f95744967c2d29e613416f001ff7f9a8b7->enter($__internal_6ef5487f3404c6bde328fe744491b9f95744967c2d29e613416f001ff7f9a8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97bc62223d31198a3a089bf22a33b816453b4dd68822c61bfd06a663388f0d56->leave($__internal_97bc62223d31198a3a089bf22a33b816453b4dd68822c61bfd06a663388f0d56_prof);

        
        $__internal_6ef5487f3404c6bde328fe744491b9f95744967c2d29e613416f001ff7f9a8b7->leave($__internal_6ef5487f3404c6bde328fe744491b9f95744967c2d29e613416f001ff7f9a8b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
