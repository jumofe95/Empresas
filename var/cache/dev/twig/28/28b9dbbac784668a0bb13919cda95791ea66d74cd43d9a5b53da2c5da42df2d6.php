<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b5a038303d2bf32b4b2b87323e4fbdc47897dc032901cd53264627a645eef7cf extends Twig_Template
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
        $__internal_713751f011bb484daeb9a6f3e933acd5082ed965cbcd1df711e8d2dbb0d7d330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713751f011bb484daeb9a6f3e933acd5082ed965cbcd1df711e8d2dbb0d7d330->enter($__internal_713751f011bb484daeb9a6f3e933acd5082ed965cbcd1df711e8d2dbb0d7d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_73d8e1b9d30888c6fb58ec7b08cc41a903eb95578223179d112fe32976222001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d8e1b9d30888c6fb58ec7b08cc41a903eb95578223179d112fe32976222001->enter($__internal_73d8e1b9d30888c6fb58ec7b08cc41a903eb95578223179d112fe32976222001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_713751f011bb484daeb9a6f3e933acd5082ed965cbcd1df711e8d2dbb0d7d330->leave($__internal_713751f011bb484daeb9a6f3e933acd5082ed965cbcd1df711e8d2dbb0d7d330_prof);

        
        $__internal_73d8e1b9d30888c6fb58ec7b08cc41a903eb95578223179d112fe32976222001->leave($__internal_73d8e1b9d30888c6fb58ec7b08cc41a903eb95578223179d112fe32976222001_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
