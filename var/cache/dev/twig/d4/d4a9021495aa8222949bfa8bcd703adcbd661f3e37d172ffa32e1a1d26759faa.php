<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_795558c04f2475d324ae81e2a4536ce31e91af175d5d3d6965120566b23d60b9 extends Twig_Template
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
        $__internal_cbcaf6a9393566a28c8a817c5ee570e2940687c24017a9f6716a0469daa96017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcaf6a9393566a28c8a817c5ee570e2940687c24017a9f6716a0469daa96017->enter($__internal_cbcaf6a9393566a28c8a817c5ee570e2940687c24017a9f6716a0469daa96017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_802c8fc60d445bceca8b470a8bc35f14996c534338fba45c2973774ba477cbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c8fc60d445bceca8b470a8bc35f14996c534338fba45c2973774ba477cbd3->enter($__internal_802c8fc60d445bceca8b470a8bc35f14996c534338fba45c2973774ba477cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cbcaf6a9393566a28c8a817c5ee570e2940687c24017a9f6716a0469daa96017->leave($__internal_cbcaf6a9393566a28c8a817c5ee570e2940687c24017a9f6716a0469daa96017_prof);

        
        $__internal_802c8fc60d445bceca8b470a8bc35f14996c534338fba45c2973774ba477cbd3->leave($__internal_802c8fc60d445bceca8b470a8bc35f14996c534338fba45c2973774ba477cbd3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
