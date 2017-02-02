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
        $__internal_d55f19d60beb291c6f1e16ce0e2e4650de5e974ddbba41e33db1dd0678256df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55f19d60beb291c6f1e16ce0e2e4650de5e974ddbba41e33db1dd0678256df3->enter($__internal_d55f19d60beb291c6f1e16ce0e2e4650de5e974ddbba41e33db1dd0678256df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_46bd27bb00b37d97c94bc0137f14c07dbc4f7e9f07065db818c6952958422e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bd27bb00b37d97c94bc0137f14c07dbc4f7e9f07065db818c6952958422e92->enter($__internal_46bd27bb00b37d97c94bc0137f14c07dbc4f7e9f07065db818c6952958422e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55f19d60beb291c6f1e16ce0e2e4650de5e974ddbba41e33db1dd0678256df3->leave($__internal_d55f19d60beb291c6f1e16ce0e2e4650de5e974ddbba41e33db1dd0678256df3_prof);

        
        $__internal_46bd27bb00b37d97c94bc0137f14c07dbc4f7e9f07065db818c6952958422e92->leave($__internal_46bd27bb00b37d97c94bc0137f14c07dbc4f7e9f07065db818c6952958422e92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f44640815323b46d3958b959b5b5ac58a716fdfdbd40d4a3c0599165c95e7f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44640815323b46d3958b959b5b5ac58a716fdfdbd40d4a3c0599165c95e7f4a->enter($__internal_f44640815323b46d3958b959b5b5ac58a716fdfdbd40d4a3c0599165c95e7f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b371d143394a479c71c668c6d7f1b1780e5703c57f5ffe0f7ff93d468307f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b371d143394a479c71c668c6d7f1b1780e5703c57f5ffe0f7ff93d468307f74->enter($__internal_7b371d143394a479c71c668c6d7f1b1780e5703c57f5ffe0f7ff93d468307f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b371d143394a479c71c668c6d7f1b1780e5703c57f5ffe0f7ff93d468307f74->leave($__internal_7b371d143394a479c71c668c6d7f1b1780e5703c57f5ffe0f7ff93d468307f74_prof);

        
        $__internal_f44640815323b46d3958b959b5b5ac58a716fdfdbd40d4a3c0599165c95e7f4a->leave($__internal_f44640815323b46d3958b959b5b5ac58a716fdfdbd40d4a3c0599165c95e7f4a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_530b762e826dacb90b91522a09a87a5b9f5b99fa0f2f8c1e36268dbc38378e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530b762e826dacb90b91522a09a87a5b9f5b99fa0f2f8c1e36268dbc38378e2b->enter($__internal_530b762e826dacb90b91522a09a87a5b9f5b99fa0f2f8c1e36268dbc38378e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24312fa787a89340572f82c6e06a2c394ae6253e3b504f3269a52265412d437e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24312fa787a89340572f82c6e06a2c394ae6253e3b504f3269a52265412d437e->enter($__internal_24312fa787a89340572f82c6e06a2c394ae6253e3b504f3269a52265412d437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24312fa787a89340572f82c6e06a2c394ae6253e3b504f3269a52265412d437e->leave($__internal_24312fa787a89340572f82c6e06a2c394ae6253e3b504f3269a52265412d437e_prof);

        
        $__internal_530b762e826dacb90b91522a09a87a5b9f5b99fa0f2f8c1e36268dbc38378e2b->leave($__internal_530b762e826dacb90b91522a09a87a5b9f5b99fa0f2f8c1e36268dbc38378e2b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_72338ab2279ab01f87a309199d4032c41743835077713b80b8857f417fe5cb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72338ab2279ab01f87a309199d4032c41743835077713b80b8857f417fe5cb68->enter($__internal_72338ab2279ab01f87a309199d4032c41743835077713b80b8857f417fe5cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aeccd0a8d874628e11bc2d5704c286258fd5d0df5c1f0b5417d420bc147cd4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeccd0a8d874628e11bc2d5704c286258fd5d0df5c1f0b5417d420bc147cd4b0->enter($__internal_aeccd0a8d874628e11bc2d5704c286258fd5d0df5c1f0b5417d420bc147cd4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aeccd0a8d874628e11bc2d5704c286258fd5d0df5c1f0b5417d420bc147cd4b0->leave($__internal_aeccd0a8d874628e11bc2d5704c286258fd5d0df5c1f0b5417d420bc147cd4b0_prof);

        
        $__internal_72338ab2279ab01f87a309199d4032c41743835077713b80b8857f417fe5cb68->leave($__internal_72338ab2279ab01f87a309199d4032c41743835077713b80b8857f417fe5cb68_prof);

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
