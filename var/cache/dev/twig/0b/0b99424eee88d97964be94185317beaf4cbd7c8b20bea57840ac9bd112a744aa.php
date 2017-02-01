<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5dbb42cff9681f01c988a87c2f13992a8b1186b6356ac9893992b5e752e8110b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbb42cff9681f01c988a87c2f13992a8b1186b6356ac9893992b5e752e8110b->enter($__internal_5dbb42cff9681f01c988a87c2f13992a8b1186b6356ac9893992b5e752e8110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cc53a79360eacf9ff7b2e1362297f29fb8508f64a5364a0636a01fcc9c02f367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc53a79360eacf9ff7b2e1362297f29fb8508f64a5364a0636a01fcc9c02f367->enter($__internal_cc53a79360eacf9ff7b2e1362297f29fb8508f64a5364a0636a01fcc9c02f367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dbb42cff9681f01c988a87c2f13992a8b1186b6356ac9893992b5e752e8110b->leave($__internal_5dbb42cff9681f01c988a87c2f13992a8b1186b6356ac9893992b5e752e8110b_prof);

        
        $__internal_cc53a79360eacf9ff7b2e1362297f29fb8508f64a5364a0636a01fcc9c02f367->leave($__internal_cc53a79360eacf9ff7b2e1362297f29fb8508f64a5364a0636a01fcc9c02f367_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5dc83c18946fad9b59a8f4f3e624266af41009b9d2f1b2ec2652fc580a94218c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc83c18946fad9b59a8f4f3e624266af41009b9d2f1b2ec2652fc580a94218c->enter($__internal_5dc83c18946fad9b59a8f4f3e624266af41009b9d2f1b2ec2652fc580a94218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d16911d4dc4e9eba7c469ee0a3f0f5b67bdd4a369eb25494144481214e8c990c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16911d4dc4e9eba7c469ee0a3f0f5b67bdd4a369eb25494144481214e8c990c->enter($__internal_d16911d4dc4e9eba7c469ee0a3f0f5b67bdd4a369eb25494144481214e8c990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d16911d4dc4e9eba7c469ee0a3f0f5b67bdd4a369eb25494144481214e8c990c->leave($__internal_d16911d4dc4e9eba7c469ee0a3f0f5b67bdd4a369eb25494144481214e8c990c_prof);

        
        $__internal_5dc83c18946fad9b59a8f4f3e624266af41009b9d2f1b2ec2652fc580a94218c->leave($__internal_5dc83c18946fad9b59a8f4f3e624266af41009b9d2f1b2ec2652fc580a94218c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85ef0da063f54cf4f497d9e86cfc133daca2df9fb5f7c9698745226f98e43246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ef0da063f54cf4f497d9e86cfc133daca2df9fb5f7c9698745226f98e43246->enter($__internal_85ef0da063f54cf4f497d9e86cfc133daca2df9fb5f7c9698745226f98e43246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9b9858ae7ab025ba6d937137529672a023c1bb59335cf9a3e7460923ae8911b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b9858ae7ab025ba6d937137529672a023c1bb59335cf9a3e7460923ae8911b->enter($__internal_f9b9858ae7ab025ba6d937137529672a023c1bb59335cf9a3e7460923ae8911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9b9858ae7ab025ba6d937137529672a023c1bb59335cf9a3e7460923ae8911b->leave($__internal_f9b9858ae7ab025ba6d937137529672a023c1bb59335cf9a3e7460923ae8911b_prof);

        
        $__internal_85ef0da063f54cf4f497d9e86cfc133daca2df9fb5f7c9698745226f98e43246->leave($__internal_85ef0da063f54cf4f497d9e86cfc133daca2df9fb5f7c9698745226f98e43246_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e8ff3f1e6b1fe93999f0e18df63c57d8e7feb359041cd05a36c46de778daead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8ff3f1e6b1fe93999f0e18df63c57d8e7feb359041cd05a36c46de778daead->enter($__internal_5e8ff3f1e6b1fe93999f0e18df63c57d8e7feb359041cd05a36c46de778daead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f471f8d3d05eec21a7a66ba85cc34f40895e98dd02aa999f9bf773b8a935233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f471f8d3d05eec21a7a66ba85cc34f40895e98dd02aa999f9bf773b8a935233->enter($__internal_7f471f8d3d05eec21a7a66ba85cc34f40895e98dd02aa999f9bf773b8a935233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f471f8d3d05eec21a7a66ba85cc34f40895e98dd02aa999f9bf773b8a935233->leave($__internal_7f471f8d3d05eec21a7a66ba85cc34f40895e98dd02aa999f9bf773b8a935233_prof);

        
        $__internal_5e8ff3f1e6b1fe93999f0e18df63c57d8e7feb359041cd05a36c46de778daead->leave($__internal_5e8ff3f1e6b1fe93999f0e18df63c57d8e7feb359041cd05a36c46de778daead_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
