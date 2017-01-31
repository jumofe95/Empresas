<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1f0bfe6b82beb44189115e3812602f3db1dd1eee1827965047500ceaf07f2a5b extends Twig_Template
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
        $__internal_ea894362115f00af94dfcb05f547536b986bb5333423f82a255234c1af7cdfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea894362115f00af94dfcb05f547536b986bb5333423f82a255234c1af7cdfc9->enter($__internal_ea894362115f00af94dfcb05f547536b986bb5333423f82a255234c1af7cdfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea894362115f00af94dfcb05f547536b986bb5333423f82a255234c1af7cdfc9->leave($__internal_ea894362115f00af94dfcb05f547536b986bb5333423f82a255234c1af7cdfc9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39bb7f2012e10866aa1e80050b23930e2c7188537e5f3e36e74e53435f41f703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bb7f2012e10866aa1e80050b23930e2c7188537e5f3e36e74e53435f41f703->enter($__internal_39bb7f2012e10866aa1e80050b23930e2c7188537e5f3e36e74e53435f41f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_39bb7f2012e10866aa1e80050b23930e2c7188537e5f3e36e74e53435f41f703->leave($__internal_39bb7f2012e10866aa1e80050b23930e2c7188537e5f3e36e74e53435f41f703_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a23a9fde1316afd6075cb9aee1f1b8a771e0464d42208d31eb036f531ce250fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23a9fde1316afd6075cb9aee1f1b8a771e0464d42208d31eb036f531ce250fa->enter($__internal_a23a9fde1316afd6075cb9aee1f1b8a771e0464d42208d31eb036f531ce250fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a23a9fde1316afd6075cb9aee1f1b8a771e0464d42208d31eb036f531ce250fa->leave($__internal_a23a9fde1316afd6075cb9aee1f1b8a771e0464d42208d31eb036f531ce250fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e74454078231279fb023abf709ff8da78ce691bd96fe84a0c1a3fd5a2afe149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e74454078231279fb023abf709ff8da78ce691bd96fe84a0c1a3fd5a2afe149->enter($__internal_3e74454078231279fb023abf709ff8da78ce691bd96fe84a0c1a3fd5a2afe149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e74454078231279fb023abf709ff8da78ce691bd96fe84a0c1a3fd5a2afe149->leave($__internal_3e74454078231279fb023abf709ff8da78ce691bd96fe84a0c1a3fd5a2afe149_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
