<?php

/* EmpresaBundle:Default:empresas_new.html.twig */
class __TwigTemplate_7869ff92aca027b9a6533fdbabae7d4bd44c7eda6c45e5c34d0890779ae68728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmpresaBundle:Default:empresas_new.html.twig", 1);
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
        $__internal_bceb8c128f51b6ef12ced1cf45da00e8b44f18b2e837a10917c9578c0007142b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceb8c128f51b6ef12ced1cf45da00e8b44f18b2e837a10917c9578c0007142b->enter($__internal_bceb8c128f51b6ef12ced1cf45da00e8b44f18b2e837a10917c9578c0007142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_new.html.twig"));

        $__internal_bf964c5ce34eaa2aa480ab7ea6b7ae2d130436bc882b7d63a32afd141bd5a2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf964c5ce34eaa2aa480ab7ea6b7ae2d130436bc882b7d63a32afd141bd5a2dd->enter($__internal_bf964c5ce34eaa2aa480ab7ea6b7ae2d130436bc882b7d63a32afd141bd5a2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bceb8c128f51b6ef12ced1cf45da00e8b44f18b2e837a10917c9578c0007142b->leave($__internal_bceb8c128f51b6ef12ced1cf45da00e8b44f18b2e837a10917c9578c0007142b_prof);

        
        $__internal_bf964c5ce34eaa2aa480ab7ea6b7ae2d130436bc882b7d63a32afd141bd5a2dd->leave($__internal_bf964c5ce34eaa2aa480ab7ea6b7ae2d130436bc882b7d63a32afd141bd5a2dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e014c0cb4002225cd1993eca1c4eb79f6ee526385b436adf5692e2100f9e4b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e014c0cb4002225cd1993eca1c4eb79f6ee526385b436adf5692e2100f9e4b5f->enter($__internal_e014c0cb4002225cd1993eca1c4eb79f6ee526385b436adf5692e2100f9e4b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eea0053f2ceec38a616235e779e2b08fd312ad99174e3fffd276e43842b8fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eea0053f2ceec38a616235e779e2b08fd312ad99174e3fffd276e43842b8fb4->enter($__internal_8eea0053f2ceec38a616235e779e2b08fd312ad99174e3fffd276e43842b8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Nueva empresa.</h2>
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_8eea0053f2ceec38a616235e779e2b08fd312ad99174e3fffd276e43842b8fb4->leave($__internal_8eea0053f2ceec38a616235e779e2b08fd312ad99174e3fffd276e43842b8fb4_prof);

        
        $__internal_e014c0cb4002225cd1993eca1c4eb79f6ee526385b436adf5692e2100f9e4b5f->leave($__internal_e014c0cb4002225cd1993eca1c4eb79f6ee526385b436adf5692e2100f9e4b5f_prof);

    }

    public function getTemplateName()
    {
        return "EmpresaBundle:Default:empresas_new.html.twig";
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

{% endblock %}", "EmpresaBundle:Default:empresas_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\empresas_new.html.twig");
    }
}
