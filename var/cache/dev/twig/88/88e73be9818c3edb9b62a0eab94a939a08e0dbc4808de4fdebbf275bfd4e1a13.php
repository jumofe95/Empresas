<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_330d1665e08b5bb7ba0d55f4ea556acf1d82e335e47ea8c9a3adaa86dc6ed61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a6fecb003289f3513b5abb41308ebff4b6a56e1392f701cf1b79b604ac7c58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6fecb003289f3513b5abb41308ebff4b6a56e1392f701cf1b79b604ac7c58d->enter($__internal_5a6fecb003289f3513b5abb41308ebff4b6a56e1392f701cf1b79b604ac7c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6fecb003289f3513b5abb41308ebff4b6a56e1392f701cf1b79b604ac7c58d->leave($__internal_5a6fecb003289f3513b5abb41308ebff4b6a56e1392f701cf1b79b604ac7c58d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d188f10763c05a608728f5b8d24221f746fedf764de8afe76a685a38fd80ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d188f10763c05a608728f5b8d24221f746fedf764de8afe76a685a38fd80ba0->enter($__internal_2d188f10763c05a608728f5b8d24221f746fedf764de8afe76a685a38fd80ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d188f10763c05a608728f5b8d24221f746fedf764de8afe76a685a38fd80ba0->leave($__internal_2d188f10763c05a608728f5b8d24221f746fedf764de8afe76a685a38fd80ba0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6d73fd4288d0cc6ed414569de7074f4adc5385e1f6cb00c5763e809d628fe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d73fd4288d0cc6ed414569de7074f4adc5385e1f6cb00c5763e809d628fe9e->enter($__internal_d6d73fd4288d0cc6ed414569de7074f4adc5385e1f6cb00c5763e809d628fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6d73fd4288d0cc6ed414569de7074f4adc5385e1f6cb00c5763e809d628fe9e->leave($__internal_d6d73fd4288d0cc6ed414569de7074f4adc5385e1f6cb00c5763e809d628fe9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_307d6c1b09c5086f1706e400d37645a3d89215af31fc485514fb7476abd2c65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307d6c1b09c5086f1706e400d37645a3d89215af31fc485514fb7476abd2c65d->enter($__internal_307d6c1b09c5086f1706e400d37645a3d89215af31fc485514fb7476abd2c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_307d6c1b09c5086f1706e400d37645a3d89215af31fc485514fb7476abd2c65d->leave($__internal_307d6c1b09c5086f1706e400d37645a3d89215af31fc485514fb7476abd2c65d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
