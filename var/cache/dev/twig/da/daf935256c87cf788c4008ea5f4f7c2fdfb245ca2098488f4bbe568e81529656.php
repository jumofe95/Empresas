<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3ef180f7cf420af9489c2d5dc041c2e1ceae1ddd3fa89dc4635cf0fabb08ef99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61e1006ef3e4fe144ec2355bc1ab1062d5506d18d1439b6210b337cb12a21f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e1006ef3e4fe144ec2355bc1ab1062d5506d18d1439b6210b337cb12a21f82->enter($__internal_61e1006ef3e4fe144ec2355bc1ab1062d5506d18d1439b6210b337cb12a21f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_24146d46c42b8119c00d7abf4346a867aa0d5ed060f019a555ab7fb1715f0615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24146d46c42b8119c00d7abf4346a867aa0d5ed060f019a555ab7fb1715f0615->enter($__internal_24146d46c42b8119c00d7abf4346a867aa0d5ed060f019a555ab7fb1715f0615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e1006ef3e4fe144ec2355bc1ab1062d5506d18d1439b6210b337cb12a21f82->leave($__internal_61e1006ef3e4fe144ec2355bc1ab1062d5506d18d1439b6210b337cb12a21f82_prof);

        
        $__internal_24146d46c42b8119c00d7abf4346a867aa0d5ed060f019a555ab7fb1715f0615->leave($__internal_24146d46c42b8119c00d7abf4346a867aa0d5ed060f019a555ab7fb1715f0615_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_816bdbcacbf88c135a47fd5cfe77042e09f6a8767b6b64da363b45480a830e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816bdbcacbf88c135a47fd5cfe77042e09f6a8767b6b64da363b45480a830e71->enter($__internal_816bdbcacbf88c135a47fd5cfe77042e09f6a8767b6b64da363b45480a830e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e3c58c8d7a944854d35a35a1d70c51c0f71907a91b7c68c8c4cbff7fc836429e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c58c8d7a944854d35a35a1d70c51c0f71907a91b7c68c8c4cbff7fc836429e->enter($__internal_e3c58c8d7a944854d35a35a1d70c51c0f71907a91b7c68c8c4cbff7fc836429e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e3c58c8d7a944854d35a35a1d70c51c0f71907a91b7c68c8c4cbff7fc836429e->leave($__internal_e3c58c8d7a944854d35a35a1d70c51c0f71907a91b7c68c8c4cbff7fc836429e_prof);

        
        $__internal_816bdbcacbf88c135a47fd5cfe77042e09f6a8767b6b64da363b45480a830e71->leave($__internal_816bdbcacbf88c135a47fd5cfe77042e09f6a8767b6b64da363b45480a830e71_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bbca62eed568418990e950e5c428e35e6293f0baec9c80025e12e4d80138329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbca62eed568418990e950e5c428e35e6293f0baec9c80025e12e4d80138329->enter($__internal_4bbca62eed568418990e950e5c428e35e6293f0baec9c80025e12e4d80138329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c535650d40bc048eaee3a5b723791fabb9105becba36a9d6c50f2ad54009056f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c535650d40bc048eaee3a5b723791fabb9105becba36a9d6c50f2ad54009056f->enter($__internal_c535650d40bc048eaee3a5b723791fabb9105becba36a9d6c50f2ad54009056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c535650d40bc048eaee3a5b723791fabb9105becba36a9d6c50f2ad54009056f->leave($__internal_c535650d40bc048eaee3a5b723791fabb9105becba36a9d6c50f2ad54009056f_prof);

        
        $__internal_4bbca62eed568418990e950e5c428e35e6293f0baec9c80025e12e4d80138329->leave($__internal_4bbca62eed568418990e950e5c428e35e6293f0baec9c80025e12e4d80138329_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
