<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8f229c4ee0b268503cb5986d907bd7f0ff2ceb09b8af8d8ef212d7088726996 extends Twig_Template
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
        $__internal_a84f66f5be80c9eb1e0d14f8c77c2269ccfd414cde0055f58394685ba3fc0c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84f66f5be80c9eb1e0d14f8c77c2269ccfd414cde0055f58394685ba3fc0c77->enter($__internal_a84f66f5be80c9eb1e0d14f8c77c2269ccfd414cde0055f58394685ba3fc0c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cb41a724f76c9ac943c5a44496d0668b29af8ed699be48cb536b859904fbd33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb41a724f76c9ac943c5a44496d0668b29af8ed699be48cb536b859904fbd33c->enter($__internal_cb41a724f76c9ac943c5a44496d0668b29af8ed699be48cb536b859904fbd33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a84f66f5be80c9eb1e0d14f8c77c2269ccfd414cde0055f58394685ba3fc0c77->leave($__internal_a84f66f5be80c9eb1e0d14f8c77c2269ccfd414cde0055f58394685ba3fc0c77_prof);

        
        $__internal_cb41a724f76c9ac943c5a44496d0668b29af8ed699be48cb536b859904fbd33c->leave($__internal_cb41a724f76c9ac943c5a44496d0668b29af8ed699be48cb536b859904fbd33c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
