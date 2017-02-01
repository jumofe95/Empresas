<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4931b092f408a251789e2546d162e4ea5ce94bf5b939888fd4ea9be4cd915e57 extends Twig_Template
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
        $__internal_10ec86153ec1f895624ef98dbeadda730ed11de93102190b9390a8d278e6d059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ec86153ec1f895624ef98dbeadda730ed11de93102190b9390a8d278e6d059->enter($__internal_10ec86153ec1f895624ef98dbeadda730ed11de93102190b9390a8d278e6d059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_cab90efad832720c692573158c068b6b602c460850e6b0cc8dac8f208c4dbf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab90efad832720c692573158c068b6b602c460850e6b0cc8dac8f208c4dbf07->enter($__internal_cab90efad832720c692573158c068b6b602c460850e6b0cc8dac8f208c4dbf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_10ec86153ec1f895624ef98dbeadda730ed11de93102190b9390a8d278e6d059->leave($__internal_10ec86153ec1f895624ef98dbeadda730ed11de93102190b9390a8d278e6d059_prof);

        
        $__internal_cab90efad832720c692573158c068b6b602c460850e6b0cc8dac8f208c4dbf07->leave($__internal_cab90efad832720c692573158c068b6b602c460850e6b0cc8dac8f208c4dbf07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
