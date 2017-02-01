<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6ffc55f5e5ab492aea9c083170f4ed2519c4147c59ead5d5c4d69d385a3b98cc extends Twig_Template
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
        $__internal_dd68a1cda48a6804b1518c0a740a1d62f5bc3c175c47eb947d5f3725d801414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd68a1cda48a6804b1518c0a740a1d62f5bc3c175c47eb947d5f3725d801414d->enter($__internal_dd68a1cda48a6804b1518c0a740a1d62f5bc3c175c47eb947d5f3725d801414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_02b5d1770256ca74f64fb7956aabeee8391d80bbc03538a628fc6e680b03952f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b5d1770256ca74f64fb7956aabeee8391d80bbc03538a628fc6e680b03952f->enter($__internal_02b5d1770256ca74f64fb7956aabeee8391d80bbc03538a628fc6e680b03952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dd68a1cda48a6804b1518c0a740a1d62f5bc3c175c47eb947d5f3725d801414d->leave($__internal_dd68a1cda48a6804b1518c0a740a1d62f5bc3c175c47eb947d5f3725d801414d_prof);

        
        $__internal_02b5d1770256ca74f64fb7956aabeee8391d80bbc03538a628fc6e680b03952f->leave($__internal_02b5d1770256ca74f64fb7956aabeee8391d80bbc03538a628fc6e680b03952f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
