<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b7442681ebcbe2f4da75915bc744d42da5a118616a9154d5d4105bb4f8821fc0 extends Twig_Template
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
        $__internal_95f4de078da589740a1982429f484d40c9080c83bdc3603c07b186f01e72dd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f4de078da589740a1982429f484d40c9080c83bdc3603c07b186f01e72dd69->enter($__internal_95f4de078da589740a1982429f484d40c9080c83bdc3603c07b186f01e72dd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_3bf2daf9d56c55917fe6b11fededb670f2add0e4e6ff6772a287b0549b5c91b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf2daf9d56c55917fe6b11fededb670f2add0e4e6ff6772a287b0549b5c91b4->enter($__internal_3bf2daf9d56c55917fe6b11fededb670f2add0e4e6ff6772a287b0549b5c91b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_95f4de078da589740a1982429f484d40c9080c83bdc3603c07b186f01e72dd69->leave($__internal_95f4de078da589740a1982429f484d40c9080c83bdc3603c07b186f01e72dd69_prof);

        
        $__internal_3bf2daf9d56c55917fe6b11fededb670f2add0e4e6ff6772a287b0549b5c91b4->leave($__internal_3bf2daf9d56c55917fe6b11fededb670f2add0e4e6ff6772a287b0549b5c91b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
