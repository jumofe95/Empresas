<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1708668572bc921be6fdd0b8ab1809c26ef45dffce78c54987c85bd2e3fff2e1 extends Twig_Template
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
        $__internal_09247e30bfc410880024f9a96a4dd8040f5f0292b9afbf9c3cff8e4c003457b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09247e30bfc410880024f9a96a4dd8040f5f0292b9afbf9c3cff8e4c003457b6->enter($__internal_09247e30bfc410880024f9a96a4dd8040f5f0292b9afbf9c3cff8e4c003457b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d7f4ba45c1bd7f8781d0b1a68fe1bb613698f1fdf10f823bd4a16ae1ef006590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f4ba45c1bd7f8781d0b1a68fe1bb613698f1fdf10f823bd4a16ae1ef006590->enter($__internal_d7f4ba45c1bd7f8781d0b1a68fe1bb613698f1fdf10f823bd4a16ae1ef006590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_09247e30bfc410880024f9a96a4dd8040f5f0292b9afbf9c3cff8e4c003457b6->leave($__internal_09247e30bfc410880024f9a96a4dd8040f5f0292b9afbf9c3cff8e4c003457b6_prof);

        
        $__internal_d7f4ba45c1bd7f8781d0b1a68fe1bb613698f1fdf10f823bd4a16ae1ef006590->leave($__internal_d7f4ba45c1bd7f8781d0b1a68fe1bb613698f1fdf10f823bd4a16ae1ef006590_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
