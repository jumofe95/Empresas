<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deaf84387804f983f536b2148d97baa1f821895251e92db3f06215e7a1a3d1cc extends Twig_Template
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
        $__internal_44f5e11bf467d3b213e86492a4b00ab566f9b8eb216c37c9631c14da2a787f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f5e11bf467d3b213e86492a4b00ab566f9b8eb216c37c9631c14da2a787f42->enter($__internal_44f5e11bf467d3b213e86492a4b00ab566f9b8eb216c37c9631c14da2a787f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_13cdac67f9bc0ccd4baabf424705950db0eb60e39c3fcb15f5e53f5eb7e43919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cdac67f9bc0ccd4baabf424705950db0eb60e39c3fcb15f5e53f5eb7e43919->enter($__internal_13cdac67f9bc0ccd4baabf424705950db0eb60e39c3fcb15f5e53f5eb7e43919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44f5e11bf467d3b213e86492a4b00ab566f9b8eb216c37c9631c14da2a787f42->leave($__internal_44f5e11bf467d3b213e86492a4b00ab566f9b8eb216c37c9631c14da2a787f42_prof);

        
        $__internal_13cdac67f9bc0ccd4baabf424705950db0eb60e39c3fcb15f5e53f5eb7e43919->leave($__internal_13cdac67f9bc0ccd4baabf424705950db0eb60e39c3fcb15f5e53f5eb7e43919_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_49e59bcc8eb04c4ccd9e0b666846068ade125d2b792da40ad555ac598929612e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e59bcc8eb04c4ccd9e0b666846068ade125d2b792da40ad555ac598929612e->enter($__internal_49e59bcc8eb04c4ccd9e0b666846068ade125d2b792da40ad555ac598929612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e59fe4120fa5fc658357b5a0ea970142f89f6df7db52f03d5ea1ead77975c27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59fe4120fa5fc658357b5a0ea970142f89f6df7db52f03d5ea1ead77975c27d->enter($__internal_e59fe4120fa5fc658357b5a0ea970142f89f6df7db52f03d5ea1ead77975c27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e59fe4120fa5fc658357b5a0ea970142f89f6df7db52f03d5ea1ead77975c27d->leave($__internal_e59fe4120fa5fc658357b5a0ea970142f89f6df7db52f03d5ea1ead77975c27d_prof);

        
        $__internal_49e59bcc8eb04c4ccd9e0b666846068ade125d2b792da40ad555ac598929612e->leave($__internal_49e59bcc8eb04c4ccd9e0b666846068ade125d2b792da40ad555ac598929612e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
