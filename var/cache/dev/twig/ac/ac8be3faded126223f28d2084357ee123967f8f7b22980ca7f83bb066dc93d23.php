<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6df93a4715693abcc53e3ed31c0cbe82ddb7d9d31ecb8bcb55205e82d6d2773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6df93a4715693abcc53e3ed31c0cbe82ddb7d9d31ecb8bcb55205e82d6d2773->enter($__internal_d6df93a4715693abcc53e3ed31c0cbe82ddb7d9d31ecb8bcb55205e82d6d2773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_03fc021164beac26f1190bb3136c9cfd94dd448f7f2ccb497a9e290087ad9f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fc021164beac26f1190bb3136c9cfd94dd448f7f2ccb497a9e290087ad9f57->enter($__internal_03fc021164beac26f1190bb3136c9cfd94dd448f7f2ccb497a9e290087ad9f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6df93a4715693abcc53e3ed31c0cbe82ddb7d9d31ecb8bcb55205e82d6d2773->leave($__internal_d6df93a4715693abcc53e3ed31c0cbe82ddb7d9d31ecb8bcb55205e82d6d2773_prof);

        
        $__internal_03fc021164beac26f1190bb3136c9cfd94dd448f7f2ccb497a9e290087ad9f57->leave($__internal_03fc021164beac26f1190bb3136c9cfd94dd448f7f2ccb497a9e290087ad9f57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd2c10fc212680f578c9ee2f7164a740da84c1abf49dbb1ff943f1c80351b4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2c10fc212680f578c9ee2f7164a740da84c1abf49dbb1ff943f1c80351b4fb->enter($__internal_bd2c10fc212680f578c9ee2f7164a740da84c1abf49dbb1ff943f1c80351b4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc56930a0cec5733dc22077d023d911f5db04076ccd7df9a530f8d3048b21fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc56930a0cec5733dc22077d023d911f5db04076ccd7df9a530f8d3048b21fdb->enter($__internal_fc56930a0cec5733dc22077d023d911f5db04076ccd7df9a530f8d3048b21fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc56930a0cec5733dc22077d023d911f5db04076ccd7df9a530f8d3048b21fdb->leave($__internal_fc56930a0cec5733dc22077d023d911f5db04076ccd7df9a530f8d3048b21fdb_prof);

        
        $__internal_bd2c10fc212680f578c9ee2f7164a740da84c1abf49dbb1ff943f1c80351b4fb->leave($__internal_bd2c10fc212680f578c9ee2f7164a740da84c1abf49dbb1ff943f1c80351b4fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_176a9477d24848b620f61b6821f943280059d94f927102370c55fe2716418aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176a9477d24848b620f61b6821f943280059d94f927102370c55fe2716418aea->enter($__internal_176a9477d24848b620f61b6821f943280059d94f927102370c55fe2716418aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9a68406aa5103ada23a81d9cea3828e5d56b2b7aeddcb5e909b8454f2534e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a68406aa5103ada23a81d9cea3828e5d56b2b7aeddcb5e909b8454f2534e71->enter($__internal_f9a68406aa5103ada23a81d9cea3828e5d56b2b7aeddcb5e909b8454f2534e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9a68406aa5103ada23a81d9cea3828e5d56b2b7aeddcb5e909b8454f2534e71->leave($__internal_f9a68406aa5103ada23a81d9cea3828e5d56b2b7aeddcb5e909b8454f2534e71_prof);

        
        $__internal_176a9477d24848b620f61b6821f943280059d94f927102370c55fe2716418aea->leave($__internal_176a9477d24848b620f61b6821f943280059d94f927102370c55fe2716418aea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1dd7fa44b015bd61dcc457cef60c981da2cfb5bceddc8e2984810be8e521ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dd7fa44b015bd61dcc457cef60c981da2cfb5bceddc8e2984810be8e521ac6->enter($__internal_b1dd7fa44b015bd61dcc457cef60c981da2cfb5bceddc8e2984810be8e521ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a35fb3b80775fab5fcc7fcea560e23e216986404bbaf048ae17acaf35c8fd8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35fb3b80775fab5fcc7fcea560e23e216986404bbaf048ae17acaf35c8fd8ec->enter($__internal_a35fb3b80775fab5fcc7fcea560e23e216986404bbaf048ae17acaf35c8fd8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a35fb3b80775fab5fcc7fcea560e23e216986404bbaf048ae17acaf35c8fd8ec->leave($__internal_a35fb3b80775fab5fcc7fcea560e23e216986404bbaf048ae17acaf35c8fd8ec_prof);

        
        $__internal_b1dd7fa44b015bd61dcc457cef60c981da2cfb5bceddc8e2984810be8e521ac6->leave($__internal_b1dd7fa44b015bd61dcc457cef60c981da2cfb5bceddc8e2984810be8e521ac6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
