<?php

/* ConfigBundle:Default:new_config.html.twig */
class __TwigTemplate_28a8f230123cbd1f4fbd65b76ca489592d319e45c278ffc4284f708b39d246a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ConfigBundle:Default:new_config.html.twig", 1);
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
        $__internal_89654da3874437fb0f9e576cc8d532721414b992af7d483bf20a2a96882629d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89654da3874437fb0f9e576cc8d532721414b992af7d483bf20a2a96882629d9->enter($__internal_89654da3874437fb0f9e576cc8d532721414b992af7d483bf20a2a96882629d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:new_config.html.twig"));

        $__internal_ec2e12f05ff29461be6e513f3812adbaf3ebe36a613f07186340a3fbadd38113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2e12f05ff29461be6e513f3812adbaf3ebe36a613f07186340a3fbadd38113->enter($__internal_ec2e12f05ff29461be6e513f3812adbaf3ebe36a613f07186340a3fbadd38113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:new_config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89654da3874437fb0f9e576cc8d532721414b992af7d483bf20a2a96882629d9->leave($__internal_89654da3874437fb0f9e576cc8d532721414b992af7d483bf20a2a96882629d9_prof);

        
        $__internal_ec2e12f05ff29461be6e513f3812adbaf3ebe36a613f07186340a3fbadd38113->leave($__internal_ec2e12f05ff29461be6e513f3812adbaf3ebe36a613f07186340a3fbadd38113_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a325627512927f7bd1fd8d69eeb2cd7e817926a1fbae46c075b5197aee653341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a325627512927f7bd1fd8d69eeb2cd7e817926a1fbae46c075b5197aee653341->enter($__internal_a325627512927f7bd1fd8d69eeb2cd7e817926a1fbae46c075b5197aee653341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a28b80f46ae680e86b17208bd6cdd476ff693fd4f8a7aab873099aaf091cc26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28b80f46ae680e86b17208bd6cdd476ff693fd4f8a7aab873099aaf091cc26e->enter($__internal_a28b80f46ae680e86b17208bd6cdd476ff693fd4f8a7aab873099aaf091cc26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Nueva config.</h2>
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_a28b80f46ae680e86b17208bd6cdd476ff693fd4f8a7aab873099aaf091cc26e->leave($__internal_a28b80f46ae680e86b17208bd6cdd476ff693fd4f8a7aab873099aaf091cc26e_prof);

        
        $__internal_a325627512927f7bd1fd8d69eeb2cd7e817926a1fbae46c075b5197aee653341->leave($__internal_a325627512927f7bd1fd8d69eeb2cd7e817926a1fbae46c075b5197aee653341_prof);

    }

    public function getTemplateName()
    {
        return "ConfigBundle:Default:new_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>Nueva config.</h2>
\t{{form(form)}}

{% endblock %}
", "ConfigBundle:Default:new_config.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ConfigBundle/Resources/views/Default/new_config.html.twig");
    }
}
