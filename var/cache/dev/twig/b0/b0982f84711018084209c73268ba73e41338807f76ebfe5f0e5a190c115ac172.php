<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0efabb0a254e1dd77f2b0e483f9f953b2fd764cdf747306ef18b67c0ba03caa8 extends Twig_Template
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
        $__internal_ba638bcc6429e256a90c7d92f1dce1d8975e5dcb3b18a55f066d4d70c2a490c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba638bcc6429e256a90c7d92f1dce1d8975e5dcb3b18a55f066d4d70c2a490c2->enter($__internal_ba638bcc6429e256a90c7d92f1dce1d8975e5dcb3b18a55f066d4d70c2a490c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c74c4112b75c854821fbf3f255e12a32125e36cf53876ada1a64028494f70e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74c4112b75c854821fbf3f255e12a32125e36cf53876ada1a64028494f70e8b->enter($__internal_c74c4112b75c854821fbf3f255e12a32125e36cf53876ada1a64028494f70e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ba638bcc6429e256a90c7d92f1dce1d8975e5dcb3b18a55f066d4d70c2a490c2->leave($__internal_ba638bcc6429e256a90c7d92f1dce1d8975e5dcb3b18a55f066d4d70c2a490c2_prof);

        
        $__internal_c74c4112b75c854821fbf3f255e12a32125e36cf53876ada1a64028494f70e8b->leave($__internal_c74c4112b75c854821fbf3f255e12a32125e36cf53876ada1a64028494f70e8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
