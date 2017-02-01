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
        $__internal_239cfd67be0af302e47dc1d0840b51dfc39182f2fd0d8da9669e8bec39835de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239cfd67be0af302e47dc1d0840b51dfc39182f2fd0d8da9669e8bec39835de0->enter($__internal_239cfd67be0af302e47dc1d0840b51dfc39182f2fd0d8da9669e8bec39835de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $__internal_b02393a4a45eeeb816aba1aa461559ce7418fe515bc99df014a154addf8a5c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02393a4a45eeeb816aba1aa461559ce7418fe515bc99df014a154addf8a5c3d->enter($__internal_b02393a4a45eeeb816aba1aa461559ce7418fe515bc99df014a154addf8a5c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239cfd67be0af302e47dc1d0840b51dfc39182f2fd0d8da9669e8bec39835de0->leave($__internal_239cfd67be0af302e47dc1d0840b51dfc39182f2fd0d8da9669e8bec39835de0_prof);

        
        $__internal_b02393a4a45eeeb816aba1aa461559ce7418fe515bc99df014a154addf8a5c3d->leave($__internal_b02393a4a45eeeb816aba1aa461559ce7418fe515bc99df014a154addf8a5c3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c514e1b5f86595645e337bd61c0bc5e349a49d8a42fdaaa118a0dee9af51d064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c514e1b5f86595645e337bd61c0bc5e349a49d8a42fdaaa118a0dee9af51d064->enter($__internal_c514e1b5f86595645e337bd61c0bc5e349a49d8a42fdaaa118a0dee9af51d064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c83ad059f3829f623f3201238c5954ed091249a44947885f27607b9aa0cf5880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83ad059f3829f623f3201238c5954ed091249a44947885f27607b9aa0cf5880->enter($__internal_c83ad059f3829f623f3201238c5954ed091249a44947885f27607b9aa0cf5880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


";
        
        $__internal_c83ad059f3829f623f3201238c5954ed091249a44947885f27607b9aa0cf5880->leave($__internal_c83ad059f3829f623f3201238c5954ed091249a44947885f27607b9aa0cf5880_prof);

        
        $__internal_c514e1b5f86595645e337bd61c0bc5e349a49d8a42fdaaa118a0dee9af51d064->leave($__internal_c514e1b5f86595645e337bd61c0bc5e349a49d8a42fdaaa118a0dee9af51d064_prof);

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
