<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1aee3d308f7f6ca7d8482ed2c462a9db0ff7fe9a9cecf0c98a137ce5d5e8db7f extends Twig_Template
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
        $__internal_fb01a2e6a33535b14e8b706eaaedc4f79d149789bb054c6ef52822a86b499be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb01a2e6a33535b14e8b706eaaedc4f79d149789bb054c6ef52822a86b499be7->enter($__internal_fb01a2e6a33535b14e8b706eaaedc4f79d149789bb054c6ef52822a86b499be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d7935cc4ac1007e4925f6f9efb039fbf099c5fecc006560a7d911975a6bfc917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7935cc4ac1007e4925f6f9efb039fbf099c5fecc006560a7d911975a6bfc917->enter($__internal_d7935cc4ac1007e4925f6f9efb039fbf099c5fecc006560a7d911975a6bfc917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fb01a2e6a33535b14e8b706eaaedc4f79d149789bb054c6ef52822a86b499be7->leave($__internal_fb01a2e6a33535b14e8b706eaaedc4f79d149789bb054c6ef52822a86b499be7_prof);

        
        $__internal_d7935cc4ac1007e4925f6f9efb039fbf099c5fecc006560a7d911975a6bfc917->leave($__internal_d7935cc4ac1007e4925f6f9efb039fbf099c5fecc006560a7d911975a6bfc917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
