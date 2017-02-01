<?php

/* @Empresa/Default/index.html.twig */
class __TwigTemplate_8e560618e13b3398280d61fc39730235f5de420959d310e15dd123478223a8e6 extends Twig_Template
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
        $__internal_35ef71fcab7af3181d652c0857773cb19142595771361b8fff658e8e36c72589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ef71fcab7af3181d652c0857773cb19142595771361b8fff658e8e36c72589->enter($__internal_35ef71fcab7af3181d652c0857773cb19142595771361b8fff658e8e36c72589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/index.html.twig"));

        $__internal_02834d157204df5ddc6a2567608c35bb41a7eda408357d9b9711e0582d2e10ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02834d157204df5ddc6a2567608c35bb41a7eda408357d9b9711e0582d2e10ad->enter($__internal_02834d157204df5ddc6a2567608c35bb41a7eda408357d9b9711e0582d2e10ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_35ef71fcab7af3181d652c0857773cb19142595771361b8fff658e8e36c72589->leave($__internal_35ef71fcab7af3181d652c0857773cb19142595771361b8fff658e8e36c72589_prof);

        
        $__internal_02834d157204df5ddc6a2567608c35bb41a7eda408357d9b9711e0582d2e10ad->leave($__internal_02834d157204df5ddc6a2567608c35bb41a7eda408357d9b9711e0582d2e10ad_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/index.html.twig";
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
", "@Empresa/Default/index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
