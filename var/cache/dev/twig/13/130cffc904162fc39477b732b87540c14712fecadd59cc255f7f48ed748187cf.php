<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5aa29c1fe51ae25357839f6e8b20104a32a26b903c4c00d324997060cbad9ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b66eb5659143ed7e5c624a1a68d43e2e12e10e2c034339cba913660353e84ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b66eb5659143ed7e5c624a1a68d43e2e12e10e2c034339cba913660353e84ce->enter($__internal_5b66eb5659143ed7e5c624a1a68d43e2e12e10e2c034339cba913660353e84ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f82a8b6337700cb2454497b4ffc78cfc75107d8a50dc1cb2efa74eeb12ea3ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82a8b6337700cb2454497b4ffc78cfc75107d8a50dc1cb2efa74eeb12ea3ca4->enter($__internal_f82a8b6337700cb2454497b4ffc78cfc75107d8a50dc1cb2efa74eeb12ea3ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5b66eb5659143ed7e5c624a1a68d43e2e12e10e2c034339cba913660353e84ce->leave($__internal_5b66eb5659143ed7e5c624a1a68d43e2e12e10e2c034339cba913660353e84ce_prof);

        
        $__internal_f82a8b6337700cb2454497b4ffc78cfc75107d8a50dc1cb2efa74eeb12ea3ca4->leave($__internal_f82a8b6337700cb2454497b4ffc78cfc75107d8a50dc1cb2efa74eeb12ea3ca4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
