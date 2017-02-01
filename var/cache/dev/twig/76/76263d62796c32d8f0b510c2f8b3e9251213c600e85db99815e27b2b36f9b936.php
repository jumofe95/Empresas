<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f883b6a7c0dbfac7b8c4653515fe37fe9d3d7508a4afdf9ff4b8c355492cc82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_3a8f4ee35fc3ab5b608dc051e252edecc466698a73fe52690781a20d92e5485a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8f4ee35fc3ab5b608dc051e252edecc466698a73fe52690781a20d92e5485a->enter($__internal_3a8f4ee35fc3ab5b608dc051e252edecc466698a73fe52690781a20d92e5485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_442fb274ee9b9b646bfea0c10ef910104393f88e1075160cde3d7a3d833a349a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442fb274ee9b9b646bfea0c10ef910104393f88e1075160cde3d7a3d833a349a->enter($__internal_442fb274ee9b9b646bfea0c10ef910104393f88e1075160cde3d7a3d833a349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8f4ee35fc3ab5b608dc051e252edecc466698a73fe52690781a20d92e5485a->leave($__internal_3a8f4ee35fc3ab5b608dc051e252edecc466698a73fe52690781a20d92e5485a_prof);

        
        $__internal_442fb274ee9b9b646bfea0c10ef910104393f88e1075160cde3d7a3d833a349a->leave($__internal_442fb274ee9b9b646bfea0c10ef910104393f88e1075160cde3d7a3d833a349a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07cb2dc07927416d9c6476185ef0f361a986a565a9fdca2babec726150ce2be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cb2dc07927416d9c6476185ef0f361a986a565a9fdca2babec726150ce2be5->enter($__internal_07cb2dc07927416d9c6476185ef0f361a986a565a9fdca2babec726150ce2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d5bf206d0d4e46b59b4a3fd66000a375c2d8b8e5cc6813095b5c1cf07110831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5bf206d0d4e46b59b4a3fd66000a375c2d8b8e5cc6813095b5c1cf07110831->enter($__internal_6d5bf206d0d4e46b59b4a3fd66000a375c2d8b8e5cc6813095b5c1cf07110831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6d5bf206d0d4e46b59b4a3fd66000a375c2d8b8e5cc6813095b5c1cf07110831->leave($__internal_6d5bf206d0d4e46b59b4a3fd66000a375c2d8b8e5cc6813095b5c1cf07110831_prof);

        
        $__internal_07cb2dc07927416d9c6476185ef0f361a986a565a9fdca2babec726150ce2be5->leave($__internal_07cb2dc07927416d9c6476185ef0f361a986a565a9fdca2babec726150ce2be5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c66124621a7742a36f4531fb23ade1ccef78a45661135247266bafb645ca2d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66124621a7742a36f4531fb23ade1ccef78a45661135247266bafb645ca2d7f->enter($__internal_c66124621a7742a36f4531fb23ade1ccef78a45661135247266bafb645ca2d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc221c79a14bb5c66ac8c7f5863e1a1e0b9c350019868997a341ee3fc8151f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc221c79a14bb5c66ac8c7f5863e1a1e0b9c350019868997a341ee3fc8151f7f->enter($__internal_cc221c79a14bb5c66ac8c7f5863e1a1e0b9c350019868997a341ee3fc8151f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc221c79a14bb5c66ac8c7f5863e1a1e0b9c350019868997a341ee3fc8151f7f->leave($__internal_cc221c79a14bb5c66ac8c7f5863e1a1e0b9c350019868997a341ee3fc8151f7f_prof);

        
        $__internal_c66124621a7742a36f4531fb23ade1ccef78a45661135247266bafb645ca2d7f->leave($__internal_c66124621a7742a36f4531fb23ade1ccef78a45661135247266bafb645ca2d7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
