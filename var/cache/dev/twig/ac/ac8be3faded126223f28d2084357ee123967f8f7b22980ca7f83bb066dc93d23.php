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
        $__internal_1617c1390df42e3bb9d69c870055d852dd1ed9ae24191712c710806f31d110fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1617c1390df42e3bb9d69c870055d852dd1ed9ae24191712c710806f31d110fa->enter($__internal_1617c1390df42e3bb9d69c870055d852dd1ed9ae24191712c710806f31d110fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a9f5c8cc57a6d8e232f7470b9d7f36b3f7cb3948240024fdbe517a78687cb754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f5c8cc57a6d8e232f7470b9d7f36b3f7cb3948240024fdbe517a78687cb754->enter($__internal_a9f5c8cc57a6d8e232f7470b9d7f36b3f7cb3948240024fdbe517a78687cb754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1617c1390df42e3bb9d69c870055d852dd1ed9ae24191712c710806f31d110fa->leave($__internal_1617c1390df42e3bb9d69c870055d852dd1ed9ae24191712c710806f31d110fa_prof);

        
        $__internal_a9f5c8cc57a6d8e232f7470b9d7f36b3f7cb3948240024fdbe517a78687cb754->leave($__internal_a9f5c8cc57a6d8e232f7470b9d7f36b3f7cb3948240024fdbe517a78687cb754_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9662384495040710f61aa0e3dd7f4835d7b8dcf3df692d1b9577679277c5cb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9662384495040710f61aa0e3dd7f4835d7b8dcf3df692d1b9577679277c5cb17->enter($__internal_9662384495040710f61aa0e3dd7f4835d7b8dcf3df692d1b9577679277c5cb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e821d795e67696b07d1e36b030c84fef76470688598daebf074287fd2fc0058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e821d795e67696b07d1e36b030c84fef76470688598daebf074287fd2fc0058->enter($__internal_4e821d795e67696b07d1e36b030c84fef76470688598daebf074287fd2fc0058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e821d795e67696b07d1e36b030c84fef76470688598daebf074287fd2fc0058->leave($__internal_4e821d795e67696b07d1e36b030c84fef76470688598daebf074287fd2fc0058_prof);

        
        $__internal_9662384495040710f61aa0e3dd7f4835d7b8dcf3df692d1b9577679277c5cb17->leave($__internal_9662384495040710f61aa0e3dd7f4835d7b8dcf3df692d1b9577679277c5cb17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e8a8aa519272d82d42ecb006c61d080843e99ef6671e98f996b8ab55476e19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8a8aa519272d82d42ecb006c61d080843e99ef6671e98f996b8ab55476e19b->enter($__internal_7e8a8aa519272d82d42ecb006c61d080843e99ef6671e98f996b8ab55476e19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5e162be4728b60019a96b828c12fa0fdb80c9300a78ac846ff134e51a3cf6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e162be4728b60019a96b828c12fa0fdb80c9300a78ac846ff134e51a3cf6d2->enter($__internal_f5e162be4728b60019a96b828c12fa0fdb80c9300a78ac846ff134e51a3cf6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5e162be4728b60019a96b828c12fa0fdb80c9300a78ac846ff134e51a3cf6d2->leave($__internal_f5e162be4728b60019a96b828c12fa0fdb80c9300a78ac846ff134e51a3cf6d2_prof);

        
        $__internal_7e8a8aa519272d82d42ecb006c61d080843e99ef6671e98f996b8ab55476e19b->leave($__internal_7e8a8aa519272d82d42ecb006c61d080843e99ef6671e98f996b8ab55476e19b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02cb93ca3b60e8fe1c506569bd156443bf141a4518507f6e33980fe2b06b6960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cb93ca3b60e8fe1c506569bd156443bf141a4518507f6e33980fe2b06b6960->enter($__internal_02cb93ca3b60e8fe1c506569bd156443bf141a4518507f6e33980fe2b06b6960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_959928ba0f2e935dacdb4071a8d9e2f2892a34babc8e9e537f0c204b248ba397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959928ba0f2e935dacdb4071a8d9e2f2892a34babc8e9e537f0c204b248ba397->enter($__internal_959928ba0f2e935dacdb4071a8d9e2f2892a34babc8e9e537f0c204b248ba397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_959928ba0f2e935dacdb4071a8d9e2f2892a34babc8e9e537f0c204b248ba397->leave($__internal_959928ba0f2e935dacdb4071a8d9e2f2892a34babc8e9e537f0c204b248ba397_prof);

        
        $__internal_02cb93ca3b60e8fe1c506569bd156443bf141a4518507f6e33980fe2b06b6960->leave($__internal_02cb93ca3b60e8fe1c506569bd156443bf141a4518507f6e33980fe2b06b6960_prof);

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
