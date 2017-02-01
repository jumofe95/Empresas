<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1a13ef417360f111dc8823e38a6fb3985a1c1f47a2ad650e4fb0b8666c609571 extends Twig_Template
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
        $__internal_bad853563af0d052adf6ccecd3ea6759966e909839a55fc70daec4760e2d9ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad853563af0d052adf6ccecd3ea6759966e909839a55fc70daec4760e2d9ea0->enter($__internal_bad853563af0d052adf6ccecd3ea6759966e909839a55fc70daec4760e2d9ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a1a8fbd58709a7801c31718a972f5ca32692a096eec19b5061d45b23760b1a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a8fbd58709a7801c31718a972f5ca32692a096eec19b5061d45b23760b1a54->enter($__internal_a1a8fbd58709a7801c31718a972f5ca32692a096eec19b5061d45b23760b1a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bad853563af0d052adf6ccecd3ea6759966e909839a55fc70daec4760e2d9ea0->leave($__internal_bad853563af0d052adf6ccecd3ea6759966e909839a55fc70daec4760e2d9ea0_prof);

        
        $__internal_a1a8fbd58709a7801c31718a972f5ca32692a096eec19b5061d45b23760b1a54->leave($__internal_a1a8fbd58709a7801c31718a972f5ca32692a096eec19b5061d45b23760b1a54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
