<?php

/* EmpresaBundle:Default:empresas_new.html.twig */
class __TwigTemplate_af79ab4f774ce8e080eed8b0f986e29731905eb3de6620a8e3862cd89aaa2069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmpresaBundle:Default:empresas_new.html.twig", 1);
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
        $__internal_10252d31cd51db736782acd9376c87d7e2eb95f9aa93efdd6d3816740201b545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10252d31cd51db736782acd9376c87d7e2eb95f9aa93efdd6d3816740201b545->enter($__internal_10252d31cd51db736782acd9376c87d7e2eb95f9aa93efdd6d3816740201b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_new.html.twig"));

        $__internal_adc4f6a005ad72f34cfbccae35d6e6a2b1e372a3c5dc6f9026d651ff393dea5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc4f6a005ad72f34cfbccae35d6e6a2b1e372a3c5dc6f9026d651ff393dea5f->enter($__internal_adc4f6a005ad72f34cfbccae35d6e6a2b1e372a3c5dc6f9026d651ff393dea5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10252d31cd51db736782acd9376c87d7e2eb95f9aa93efdd6d3816740201b545->leave($__internal_10252d31cd51db736782acd9376c87d7e2eb95f9aa93efdd6d3816740201b545_prof);

        
        $__internal_adc4f6a005ad72f34cfbccae35d6e6a2b1e372a3c5dc6f9026d651ff393dea5f->leave($__internal_adc4f6a005ad72f34cfbccae35d6e6a2b1e372a3c5dc6f9026d651ff393dea5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eaea6416319d54287f0b207ba5b3586642487e8d415d82f1f3bcf52a5f55ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaea6416319d54287f0b207ba5b3586642487e8d415d82f1f3bcf52a5f55ae6->enter($__internal_4eaea6416319d54287f0b207ba5b3586642487e8d415d82f1f3bcf52a5f55ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97af6d8f3310e0c0690eafa20fd4154db0e1be7a4e904201a6ff5efca15c58f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97af6d8f3310e0c0690eafa20fd4154db0e1be7a4e904201a6ff5efca15c58f2->enter($__internal_97af6d8f3310e0c0690eafa20fd4154db0e1be7a4e904201a6ff5efca15c58f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Nueva empresa.</h2>
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_97af6d8f3310e0c0690eafa20fd4154db0e1be7a4e904201a6ff5efca15c58f2->leave($__internal_97af6d8f3310e0c0690eafa20fd4154db0e1be7a4e904201a6ff5efca15c58f2_prof);

        
        $__internal_4eaea6416319d54287f0b207ba5b3586642487e8d415d82f1f3bcf52a5f55ae6->leave($__internal_4eaea6416319d54287f0b207ba5b3586642487e8d415d82f1f3bcf52a5f55ae6_prof);

    }

    public function getTemplateName()
    {
        return "EmpresaBundle:Default:empresas_new.html.twig";
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

<h2>Nueva empresa.</h2>
\t{{form(form)}}

{% endblock %}", "EmpresaBundle:Default:empresas_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle/Resources/views/Default/empresas_new.html.twig");
    }
}
