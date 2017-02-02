<?php

/* ConfigBundle:Default:index.html.twig */
class __TwigTemplate_8bb14225b38d0e263be20a7a5d2064ef67a520a6fbfef47593efdecec4dfd734 extends Twig_Template
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
        $__internal_af223053fb30a11805b7eb9fece8186c2d3adb64378c8681e743cd32a6ca8cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af223053fb30a11805b7eb9fece8186c2d3adb64378c8681e743cd32a6ca8cfa->enter($__internal_af223053fb30a11805b7eb9fece8186c2d3adb64378c8681e743cd32a6ca8cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:index.html.twig"));

        $__internal_1c3ed3010b4e05bc13dd5cbd3a109ae58593323420429459dac689df0a9b547f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3ed3010b4e05bc13dd5cbd3a109ae58593323420429459dac689df0a9b547f->enter($__internal_1c3ed3010b4e05bc13dd5cbd3a109ae58593323420429459dac689df0a9b547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_af223053fb30a11805b7eb9fece8186c2d3adb64378c8681e743cd32a6ca8cfa->leave($__internal_af223053fb30a11805b7eb9fece8186c2d3adb64378c8681e743cd32a6ca8cfa_prof);

        
        $__internal_1c3ed3010b4e05bc13dd5cbd3a109ae58593323420429459dac689df0a9b547f->leave($__internal_1c3ed3010b4e05bc13dd5cbd3a109ae58593323420429459dac689df0a9b547f_prof);

    }

    public function getTemplateName()
    {
        return "ConfigBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ConfigBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ConfigBundle/Resources/views/Default/index.html.twig");
    }
}
