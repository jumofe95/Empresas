<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_096114c720480ab24f3a1e9603a4c8c1f3cbff763fb37483dd654151cd4d11ce extends Twig_Template
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
        $__internal_971191984a9cc2e3d8fc302c0bf7945d5d6ce2326594adc46127e2ab88e7d949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971191984a9cc2e3d8fc302c0bf7945d5d6ce2326594adc46127e2ab88e7d949->enter($__internal_971191984a9cc2e3d8fc302c0bf7945d5d6ce2326594adc46127e2ab88e7d949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $__internal_3269209c182e25f6181907436b799c74de1d853bfc7a21ed2a1dc4529a9e6525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3269209c182e25f6181907436b799c74de1d853bfc7a21ed2a1dc4529a9e6525->enter($__internal_3269209c182e25f6181907436b799c74de1d853bfc7a21ed2a1dc4529a9e6525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971191984a9cc2e3d8fc302c0bf7945d5d6ce2326594adc46127e2ab88e7d949->leave($__internal_971191984a9cc2e3d8fc302c0bf7945d5d6ce2326594adc46127e2ab88e7d949_prof);

        
        $__internal_3269209c182e25f6181907436b799c74de1d853bfc7a21ed2a1dc4529a9e6525->leave($__internal_3269209c182e25f6181907436b799c74de1d853bfc7a21ed2a1dc4529a9e6525_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a81b7b46b2e5037ffc2937fae34c56edc27e12842f58b4e8cb005b1bbf4d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a81b7b46b2e5037ffc2937fae34c56edc27e12842f58b4e8cb005b1bbf4d12->enter($__internal_d3a81b7b46b2e5037ffc2937fae34c56edc27e12842f58b4e8cb005b1bbf4d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be5c7796f5f97df94258e0611b594bc91400910ef284ba3276ab387ff0d73004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5c7796f5f97df94258e0611b594bc91400910ef284ba3276ab387ff0d73004->enter($__internal_be5c7796f5f97df94258e0611b594bc91400910ef284ba3276ab387ff0d73004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


";
        
        $__internal_be5c7796f5f97df94258e0611b594bc91400910ef284ba3276ab387ff0d73004->leave($__internal_be5c7796f5f97df94258e0611b594bc91400910ef284ba3276ab387ff0d73004_prof);

        
        $__internal_d3a81b7b46b2e5037ffc2937fae34c56edc27e12842f58b4e8cb005b1bbf4d12->leave($__internal_d3a81b7b46b2e5037ffc2937fae34c56edc27e12842f58b4e8cb005b1bbf4d12_prof);

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
", "IndexBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\IndexBundle/Resources/views/Default/index.html.twig");
    }
}
