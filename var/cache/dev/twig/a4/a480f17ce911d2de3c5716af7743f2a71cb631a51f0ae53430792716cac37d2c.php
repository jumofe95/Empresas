<?php

/* @Usuario/Default/register.html.twig */
class __TwigTemplate_9cfadf733e000803042e3e377b1aa34d292799b40e70504aee4075c192a167e8 extends Twig_Template
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
        $__internal_ac20aa4a0a2b9036d8b41f993dfc7ff4a982059ac48345358644f2c8da7be314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac20aa4a0a2b9036d8b41f993dfc7ff4a982059ac48345358644f2c8da7be314->enter($__internal_ac20aa4a0a2b9036d8b41f993dfc7ff4a982059ac48345358644f2c8da7be314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuario/Default/register.html.twig"));

        $__internal_0a7973515103c5af67b227147a3392de353f5d0f3482845e27a1936a37c13b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7973515103c5af67b227147a3392de353f5d0f3482845e27a1936a37c13b82->enter($__internal_0a7973515103c5af67b227147a3392de353f5d0f3482845e27a1936a37c13b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuario/Default/register.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Registrate!</button>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ac20aa4a0a2b9036d8b41f993dfc7ff4a982059ac48345358644f2c8da7be314->leave($__internal_ac20aa4a0a2b9036d8b41f993dfc7ff4a982059ac48345358644f2c8da7be314_prof);

        
        $__internal_0a7973515103c5af67b227147a3392de353f5d0f3482845e27a1936a37c13b82->leave($__internal_0a7973515103c5af67b227147a3392de353f5d0f3482845e27a1936a37c13b82_prof);

    }

    public function getTemplateName()
    {
        return "@Usuario/Default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

    <button type=\"submit\">Registrate!</button>
{{ form_end(form) }}
", "@Usuario/Default/register.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
