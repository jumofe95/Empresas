<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e94e33310ae95e5c63f6ffc34d64de60e01a04381f8bbda4ddefed83ddd73229 extends Twig_Template
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
        $__internal_19ebaf9eee898d00d1d2e6e64572ad9047af605772c9cb16d9b22b24a0bd3a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ebaf9eee898d00d1d2e6e64572ad9047af605772c9cb16d9b22b24a0bd3a64->enter($__internal_19ebaf9eee898d00d1d2e6e64572ad9047af605772c9cb16d9b22b24a0bd3a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2483c6e3f16d66d918722ff67c8bef5acb9645918faf6e9a25735fa8fa573698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2483c6e3f16d66d918722ff67c8bef5acb9645918faf6e9a25735fa8fa573698->enter($__internal_2483c6e3f16d66d918722ff67c8bef5acb9645918faf6e9a25735fa8fa573698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_19ebaf9eee898d00d1d2e6e64572ad9047af605772c9cb16d9b22b24a0bd3a64->leave($__internal_19ebaf9eee898d00d1d2e6e64572ad9047af605772c9cb16d9b22b24a0bd3a64_prof);

        
        $__internal_2483c6e3f16d66d918722ff67c8bef5acb9645918faf6e9a25735fa8fa573698->leave($__internal_2483c6e3f16d66d918722ff67c8bef5acb9645918faf6e9a25735fa8fa573698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
