<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_294620237de638b947629706539a2a9037c8b4303178dec4bdd4b59a447df148 extends Twig_Template
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
        $__internal_aa6f32b7f8258a99fd47564eddbf57ef0ca708b26aca83f9321f4b0e551e7680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6f32b7f8258a99fd47564eddbf57ef0ca708b26aca83f9321f4b0e551e7680->enter($__internal_aa6f32b7f8258a99fd47564eddbf57ef0ca708b26aca83f9321f4b0e551e7680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ee2f1862b3465909f8bb10819af6d0928d9d385f734390413c4907abbf29c27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2f1862b3465909f8bb10819af6d0928d9d385f734390413c4907abbf29c27e->enter($__internal_ee2f1862b3465909f8bb10819af6d0928d9d385f734390413c4907abbf29c27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_aa6f32b7f8258a99fd47564eddbf57ef0ca708b26aca83f9321f4b0e551e7680->leave($__internal_aa6f32b7f8258a99fd47564eddbf57ef0ca708b26aca83f9321f4b0e551e7680_prof);

        
        $__internal_ee2f1862b3465909f8bb10819af6d0928d9d385f734390413c4907abbf29c27e->leave($__internal_ee2f1862b3465909f8bb10819af6d0928d9d385f734390413c4907abbf29c27e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
