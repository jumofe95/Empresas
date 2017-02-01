<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd1dba4fb6a778294c47686bf80f695d13ccbf28ca5ac67a6f977fa42b51b2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617a063c94d8b79480599986b0b9943cb2377271e9d70637d5e56cca1ba934b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617a063c94d8b79480599986b0b9943cb2377271e9d70637d5e56cca1ba934b8->enter($__internal_617a063c94d8b79480599986b0b9943cb2377271e9d70637d5e56cca1ba934b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_dd52e0ac7bf184fc137c8d6243e2f59dc741e0f224931764cc195d309ecfe02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd52e0ac7bf184fc137c8d6243e2f59dc741e0f224931764cc195d309ecfe02e->enter($__internal_dd52e0ac7bf184fc137c8d6243e2f59dc741e0f224931764cc195d309ecfe02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617a063c94d8b79480599986b0b9943cb2377271e9d70637d5e56cca1ba934b8->leave($__internal_617a063c94d8b79480599986b0b9943cb2377271e9d70637d5e56cca1ba934b8_prof);

        
        $__internal_dd52e0ac7bf184fc137c8d6243e2f59dc741e0f224931764cc195d309ecfe02e->leave($__internal_dd52e0ac7bf184fc137c8d6243e2f59dc741e0f224931764cc195d309ecfe02e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a439c8cd8963ccb961559cc7f03261aa1df58de1cc318ab11f2ac749ce39759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a439c8cd8963ccb961559cc7f03261aa1df58de1cc318ab11f2ac749ce39759->enter($__internal_2a439c8cd8963ccb961559cc7f03261aa1df58de1cc318ab11f2ac749ce39759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_383c141619c91770c9c86bbef4a8832f01f11e65d89b8e9f6d21563b1020858c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383c141619c91770c9c86bbef4a8832f01f11e65d89b8e9f6d21563b1020858c->enter($__internal_383c141619c91770c9c86bbef4a8832f01f11e65d89b8e9f6d21563b1020858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_383c141619c91770c9c86bbef4a8832f01f11e65d89b8e9f6d21563b1020858c->leave($__internal_383c141619c91770c9c86bbef4a8832f01f11e65d89b8e9f6d21563b1020858c_prof);

        
        $__internal_2a439c8cd8963ccb961559cc7f03261aa1df58de1cc318ab11f2ac749ce39759->leave($__internal_2a439c8cd8963ccb961559cc7f03261aa1df58de1cc318ab11f2ac749ce39759_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_507f1f70259220da24bb01e31f5aa0d8ddf35218523fb2337ff8d4ffcfcde834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507f1f70259220da24bb01e31f5aa0d8ddf35218523fb2337ff8d4ffcfcde834->enter($__internal_507f1f70259220da24bb01e31f5aa0d8ddf35218523fb2337ff8d4ffcfcde834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_308bd4bcc8dbee74e9191aad77f99b9624ce4e8b15d641c738aa282a96f5b53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308bd4bcc8dbee74e9191aad77f99b9624ce4e8b15d641c738aa282a96f5b53c->enter($__internal_308bd4bcc8dbee74e9191aad77f99b9624ce4e8b15d641c738aa282a96f5b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_308bd4bcc8dbee74e9191aad77f99b9624ce4e8b15d641c738aa282a96f5b53c->leave($__internal_308bd4bcc8dbee74e9191aad77f99b9624ce4e8b15d641c738aa282a96f5b53c_prof);

        
        $__internal_507f1f70259220da24bb01e31f5aa0d8ddf35218523fb2337ff8d4ffcfcde834->leave($__internal_507f1f70259220da24bb01e31f5aa0d8ddf35218523fb2337ff8d4ffcfcde834_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
