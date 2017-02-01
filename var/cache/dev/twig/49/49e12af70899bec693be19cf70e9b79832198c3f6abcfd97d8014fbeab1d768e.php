<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_47b72d709afbaad1aba59698a190926678d72da0b8d80b74d5e6fc3e49982194 extends Twig_Template
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
        $__internal_0060c9a04aca7f0b5840832524a49f5c333f11481083a2f6d351d581192e9ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0060c9a04aca7f0b5840832524a49f5c333f11481083a2f6d351d581192e9ef3->enter($__internal_0060c9a04aca7f0b5840832524a49f5c333f11481083a2f6d351d581192e9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_2ac81302f179d2e1088cace169cbd03d2bec0a2a25e093d5179e7deb2f18de3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac81302f179d2e1088cace169cbd03d2bec0a2a25e093d5179e7deb2f18de3f->enter($__internal_2ac81302f179d2e1088cace169cbd03d2bec0a2a25e093d5179e7deb2f18de3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0060c9a04aca7f0b5840832524a49f5c333f11481083a2f6d351d581192e9ef3->leave($__internal_0060c9a04aca7f0b5840832524a49f5c333f11481083a2f6d351d581192e9ef3_prof);

        
        $__internal_2ac81302f179d2e1088cace169cbd03d2bec0a2a25e093d5179e7deb2f18de3f->leave($__internal_2ac81302f179d2e1088cace169cbd03d2bec0a2a25e093d5179e7deb2f18de3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
