<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3a842eec62f3ec16ab599d30652a0e5497c9e37be6c9a09291313bbae4ed9035 extends Twig_Template
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
        $__internal_3faf65f91f2b4585df1854994d6df99e21d48c0417d4e139bcabf446c90c143b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faf65f91f2b4585df1854994d6df99e21d48c0417d4e139bcabf446c90c143b->enter($__internal_3faf65f91f2b4585df1854994d6df99e21d48c0417d4e139bcabf446c90c143b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3f3e775193a14f131554f31ee6a76b72ae709976d1bb9d9a5cbeaf2780842aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3e775193a14f131554f31ee6a76b72ae709976d1bb9d9a5cbeaf2780842aff->enter($__internal_3f3e775193a14f131554f31ee6a76b72ae709976d1bb9d9a5cbeaf2780842aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3faf65f91f2b4585df1854994d6df99e21d48c0417d4e139bcabf446c90c143b->leave($__internal_3faf65f91f2b4585df1854994d6df99e21d48c0417d4e139bcabf446c90c143b_prof);

        
        $__internal_3f3e775193a14f131554f31ee6a76b72ae709976d1bb9d9a5cbeaf2780842aff->leave($__internal_3f3e775193a14f131554f31ee6a76b72ae709976d1bb9d9a5cbeaf2780842aff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
