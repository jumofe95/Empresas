<?php

/* UsuarioBundle:Default:register.html.twig */
class __TwigTemplate_9cfadf733e000803042e3e377b1aa34d292799b40e70504aee4075c192a167e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UsuarioBundle:Default:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46202d2099ac518bcf66b8aa77ed0ed1395fd35c780716961227cd1cf3833cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46202d2099ac518bcf66b8aa77ed0ed1395fd35c780716961227cd1cf3833cea->enter($__internal_46202d2099ac518bcf66b8aa77ed0ed1395fd35c780716961227cd1cf3833cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:register.html.twig"));

        $__internal_663cf5dba4d64ed13b3dbb65712c6908ce34ad2f298f44a9c29d8c3575f767d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663cf5dba4d64ed13b3dbb65712c6908ce34ad2f298f44a9c29d8c3575f767d8->enter($__internal_663cf5dba4d64ed13b3dbb65712c6908ce34ad2f298f44a9c29d8c3575f767d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46202d2099ac518bcf66b8aa77ed0ed1395fd35c780716961227cd1cf3833cea->leave($__internal_46202d2099ac518bcf66b8aa77ed0ed1395fd35c780716961227cd1cf3833cea_prof);

        
        $__internal_663cf5dba4d64ed13b3dbb65712c6908ce34ad2f298f44a9c29d8c3575f767d8->leave($__internal_663cf5dba4d64ed13b3dbb65712c6908ce34ad2f298f44a9c29d8c3575f767d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd55f747b1b0fd096f0fe3298d8d326de43d5faa3f9b3fc8084a6290e371a392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd55f747b1b0fd096f0fe3298d8d326de43d5faa3f9b3fc8084a6290e371a392->enter($__internal_dd55f747b1b0fd096f0fe3298d8d326de43d5faa3f9b3fc8084a6290e371a392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acfc085019eff6dbf6a8c76ee7073f594f1869a28f09cc6c671687bd54822653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfc085019eff6dbf6a8c76ee7073f594f1869a28f09cc6c671687bd54822653->enter($__internal_acfc085019eff6dbf6a8c76ee7073f594f1869a28f09cc6c671687bd54822653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

<button type=\"submit\">Registrate!</button>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_acfc085019eff6dbf6a8c76ee7073f594f1869a28f09cc6c671687bd54822653->leave($__internal_acfc085019eff6dbf6a8c76ee7073f594f1869a28f09cc6c671687bd54822653_prof);

        
        $__internal_dd55f747b1b0fd096f0fe3298d8d326de43d5faa3f9b3fc8084a6290e371a392->leave($__internal_dd55f747b1b0fd096f0fe3298d8d326de43d5faa3f9b3fc8084a6290e371a392_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

{{ form_start(form) }}
{{ form_row(form.username) }}
{{ form_row(form.email) }}
{{ form_row(form.plainPassword.first) }}
{{ form_row(form.plainPassword.second) }}

<button type=\"submit\">Registrate!</button>
{{ form_end(form) }}



{% endblock %}
", "UsuarioBundle:Default:register.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
