<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2ebb90987bdd5b574901d6edc93fb47590ae08b0d8ea4947a9c936d191a84f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_69f9439ed3aff79e36f95e8d25327adccab80aa9e834320ec2e52b35856b5948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f9439ed3aff79e36f95e8d25327adccab80aa9e834320ec2e52b35856b5948->enter($__internal_69f9439ed3aff79e36f95e8d25327adccab80aa9e834320ec2e52b35856b5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9dd53198388d4357b361c1f115cf2b0b11cf4c04c2e26fcd18c5045496c6eebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd53198388d4357b361c1f115cf2b0b11cf4c04c2e26fcd18c5045496c6eebe->enter($__internal_9dd53198388d4357b361c1f115cf2b0b11cf4c04c2e26fcd18c5045496c6eebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f9439ed3aff79e36f95e8d25327adccab80aa9e834320ec2e52b35856b5948->leave($__internal_69f9439ed3aff79e36f95e8d25327adccab80aa9e834320ec2e52b35856b5948_prof);

        
        $__internal_9dd53198388d4357b361c1f115cf2b0b11cf4c04c2e26fcd18c5045496c6eebe->leave($__internal_9dd53198388d4357b361c1f115cf2b0b11cf4c04c2e26fcd18c5045496c6eebe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c83789ce29b59060fd6cbefe3b296348935e6eaa415f73d60be9e3c7fbc3306c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83789ce29b59060fd6cbefe3b296348935e6eaa415f73d60be9e3c7fbc3306c->enter($__internal_c83789ce29b59060fd6cbefe3b296348935e6eaa415f73d60be9e3c7fbc3306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_593146e59270ea355b7b076a4e74ee054ab8ecc5948583fa4e16c2975458d4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593146e59270ea355b7b076a4e74ee054ab8ecc5948583fa4e16c2975458d4ef->enter($__internal_593146e59270ea355b7b076a4e74ee054ab8ecc5948583fa4e16c2975458d4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_593146e59270ea355b7b076a4e74ee054ab8ecc5948583fa4e16c2975458d4ef->leave($__internal_593146e59270ea355b7b076a4e74ee054ab8ecc5948583fa4e16c2975458d4ef_prof);

        
        $__internal_c83789ce29b59060fd6cbefe3b296348935e6eaa415f73d60be9e3c7fbc3306c->leave($__internal_c83789ce29b59060fd6cbefe3b296348935e6eaa415f73d60be9e3c7fbc3306c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9022a10d05509a6cb7afc9e38c87e7d030f3cbf5f8bae2303fce44b64e7cbddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9022a10d05509a6cb7afc9e38c87e7d030f3cbf5f8bae2303fce44b64e7cbddc->enter($__internal_9022a10d05509a6cb7afc9e38c87e7d030f3cbf5f8bae2303fce44b64e7cbddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72a5c2e2db9ce8732227b5cda941ecf93e449ed0a23b505bc53abfb6281461cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a5c2e2db9ce8732227b5cda941ecf93e449ed0a23b505bc53abfb6281461cf->enter($__internal_72a5c2e2db9ce8732227b5cda941ecf93e449ed0a23b505bc53abfb6281461cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_72a5c2e2db9ce8732227b5cda941ecf93e449ed0a23b505bc53abfb6281461cf->leave($__internal_72a5c2e2db9ce8732227b5cda941ecf93e449ed0a23b505bc53abfb6281461cf_prof);

        
        $__internal_9022a10d05509a6cb7afc9e38c87e7d030f3cbf5f8bae2303fce44b64e7cbddc->leave($__internal_9022a10d05509a6cb7afc9e38c87e7d030f3cbf5f8bae2303fce44b64e7cbddc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
