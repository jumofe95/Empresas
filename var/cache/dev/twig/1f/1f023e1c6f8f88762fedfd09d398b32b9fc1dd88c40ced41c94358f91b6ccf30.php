<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98a9a4396d6e89c7b6d1714fa615b21d3f45d75d12f624041c54d4d2d30fe328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77076cdcc4efa54b6fc23ad6b29b9fa24aab0bc61efa5d46875b72e1dddad0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77076cdcc4efa54b6fc23ad6b29b9fa24aab0bc61efa5d46875b72e1dddad0f8->enter($__internal_77076cdcc4efa54b6fc23ad6b29b9fa24aab0bc61efa5d46875b72e1dddad0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_cbabfc92c21ec7bdff1043df3790aef39623869d680338a57a6b18344488a1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbabfc92c21ec7bdff1043df3790aef39623869d680338a57a6b18344488a1a1->enter($__internal_cbabfc92c21ec7bdff1043df3790aef39623869d680338a57a6b18344488a1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_77076cdcc4efa54b6fc23ad6b29b9fa24aab0bc61efa5d46875b72e1dddad0f8->leave($__internal_77076cdcc4efa54b6fc23ad6b29b9fa24aab0bc61efa5d46875b72e1dddad0f8_prof);

        
        $__internal_cbabfc92c21ec7bdff1043df3790aef39623869d680338a57a6b18344488a1a1->leave($__internal_cbabfc92c21ec7bdff1043df3790aef39623869d680338a57a6b18344488a1a1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a13c9f570c4df731d35795480660ee11f3ac8a441e3b4d238b06c6afd72452f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a13c9f570c4df731d35795480660ee11f3ac8a441e3b4d238b06c6afd72452f->enter($__internal_0a13c9f570c4df731d35795480660ee11f3ac8a441e3b4d238b06c6afd72452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24eb32bb76fcc78c5a657eb73a20a18ee6af75e119b758c9c816a658ec76c409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24eb32bb76fcc78c5a657eb73a20a18ee6af75e119b758c9c816a658ec76c409->enter($__internal_24eb32bb76fcc78c5a657eb73a20a18ee6af75e119b758c9c816a658ec76c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_24eb32bb76fcc78c5a657eb73a20a18ee6af75e119b758c9c816a658ec76c409->leave($__internal_24eb32bb76fcc78c5a657eb73a20a18ee6af75e119b758c9c816a658ec76c409_prof);

        
        $__internal_0a13c9f570c4df731d35795480660ee11f3ac8a441e3b4d238b06c6afd72452f->leave($__internal_0a13c9f570c4df731d35795480660ee11f3ac8a441e3b4d238b06c6afd72452f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
