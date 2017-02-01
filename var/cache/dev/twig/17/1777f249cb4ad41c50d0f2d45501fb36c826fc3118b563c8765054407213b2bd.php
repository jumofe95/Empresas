<?php

/* EmpresaBundle:Default:index.html.twig */
class __TwigTemplate_784847af76a2c02b33e29906af68ddcbda6f0ec6ff7e9eca5607d1ef7ef927cc extends Twig_Template
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
        $__internal_1fa0405d6f494ef6635aa180cec9d43d83963943c0b351bd6821c26a94a3a014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa0405d6f494ef6635aa180cec9d43d83963943c0b351bd6821c26a94a3a014->enter($__internal_1fa0405d6f494ef6635aa180cec9d43d83963943c0b351bd6821c26a94a3a014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:index.html.twig"));

        $__internal_4285037de72460f20f4d14e7f428496c93b5a46d9e6dc443718b7adb99fe547a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4285037de72460f20f4d14e7f428496c93b5a46d9e6dc443718b7adb99fe547a->enter($__internal_4285037de72460f20f4d14e7f428496c93b5a46d9e6dc443718b7adb99fe547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1fa0405d6f494ef6635aa180cec9d43d83963943c0b351bd6821c26a94a3a014->leave($__internal_1fa0405d6f494ef6635aa180cec9d43d83963943c0b351bd6821c26a94a3a014_prof);

        
        $__internal_4285037de72460f20f4d14e7f428496c93b5a46d9e6dc443718b7adb99fe547a->leave($__internal_4285037de72460f20f4d14e7f428496c93b5a46d9e6dc443718b7adb99fe547a_prof);

    }

    public function getTemplateName()
    {
        return "EmpresaBundle:Default:index.html.twig";
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
", "EmpresaBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle/Resources/views/Default/index.html.twig");
    }
}
