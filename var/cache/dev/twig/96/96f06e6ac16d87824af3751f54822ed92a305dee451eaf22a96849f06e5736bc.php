<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_482170560928885b13281afc77b75879daee511d68bdfa1948a5fad4b86674c8 extends Twig_Template
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
        $__internal_867b9eb10ceeeac823f0a37455df9141a8eef1223cc68a966708039ee8b59a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867b9eb10ceeeac823f0a37455df9141a8eef1223cc68a966708039ee8b59a6f->enter($__internal_867b9eb10ceeeac823f0a37455df9141a8eef1223cc68a966708039ee8b59a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_7f218d0af7129241367f552ebaeda990e6f30c36f227a2f4137c30355a8ca379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f218d0af7129241367f552ebaeda990e6f30c36f227a2f4137c30355a8ca379->enter($__internal_7f218d0af7129241367f552ebaeda990e6f30c36f227a2f4137c30355a8ca379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_867b9eb10ceeeac823f0a37455df9141a8eef1223cc68a966708039ee8b59a6f->leave($__internal_867b9eb10ceeeac823f0a37455df9141a8eef1223cc68a966708039ee8b59a6f_prof);

        
        $__internal_7f218d0af7129241367f552ebaeda990e6f30c36f227a2f4137c30355a8ca379->leave($__internal_7f218d0af7129241367f552ebaeda990e6f30c36f227a2f4137c30355a8ca379_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
