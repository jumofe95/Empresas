<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4282c0681d7ef4120c21069aa40e83270e47718c1f8474729ac22961b0b079f8 extends Twig_Template
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
        $__internal_a618b8d45ec64362616722a7f4e4c731bd46554533895f5fc41b9b9aba7b3c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a618b8d45ec64362616722a7f4e4c731bd46554533895f5fc41b9b9aba7b3c1f->enter($__internal_a618b8d45ec64362616722a7f4e4c731bd46554533895f5fc41b9b9aba7b3c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6ffcf82dd24ba84bc546971abf5c37285e0545a651080aae29e772cf916f1db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffcf82dd24ba84bc546971abf5c37285e0545a651080aae29e772cf916f1db7->enter($__internal_6ffcf82dd24ba84bc546971abf5c37285e0545a651080aae29e772cf916f1db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a618b8d45ec64362616722a7f4e4c731bd46554533895f5fc41b9b9aba7b3c1f->leave($__internal_a618b8d45ec64362616722a7f4e4c731bd46554533895f5fc41b9b9aba7b3c1f_prof);

        
        $__internal_6ffcf82dd24ba84bc546971abf5c37285e0545a651080aae29e772cf916f1db7->leave($__internal_6ffcf82dd24ba84bc546971abf5c37285e0545a651080aae29e772cf916f1db7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
