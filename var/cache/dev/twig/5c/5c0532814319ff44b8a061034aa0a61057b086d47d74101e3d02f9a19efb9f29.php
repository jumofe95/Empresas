<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_057478bdcf90d85b8ea886c8d9f2b01914788a473d36bee6b30bb02cdcf387ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_350d3749f3944159014dce4001675eec514bef7003ea8d8f55581ee5ffff7a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350d3749f3944159014dce4001675eec514bef7003ea8d8f55581ee5ffff7a77->enter($__internal_350d3749f3944159014dce4001675eec514bef7003ea8d8f55581ee5ffff7a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e295a20d0e4dabcd6f1fb3934bae8bd29d62467535dca02777b6646a381355c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e295a20d0e4dabcd6f1fb3934bae8bd29d62467535dca02777b6646a381355c6->enter($__internal_e295a20d0e4dabcd6f1fb3934bae8bd29d62467535dca02777b6646a381355c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350d3749f3944159014dce4001675eec514bef7003ea8d8f55581ee5ffff7a77->leave($__internal_350d3749f3944159014dce4001675eec514bef7003ea8d8f55581ee5ffff7a77_prof);

        
        $__internal_e295a20d0e4dabcd6f1fb3934bae8bd29d62467535dca02777b6646a381355c6->leave($__internal_e295a20d0e4dabcd6f1fb3934bae8bd29d62467535dca02777b6646a381355c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d48b67fa79344b6eb398a8c733cf992d78aa99436f5a86647f4d90602815ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d48b67fa79344b6eb398a8c733cf992d78aa99436f5a86647f4d90602815ea0->enter($__internal_1d48b67fa79344b6eb398a8c733cf992d78aa99436f5a86647f4d90602815ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ee3669e05cbe94bb84ebbb46f0abdb9489c2b47f0bbb8df1b616a58171663a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee3669e05cbe94bb84ebbb46f0abdb9489c2b47f0bbb8df1b616a58171663a7->enter($__internal_9ee3669e05cbe94bb84ebbb46f0abdb9489c2b47f0bbb8df1b616a58171663a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9ee3669e05cbe94bb84ebbb46f0abdb9489c2b47f0bbb8df1b616a58171663a7->leave($__internal_9ee3669e05cbe94bb84ebbb46f0abdb9489c2b47f0bbb8df1b616a58171663a7_prof);

        
        $__internal_1d48b67fa79344b6eb398a8c733cf992d78aa99436f5a86647f4d90602815ea0->leave($__internal_1d48b67fa79344b6eb398a8c733cf992d78aa99436f5a86647f4d90602815ea0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_080db3718e0f5843d4b661cf62e59f693eb0adec45a8edbe72c9233d2a29aaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080db3718e0f5843d4b661cf62e59f693eb0adec45a8edbe72c9233d2a29aaca->enter($__internal_080db3718e0f5843d4b661cf62e59f693eb0adec45a8edbe72c9233d2a29aaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08d6a01d483d7b453c5c3639a19133795c77c269e1e67b193952970d0f4a6323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d6a01d483d7b453c5c3639a19133795c77c269e1e67b193952970d0f4a6323->enter($__internal_08d6a01d483d7b453c5c3639a19133795c77c269e1e67b193952970d0f4a6323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_08d6a01d483d7b453c5c3639a19133795c77c269e1e67b193952970d0f4a6323->leave($__internal_08d6a01d483d7b453c5c3639a19133795c77c269e1e67b193952970d0f4a6323_prof);

        
        $__internal_080db3718e0f5843d4b661cf62e59f693eb0adec45a8edbe72c9233d2a29aaca->leave($__internal_080db3718e0f5843d4b661cf62e59f693eb0adec45a8edbe72c9233d2a29aaca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
