<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4c25867ae994dde043dcc7dc49915e209732854cb1e3ae320ecf6074ece3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4c25867ae994dde043dcc7dc49915e209732854cb1e3ae320ecf6074ece3c1->enter($__internal_ea4c25867ae994dde043dcc7dc49915e209732854cb1e3ae320ecf6074ece3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_689dd30b868a1ac8f2c0d2011b1743b5fd37ce0aa7bb8ac687078fa6cdf1fd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689dd30b868a1ac8f2c0d2011b1743b5fd37ce0aa7bb8ac687078fa6cdf1fd45->enter($__internal_689dd30b868a1ac8f2c0d2011b1743b5fd37ce0aa7bb8ac687078fa6cdf1fd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4c25867ae994dde043dcc7dc49915e209732854cb1e3ae320ecf6074ece3c1->leave($__internal_ea4c25867ae994dde043dcc7dc49915e209732854cb1e3ae320ecf6074ece3c1_prof);

        
        $__internal_689dd30b868a1ac8f2c0d2011b1743b5fd37ce0aa7bb8ac687078fa6cdf1fd45->leave($__internal_689dd30b868a1ac8f2c0d2011b1743b5fd37ce0aa7bb8ac687078fa6cdf1fd45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68087bdb7951a81554053341b649934c3a4113f23594151653f571e300163c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68087bdb7951a81554053341b649934c3a4113f23594151653f571e300163c76->enter($__internal_68087bdb7951a81554053341b649934c3a4113f23594151653f571e300163c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb9a5fef4d1cfc7b5402f1529b82c71a29942f6b154d6057ff607e4971774814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9a5fef4d1cfc7b5402f1529b82c71a29942f6b154d6057ff607e4971774814->enter($__internal_bb9a5fef4d1cfc7b5402f1529b82c71a29942f6b154d6057ff607e4971774814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_bb9a5fef4d1cfc7b5402f1529b82c71a29942f6b154d6057ff607e4971774814->leave($__internal_bb9a5fef4d1cfc7b5402f1529b82c71a29942f6b154d6057ff607e4971774814_prof);

        
        $__internal_68087bdb7951a81554053341b649934c3a4113f23594151653f571e300163c76->leave($__internal_68087bdb7951a81554053341b649934c3a4113f23594151653f571e300163c76_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_520f593d852d0546e52f30d8b3d85512e9a21666d39e16b2607429ed18b31dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520f593d852d0546e52f30d8b3d85512e9a21666d39e16b2607429ed18b31dbe->enter($__internal_520f593d852d0546e52f30d8b3d85512e9a21666d39e16b2607429ed18b31dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de24b49cdb4d3560f2063886615c509b69ce04491f437655c912ec8a1ee163de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de24b49cdb4d3560f2063886615c509b69ce04491f437655c912ec8a1ee163de->enter($__internal_de24b49cdb4d3560f2063886615c509b69ce04491f437655c912ec8a1ee163de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de24b49cdb4d3560f2063886615c509b69ce04491f437655c912ec8a1ee163de->leave($__internal_de24b49cdb4d3560f2063886615c509b69ce04491f437655c912ec8a1ee163de_prof);

        
        $__internal_520f593d852d0546e52f30d8b3d85512e9a21666d39e16b2607429ed18b31dbe->leave($__internal_520f593d852d0546e52f30d8b3d85512e9a21666d39e16b2607429ed18b31dbe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c334ce4c00f0aab28ed1b28f4a2ca5070957e5e4775a6e9bdb57ff43dcafcb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c334ce4c00f0aab28ed1b28f4a2ca5070957e5e4775a6e9bdb57ff43dcafcb01->enter($__internal_c334ce4c00f0aab28ed1b28f4a2ca5070957e5e4775a6e9bdb57ff43dcafcb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d9e99952b486d0de76cbaadc0b92c57b4307496aecd54d20418bf4e57b96dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9e99952b486d0de76cbaadc0b92c57b4307496aecd54d20418bf4e57b96dc1->enter($__internal_2d9e99952b486d0de76cbaadc0b92c57b4307496aecd54d20418bf4e57b96dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2d9e99952b486d0de76cbaadc0b92c57b4307496aecd54d20418bf4e57b96dc1->leave($__internal_2d9e99952b486d0de76cbaadc0b92c57b4307496aecd54d20418bf4e57b96dc1_prof);

        
        $__internal_c334ce4c00f0aab28ed1b28f4a2ca5070957e5e4775a6e9bdb57ff43dcafcb01->leave($__internal_c334ce4c00f0aab28ed1b28f4a2ca5070957e5e4775a6e9bdb57ff43dcafcb01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
