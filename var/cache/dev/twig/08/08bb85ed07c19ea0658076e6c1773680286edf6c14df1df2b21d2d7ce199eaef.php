<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f4c0725911775639c0e5eb765622a1a9b12b386e28af7fefd8f5771f16d3d0fd extends Twig_Template
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
        $__internal_5be1349ceda0533263b41adc4c007fd0a93dd4f14b6351104b3ec397b10d6630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be1349ceda0533263b41adc4c007fd0a93dd4f14b6351104b3ec397b10d6630->enter($__internal_5be1349ceda0533263b41adc4c007fd0a93dd4f14b6351104b3ec397b10d6630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d54ff80d193b7be07981a8ea0d92944e354cdc1c31e2a8dd9421305301b78329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54ff80d193b7be07981a8ea0d92944e354cdc1c31e2a8dd9421305301b78329->enter($__internal_d54ff80d193b7be07981a8ea0d92944e354cdc1c31e2a8dd9421305301b78329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5be1349ceda0533263b41adc4c007fd0a93dd4f14b6351104b3ec397b10d6630->leave($__internal_5be1349ceda0533263b41adc4c007fd0a93dd4f14b6351104b3ec397b10d6630_prof);

        
        $__internal_d54ff80d193b7be07981a8ea0d92944e354cdc1c31e2a8dd9421305301b78329->leave($__internal_d54ff80d193b7be07981a8ea0d92944e354cdc1c31e2a8dd9421305301b78329_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
