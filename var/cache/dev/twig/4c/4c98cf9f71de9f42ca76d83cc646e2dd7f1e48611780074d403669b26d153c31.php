<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_241906b11f803f080a874a9c8c0e998510e8ebf583454ce878d49508fd577c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baec2ef84ae0e441324ee65647ab6cbc071120f504b4e716a7d91d7967a8304f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baec2ef84ae0e441324ee65647ab6cbc071120f504b4e716a7d91d7967a8304f->enter($__internal_baec2ef84ae0e441324ee65647ab6cbc071120f504b4e716a7d91d7967a8304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_86a3d227f352049d5098cd7e22a83ade6a14895a164d00af3d6c52d1e01b8ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a3d227f352049d5098cd7e22a83ade6a14895a164d00af3d6c52d1e01b8ee6->enter($__internal_86a3d227f352049d5098cd7e22a83ade6a14895a164d00af3d6c52d1e01b8ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baec2ef84ae0e441324ee65647ab6cbc071120f504b4e716a7d91d7967a8304f->leave($__internal_baec2ef84ae0e441324ee65647ab6cbc071120f504b4e716a7d91d7967a8304f_prof);

        
        $__internal_86a3d227f352049d5098cd7e22a83ade6a14895a164d00af3d6c52d1e01b8ee6->leave($__internal_86a3d227f352049d5098cd7e22a83ade6a14895a164d00af3d6c52d1e01b8ee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0db7a49b57429381d25001bdb8b2b1da8d704a51032554a11106d5480b901a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db7a49b57429381d25001bdb8b2b1da8d704a51032554a11106d5480b901a07->enter($__internal_0db7a49b57429381d25001bdb8b2b1da8d704a51032554a11106d5480b901a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_29c5aeb4b98ca27ee6f97385ccc135d2294f0daeeb60521899776e6e38af7060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c5aeb4b98ca27ee6f97385ccc135d2294f0daeeb60521899776e6e38af7060->enter($__internal_29c5aeb4b98ca27ee6f97385ccc135d2294f0daeeb60521899776e6e38af7060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_29c5aeb4b98ca27ee6f97385ccc135d2294f0daeeb60521899776e6e38af7060->leave($__internal_29c5aeb4b98ca27ee6f97385ccc135d2294f0daeeb60521899776e6e38af7060_prof);

        
        $__internal_0db7a49b57429381d25001bdb8b2b1da8d704a51032554a11106d5480b901a07->leave($__internal_0db7a49b57429381d25001bdb8b2b1da8d704a51032554a11106d5480b901a07_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
