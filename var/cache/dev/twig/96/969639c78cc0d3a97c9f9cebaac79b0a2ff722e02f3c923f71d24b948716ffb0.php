<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81c1a5d396cec14460da97f1994277ab6492e5dca7b9ba87c8ce5a01022073b2 extends Twig_Template
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
        $__internal_bc4be852f9beb4291af2b4838c54a4524f95f324a204b84908c00d9fde91ffdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4be852f9beb4291af2b4838c54a4524f95f324a204b84908c00d9fde91ffdb->enter($__internal_bc4be852f9beb4291af2b4838c54a4524f95f324a204b84908c00d9fde91ffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5e87763ef53091f6c03d09171fb8f3dd6398011a7bc271d758ccf32ffbeed06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e87763ef53091f6c03d09171fb8f3dd6398011a7bc271d758ccf32ffbeed06b->enter($__internal_5e87763ef53091f6c03d09171fb8f3dd6398011a7bc271d758ccf32ffbeed06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bc4be852f9beb4291af2b4838c54a4524f95f324a204b84908c00d9fde91ffdb->leave($__internal_bc4be852f9beb4291af2b4838c54a4524f95f324a204b84908c00d9fde91ffdb_prof);

        
        $__internal_5e87763ef53091f6c03d09171fb8f3dd6398011a7bc271d758ccf32ffbeed06b->leave($__internal_5e87763ef53091f6c03d09171fb8f3dd6398011a7bc271d758ccf32ffbeed06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
