<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_dc4b11f61b9e055890f971904ded84c554f2a0d795ea8fd049f3827526c661aa extends Twig_Template
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
        $__internal_21624c3024f79b9abaadebaecb01b7671252abead4f1a4f8e379eddf30118c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21624c3024f79b9abaadebaecb01b7671252abead4f1a4f8e379eddf30118c15->enter($__internal_21624c3024f79b9abaadebaecb01b7671252abead4f1a4f8e379eddf30118c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c19acfc4db13392e804ecee20aa692852dc705e3a15464cd67fa8c8ee43b465a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19acfc4db13392e804ecee20aa692852dc705e3a15464cd67fa8c8ee43b465a->enter($__internal_c19acfc4db13392e804ecee20aa692852dc705e3a15464cd67fa8c8ee43b465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_21624c3024f79b9abaadebaecb01b7671252abead4f1a4f8e379eddf30118c15->leave($__internal_21624c3024f79b9abaadebaecb01b7671252abead4f1a4f8e379eddf30118c15_prof);

        
        $__internal_c19acfc4db13392e804ecee20aa692852dc705e3a15464cd67fa8c8ee43b465a->leave($__internal_c19acfc4db13392e804ecee20aa692852dc705e3a15464cd67fa8c8ee43b465a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
