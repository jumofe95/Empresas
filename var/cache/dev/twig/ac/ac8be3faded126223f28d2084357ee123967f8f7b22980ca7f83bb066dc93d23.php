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
        $__internal_8b9949a113ef67f60ccfe75277d20e2071a96128db287a08109ad0625931229c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9949a113ef67f60ccfe75277d20e2071a96128db287a08109ad0625931229c->enter($__internal_8b9949a113ef67f60ccfe75277d20e2071a96128db287a08109ad0625931229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4287cdaca8604b66f177990b7367e07e57c35eb47f367445b19605a4b789a6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4287cdaca8604b66f177990b7367e07e57c35eb47f367445b19605a4b789a6eb->enter($__internal_4287cdaca8604b66f177990b7367e07e57c35eb47f367445b19605a4b789a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9949a113ef67f60ccfe75277d20e2071a96128db287a08109ad0625931229c->leave($__internal_8b9949a113ef67f60ccfe75277d20e2071a96128db287a08109ad0625931229c_prof);

        
        $__internal_4287cdaca8604b66f177990b7367e07e57c35eb47f367445b19605a4b789a6eb->leave($__internal_4287cdaca8604b66f177990b7367e07e57c35eb47f367445b19605a4b789a6eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d4f95db88c7642b36d9c3288b8954b7a935422ad8327089f1092aeba7bcb53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4f95db88c7642b36d9c3288b8954b7a935422ad8327089f1092aeba7bcb53d->enter($__internal_8d4f95db88c7642b36d9c3288b8954b7a935422ad8327089f1092aeba7bcb53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d491488611edb91c84b095c7e05002c53d967dffe09b8515237ca58e7dd34d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d491488611edb91c84b095c7e05002c53d967dffe09b8515237ca58e7dd34d1f->enter($__internal_d491488611edb91c84b095c7e05002c53d967dffe09b8515237ca58e7dd34d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d491488611edb91c84b095c7e05002c53d967dffe09b8515237ca58e7dd34d1f->leave($__internal_d491488611edb91c84b095c7e05002c53d967dffe09b8515237ca58e7dd34d1f_prof);

        
        $__internal_8d4f95db88c7642b36d9c3288b8954b7a935422ad8327089f1092aeba7bcb53d->leave($__internal_8d4f95db88c7642b36d9c3288b8954b7a935422ad8327089f1092aeba7bcb53d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12d90dd5cd7eda27336f2d24b56a2439ebf655022d4de2566fed410af9a32c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d90dd5cd7eda27336f2d24b56a2439ebf655022d4de2566fed410af9a32c67->enter($__internal_12d90dd5cd7eda27336f2d24b56a2439ebf655022d4de2566fed410af9a32c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e3ba6b73d6cc3743360466fc46eb539ffe8bb58f6a9a962b3e3127a216f1658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3ba6b73d6cc3743360466fc46eb539ffe8bb58f6a9a962b3e3127a216f1658->enter($__internal_3e3ba6b73d6cc3743360466fc46eb539ffe8bb58f6a9a962b3e3127a216f1658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e3ba6b73d6cc3743360466fc46eb539ffe8bb58f6a9a962b3e3127a216f1658->leave($__internal_3e3ba6b73d6cc3743360466fc46eb539ffe8bb58f6a9a962b3e3127a216f1658_prof);

        
        $__internal_12d90dd5cd7eda27336f2d24b56a2439ebf655022d4de2566fed410af9a32c67->leave($__internal_12d90dd5cd7eda27336f2d24b56a2439ebf655022d4de2566fed410af9a32c67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85731755d383f5ad5b5f96f64344216fdd8e2572383087ef4c667c1dfdc84cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85731755d383f5ad5b5f96f64344216fdd8e2572383087ef4c667c1dfdc84cf8->enter($__internal_85731755d383f5ad5b5f96f64344216fdd8e2572383087ef4c667c1dfdc84cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31a9e9c7e942f97e39bebb3fa53bc0893a8eef87a4ad3f5742591241c438994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a9e9c7e942f97e39bebb3fa53bc0893a8eef87a4ad3f5742591241c438994c->enter($__internal_31a9e9c7e942f97e39bebb3fa53bc0893a8eef87a4ad3f5742591241c438994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31a9e9c7e942f97e39bebb3fa53bc0893a8eef87a4ad3f5742591241c438994c->leave($__internal_31a9e9c7e942f97e39bebb3fa53bc0893a8eef87a4ad3f5742591241c438994c_prof);

        
        $__internal_85731755d383f5ad5b5f96f64344216fdd8e2572383087ef4c667c1dfdc84cf8->leave($__internal_85731755d383f5ad5b5f96f64344216fdd8e2572383087ef4c667c1dfdc84cf8_prof);

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
