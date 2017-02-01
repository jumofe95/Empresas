<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5d8fc3e296f87608a0eb96a2f850f1c091ee04cd5fbe7bd843c4b4f2ec3dee3 extends Twig_Template
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
        $__internal_6aacd28a675437addd7da6b85e6fa2950f8d5db1d786b3bda34eba31b350551a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aacd28a675437addd7da6b85e6fa2950f8d5db1d786b3bda34eba31b350551a->enter($__internal_6aacd28a675437addd7da6b85e6fa2950f8d5db1d786b3bda34eba31b350551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_06d6496459c4a206c2cae5dbb181d81abbd8295e04f7939c50d1c17e9ba4ff3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d6496459c4a206c2cae5dbb181d81abbd8295e04f7939c50d1c17e9ba4ff3c->enter($__internal_06d6496459c4a206c2cae5dbb181d81abbd8295e04f7939c50d1c17e9ba4ff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6aacd28a675437addd7da6b85e6fa2950f8d5db1d786b3bda34eba31b350551a->leave($__internal_6aacd28a675437addd7da6b85e6fa2950f8d5db1d786b3bda34eba31b350551a_prof);

        
        $__internal_06d6496459c4a206c2cae5dbb181d81abbd8295e04f7939c50d1c17e9ba4ff3c->leave($__internal_06d6496459c4a206c2cae5dbb181d81abbd8295e04f7939c50d1c17e9ba4ff3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
