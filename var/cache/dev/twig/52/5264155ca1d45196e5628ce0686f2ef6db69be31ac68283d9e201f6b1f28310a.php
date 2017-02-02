<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_f40ea563ed670612f7b0f2ad6d80719b02585828c19d74161361decdcc1773d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IndexBundle:Default:index.html.twig", 1);
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
        $__internal_f9f614593a258020d81a9bce38e39bfc36e977700eb6a20cffcac2b407f1bb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f614593a258020d81a9bce38e39bfc36e977700eb6a20cffcac2b407f1bb13->enter($__internal_f9f614593a258020d81a9bce38e39bfc36e977700eb6a20cffcac2b407f1bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $__internal_52917b8de3d079a2a5d14cbf954f4a51265f4a8a34bc0977ae90721eaa8647c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52917b8de3d079a2a5d14cbf954f4a51265f4a8a34bc0977ae90721eaa8647c8->enter($__internal_52917b8de3d079a2a5d14cbf954f4a51265f4a8a34bc0977ae90721eaa8647c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9f614593a258020d81a9bce38e39bfc36e977700eb6a20cffcac2b407f1bb13->leave($__internal_f9f614593a258020d81a9bce38e39bfc36e977700eb6a20cffcac2b407f1bb13_prof);

        
        $__internal_52917b8de3d079a2a5d14cbf954f4a51265f4a8a34bc0977ae90721eaa8647c8->leave($__internal_52917b8de3d079a2a5d14cbf954f4a51265f4a8a34bc0977ae90721eaa8647c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee003e32a9d6d11bbd9d4285a802a6ae3cfc745add4714e9c3119990c7e6ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee003e32a9d6d11bbd9d4285a802a6ae3cfc745add4714e9c3119990c7e6ef9->enter($__internal_3ee003e32a9d6d11bbd9d4285a802a6ae3cfc745add4714e9c3119990c7e6ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_564748430b2bfecfe7ce1931d34f9650da3eaa8a09b75eb9d19b21f4dcb53420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564748430b2bfecfe7ce1931d34f9650da3eaa8a09b75eb9d19b21f4dcb53420->enter($__internal_564748430b2bfecfe7ce1931d34f9650da3eaa8a09b75eb9d19b21f4dcb53420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


";
        
        $__internal_564748430b2bfecfe7ce1931d34f9650da3eaa8a09b75eb9d19b21f4dcb53420->leave($__internal_564748430b2bfecfe7ce1931d34f9650da3eaa8a09b75eb9d19b21f4dcb53420_prof);

        
        $__internal_3ee003e32a9d6d11bbd9d4285a802a6ae3cfc745add4714e9c3119990c7e6ef9->leave($__internal_3ee003e32a9d6d11bbd9d4285a802a6ae3cfc745add4714e9c3119990c7e6ef9_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


{% endblock %}
", "IndexBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\IndexBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
