<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_9ca40dd69a4ae85bf29392554ff65c96dcd27fe8b99adbc7969191f1214e1bed extends Twig_Template
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
        $__internal_7979f6b5f153ed9bf651674d993a50f761fdf83a58331198d3840468ae89d1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7979f6b5f153ed9bf651674d993a50f761fdf83a58331198d3840468ae89d1f5->enter($__internal_7979f6b5f153ed9bf651674d993a50f761fdf83a58331198d3840468ae89d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c65f0271e550d94b5715db8a2b9e23ac51dc24f1b833ee20a434efe3bd4d617f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65f0271e550d94b5715db8a2b9e23ac51dc24f1b833ee20a434efe3bd4d617f->enter($__internal_c65f0271e550d94b5715db8a2b9e23ac51dc24f1b833ee20a434efe3bd4d617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7979f6b5f153ed9bf651674d993a50f761fdf83a58331198d3840468ae89d1f5->leave($__internal_7979f6b5f153ed9bf651674d993a50f761fdf83a58331198d3840468ae89d1f5_prof);

        
        $__internal_c65f0271e550d94b5715db8a2b9e23ac51dc24f1b833ee20a434efe3bd4d617f->leave($__internal_c65f0271e550d94b5715db8a2b9e23ac51dc24f1b833ee20a434efe3bd4d617f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
