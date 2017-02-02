<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_d937567b01c707bbc62f88c71d9dd6a1031a56fb81315d9a8ed1b67471d8d738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UsuarioBundle:Default:usuarios.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4bb15f28072ebd604cd4c8708045191578d5754c9fc010be29f6e3014ea7174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bb15f28072ebd604cd4c8708045191578d5754c9fc010be29f6e3014ea7174->enter($__internal_a4bb15f28072ebd604cd4c8708045191578d5754c9fc010be29f6e3014ea7174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $__internal_7faf13f00f3e22989be563b1755cf0c325ccfcc070c37ba2224370de5f70acf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faf13f00f3e22989be563b1755cf0c325ccfcc070c37ba2224370de5f70acf2->enter($__internal_7faf13f00f3e22989be563b1755cf0c325ccfcc070c37ba2224370de5f70acf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bb15f28072ebd604cd4c8708045191578d5754c9fc010be29f6e3014ea7174->leave($__internal_a4bb15f28072ebd604cd4c8708045191578d5754c9fc010be29f6e3014ea7174_prof);

        
        $__internal_7faf13f00f3e22989be563b1755cf0c325ccfcc070c37ba2224370de5f70acf2->leave($__internal_7faf13f00f3e22989be563b1755cf0c325ccfcc070c37ba2224370de5f70acf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e8be25b5e7249f7492cfdd903bcb53df3487ea07e08acb3330eaf82e06b1a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8be25b5e7249f7492cfdd903bcb53df3487ea07e08acb3330eaf82e06b1a0e->enter($__internal_7e8be25b5e7249f7492cfdd903bcb53df3487ea07e08acb3330eaf82e06b1a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1aa851cdc2b77f7e8226821c46691e5be483120b258dde1d5766589fdb05b888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa851cdc2b77f7e8226821c46691e5be483120b258dde1d5766589fdb05b888->enter($__internal_1aa851cdc2b77f7e8226821c46691e5be483120b258dde1d5766589fdb05b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
<h1>¡Hola ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["my_user"]) ? $context["my_user"] : $this->getContext($context, "my_user")), "html", null, true);
        echo " !</h1>
<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>


";
        
        $__internal_1aa851cdc2b77f7e8226821c46691e5be483120b258dde1d5766589fdb05b888->leave($__internal_1aa851cdc2b77f7e8226821c46691e5be483120b258dde1d5766589fdb05b888_prof);

        
        $__internal_7e8be25b5e7249f7492cfdd903bcb53df3487ea07e08acb3330eaf82e06b1a0e->leave($__internal_7e8be25b5e7249f7492cfdd903bcb53df3487ea07e08acb3330eaf82e06b1a0e_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %} 
<h1>¡Hola {{my_user}} !</h1>
<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>


{% endblock %}
", "UsuarioBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\usuarios.html.twig");
    }
}
