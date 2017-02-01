<?php

/* @Empresa/Default/empresas_new.html.twig */
class __TwigTemplate_7869ff92aca027b9a6533fdbabae7d4bd44c7eda6c45e5c34d0890779ae68728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Empresa/Default/empresas_new.html.twig", 1);
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
        $__internal_1809148ad0ead1fdbb7a705cac88159ece698d21534afebe936b735b4c24882b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1809148ad0ead1fdbb7a705cac88159ece698d21534afebe936b735b4c24882b->enter($__internal_1809148ad0ead1fdbb7a705cac88159ece698d21534afebe936b735b4c24882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/empresas_new.html.twig"));

        $__internal_fd4120935ecdeac185294837845432b854dcb810f4acc5b22853f8042ca7141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4120935ecdeac185294837845432b854dcb810f4acc5b22853f8042ca7141f->enter($__internal_fd4120935ecdeac185294837845432b854dcb810f4acc5b22853f8042ca7141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/empresas_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1809148ad0ead1fdbb7a705cac88159ece698d21534afebe936b735b4c24882b->leave($__internal_1809148ad0ead1fdbb7a705cac88159ece698d21534afebe936b735b4c24882b_prof);

        
        $__internal_fd4120935ecdeac185294837845432b854dcb810f4acc5b22853f8042ca7141f->leave($__internal_fd4120935ecdeac185294837845432b854dcb810f4acc5b22853f8042ca7141f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f319867ed66b48b63eaef65f04931fc59a044c7336562b930b111b1778254e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f319867ed66b48b63eaef65f04931fc59a044c7336562b930b111b1778254e6a->enter($__internal_f319867ed66b48b63eaef65f04931fc59a044c7336562b930b111b1778254e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_304697374d28f310696ace9bd03866d891321d8794e3148583e29238e5199811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304697374d28f310696ace9bd03866d891321d8794e3148583e29238e5199811->enter($__internal_304697374d28f310696ace9bd03866d891321d8794e3148583e29238e5199811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Nueva empresa.</h2>
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_304697374d28f310696ace9bd03866d891321d8794e3148583e29238e5199811->leave($__internal_304697374d28f310696ace9bd03866d891321d8794e3148583e29238e5199811_prof);

        
        $__internal_f319867ed66b48b63eaef65f04931fc59a044c7336562b930b111b1778254e6a->leave($__internal_f319867ed66b48b63eaef65f04931fc59a044c7336562b930b111b1778254e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/empresas_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>Nueva empresa.</h2>
\t{{form(form)}}

{% endblock %}", "@Empresa/Default/empresas_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\empresas_new.html.twig");
    }
}
