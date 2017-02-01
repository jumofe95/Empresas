<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_81494e1519c8eb68a477a6627cef51320fcef019083c1897a7c0aaf9e2116c29 extends Twig_Template
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
        $__internal_a905fdb3d53f51ccbd029e0dd442a9a03a8bf9e89597e53ba279b35ec0f66904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a905fdb3d53f51ccbd029e0dd442a9a03a8bf9e89597e53ba279b35ec0f66904->enter($__internal_a905fdb3d53f51ccbd029e0dd442a9a03a8bf9e89597e53ba279b35ec0f66904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7bf763c50cacebc0230738e9977c297ea76eb5786c8cf079af8c47eb7afe0e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf763c50cacebc0230738e9977c297ea76eb5786c8cf079af8c47eb7afe0e06->enter($__internal_7bf763c50cacebc0230738e9977c297ea76eb5786c8cf079af8c47eb7afe0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a905fdb3d53f51ccbd029e0dd442a9a03a8bf9e89597e53ba279b35ec0f66904->leave($__internal_a905fdb3d53f51ccbd029e0dd442a9a03a8bf9e89597e53ba279b35ec0f66904_prof);

        
        $__internal_7bf763c50cacebc0230738e9977c297ea76eb5786c8cf079af8c47eb7afe0e06->leave($__internal_7bf763c50cacebc0230738e9977c297ea76eb5786c8cf079af8c47eb7afe0e06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
