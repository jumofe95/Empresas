<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_231257d9426afdf8548b03ab6b3040d726d4e0f02bcbd26c8b9ef5d6663b4d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_64a79c1d8e355f0a08b95e469b9a72a0cbbc19747999da32aaf15e89808bc9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a79c1d8e355f0a08b95e469b9a72a0cbbc19747999da32aaf15e89808bc9b4->enter($__internal_64a79c1d8e355f0a08b95e469b9a72a0cbbc19747999da32aaf15e89808bc9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_22066b70d63cb68065cb5f573bb603a52a3d12f6b6689befabc3b7039f9688e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22066b70d63cb68065cb5f573bb603a52a3d12f6b6689befabc3b7039f9688e5->enter($__internal_22066b70d63cb68065cb5f573bb603a52a3d12f6b6689befabc3b7039f9688e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a79c1d8e355f0a08b95e469b9a72a0cbbc19747999da32aaf15e89808bc9b4->leave($__internal_64a79c1d8e355f0a08b95e469b9a72a0cbbc19747999da32aaf15e89808bc9b4_prof);

        
        $__internal_22066b70d63cb68065cb5f573bb603a52a3d12f6b6689befabc3b7039f9688e5->leave($__internal_22066b70d63cb68065cb5f573bb603a52a3d12f6b6689befabc3b7039f9688e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_718c49648dc5510cee23b1864987cc85546843878651ed83c6749245b980ecd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718c49648dc5510cee23b1864987cc85546843878651ed83c6749245b980ecd7->enter($__internal_718c49648dc5510cee23b1864987cc85546843878651ed83c6749245b980ecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_701ed7eba320d951d9a4396f019a1a4bd973d1862f725dc88f4692378cde0443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701ed7eba320d951d9a4396f019a1a4bd973d1862f725dc88f4692378cde0443->enter($__internal_701ed7eba320d951d9a4396f019a1a4bd973d1862f725dc88f4692378cde0443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_701ed7eba320d951d9a4396f019a1a4bd973d1862f725dc88f4692378cde0443->leave($__internal_701ed7eba320d951d9a4396f019a1a4bd973d1862f725dc88f4692378cde0443_prof);

        
        $__internal_718c49648dc5510cee23b1864987cc85546843878651ed83c6749245b980ecd7->leave($__internal_718c49648dc5510cee23b1864987cc85546843878651ed83c6749245b980ecd7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0385de22627c219d98d8d99df7a761a3695199517f4738530ab047f5face01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0385de22627c219d98d8d99df7a761a3695199517f4738530ab047f5face01b->enter($__internal_f0385de22627c219d98d8d99df7a761a3695199517f4738530ab047f5face01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8938ab9527cbb570f8508459262ef693b1963534fdb9b160338ac2749571ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8938ab9527cbb570f8508459262ef693b1963534fdb9b160338ac2749571ce6->enter($__internal_c8938ab9527cbb570f8508459262ef693b1963534fdb9b160338ac2749571ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8938ab9527cbb570f8508459262ef693b1963534fdb9b160338ac2749571ce6->leave($__internal_c8938ab9527cbb570f8508459262ef693b1963534fdb9b160338ac2749571ce6_prof);

        
        $__internal_f0385de22627c219d98d8d99df7a761a3695199517f4738530ab047f5face01b->leave($__internal_f0385de22627c219d98d8d99df7a761a3695199517f4738530ab047f5face01b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6d9c453c76dd99adac90787e466f3717f42c07ddb827d5ed3b0930d2c1cfe1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d9c453c76dd99adac90787e466f3717f42c07ddb827d5ed3b0930d2c1cfe1a->enter($__internal_f6d9c453c76dd99adac90787e466f3717f42c07ddb827d5ed3b0930d2c1cfe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ac320e091c482fe34d71fb10e8b4396950582a27b500c946b81e2cf22b61580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac320e091c482fe34d71fb10e8b4396950582a27b500c946b81e2cf22b61580->enter($__internal_7ac320e091c482fe34d71fb10e8b4396950582a27b500c946b81e2cf22b61580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7ac320e091c482fe34d71fb10e8b4396950582a27b500c946b81e2cf22b61580->leave($__internal_7ac320e091c482fe34d71fb10e8b4396950582a27b500c946b81e2cf22b61580_prof);

        
        $__internal_f6d9c453c76dd99adac90787e466f3717f42c07ddb827d5ed3b0930d2c1cfe1a->leave($__internal_f6d9c453c76dd99adac90787e466f3717f42c07ddb827d5ed3b0930d2c1cfe1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
