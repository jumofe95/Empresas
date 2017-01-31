<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_509e7dc516429403504390706f8ed0edde7165f1b8ed5763f1c08fad7b232f0a extends Twig_Template
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
        $__internal_b843c0997ecea7c27d52869aa7a32badb1d332a491d0c8381c06087454d7caa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b843c0997ecea7c27d52869aa7a32badb1d332a491d0c8381c06087454d7caa4->enter($__internal_b843c0997ecea7c27d52869aa7a32badb1d332a491d0c8381c06087454d7caa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b843c0997ecea7c27d52869aa7a32badb1d332a491d0c8381c06087454d7caa4->leave($__internal_b843c0997ecea7c27d52869aa7a32badb1d332a491d0c8381c06087454d7caa4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa2ed9b3b93fa842c20afdbf4a47acae263af2e5850cb4883693520c47d1116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa2ed9b3b93fa842c20afdbf4a47acae263af2e5850cb4883693520c47d1116->enter($__internal_6fa2ed9b3b93fa842c20afdbf4a47acae263af2e5850cb4883693520c47d1116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IndexBundle:Default:index.html.twig"));

        // line 4
        echo "
<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


";
        
        $__internal_6fa2ed9b3b93fa842c20afdbf4a47acae263af2e5850cb4883693520c47d1116->leave($__internal_6fa2ed9b3b93fa842c20afdbf4a47acae263af2e5850cb4883693520c47d1116_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
