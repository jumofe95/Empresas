<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a276052ddf4b877ed6554e608e06f35c2df2651d3ea34056bd2a6ab2c353f647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a276052ddf4b877ed6554e608e06f35c2df2651d3ea34056bd2a6ab2c353f647->enter($__internal_a276052ddf4b877ed6554e608e06f35c2df2651d3ea34056bd2a6ab2c353f647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_189598dd5cb1ec8f48fa651ad61e641ab63590344311ae32945ec5657fb03064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189598dd5cb1ec8f48fa651ad61e641ab63590344311ae32945ec5657fb03064->enter($__internal_189598dd5cb1ec8f48fa651ad61e641ab63590344311ae32945ec5657fb03064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a276052ddf4b877ed6554e608e06f35c2df2651d3ea34056bd2a6ab2c353f647->leave($__internal_a276052ddf4b877ed6554e608e06f35c2df2651d3ea34056bd2a6ab2c353f647_prof);

        
        $__internal_189598dd5cb1ec8f48fa651ad61e641ab63590344311ae32945ec5657fb03064->leave($__internal_189598dd5cb1ec8f48fa651ad61e641ab63590344311ae32945ec5657fb03064_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cee544cf50de9e6b7f00ad54cc1dbd1122e1ca73f51da64df4187db7c6a3611b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee544cf50de9e6b7f00ad54cc1dbd1122e1ca73f51da64df4187db7c6a3611b->enter($__internal_cee544cf50de9e6b7f00ad54cc1dbd1122e1ca73f51da64df4187db7c6a3611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfc76f469974e13ac89e1f6ead04d159b9ae9fcd6581cdc186bf7302a87466d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc76f469974e13ac89e1f6ead04d159b9ae9fcd6581cdc186bf7302a87466d2->enter($__internal_bfc76f469974e13ac89e1f6ead04d159b9ae9fcd6581cdc186bf7302a87466d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfc76f469974e13ac89e1f6ead04d159b9ae9fcd6581cdc186bf7302a87466d2->leave($__internal_bfc76f469974e13ac89e1f6ead04d159b9ae9fcd6581cdc186bf7302a87466d2_prof);

        
        $__internal_cee544cf50de9e6b7f00ad54cc1dbd1122e1ca73f51da64df4187db7c6a3611b->leave($__internal_cee544cf50de9e6b7f00ad54cc1dbd1122e1ca73f51da64df4187db7c6a3611b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c6c21f221d08716df289d650e4405c91373abc61360fae419a1f5a7ed4941b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6c21f221d08716df289d650e4405c91373abc61360fae419a1f5a7ed4941b1->enter($__internal_0c6c21f221d08716df289d650e4405c91373abc61360fae419a1f5a7ed4941b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a725d2b345c60fcafd46fc54815cbf8ed2cdbdafc454e4e8a6d382eb5f1e0c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a725d2b345c60fcafd46fc54815cbf8ed2cdbdafc454e4e8a6d382eb5f1e0c52->enter($__internal_a725d2b345c60fcafd46fc54815cbf8ed2cdbdafc454e4e8a6d382eb5f1e0c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a725d2b345c60fcafd46fc54815cbf8ed2cdbdafc454e4e8a6d382eb5f1e0c52->leave($__internal_a725d2b345c60fcafd46fc54815cbf8ed2cdbdafc454e4e8a6d382eb5f1e0c52_prof);

        
        $__internal_0c6c21f221d08716df289d650e4405c91373abc61360fae419a1f5a7ed4941b1->leave($__internal_0c6c21f221d08716df289d650e4405c91373abc61360fae419a1f5a7ed4941b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e664fda341bee8686fe91cfefc040a9058df87525959f4d445c0eca968d614ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e664fda341bee8686fe91cfefc040a9058df87525959f4d445c0eca968d614ac->enter($__internal_e664fda341bee8686fe91cfefc040a9058df87525959f4d445c0eca968d614ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87322d1f0a09627c5a4040ac3a1684eae2cf616562adb5d8452b914984a1803c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87322d1f0a09627c5a4040ac3a1684eae2cf616562adb5d8452b914984a1803c->enter($__internal_87322d1f0a09627c5a4040ac3a1684eae2cf616562adb5d8452b914984a1803c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_87322d1f0a09627c5a4040ac3a1684eae2cf616562adb5d8452b914984a1803c->leave($__internal_87322d1f0a09627c5a4040ac3a1684eae2cf616562adb5d8452b914984a1803c_prof);

        
        $__internal_e664fda341bee8686fe91cfefc040a9058df87525959f4d445c0eca968d614ac->leave($__internal_e664fda341bee8686fe91cfefc040a9058df87525959f4d445c0eca968d614ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
