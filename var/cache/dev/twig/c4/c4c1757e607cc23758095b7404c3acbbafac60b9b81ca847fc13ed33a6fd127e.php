<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2802bf873dfcf0b291c23335fc1509bada7d758941c7223e860f128766bc7f78 extends Twig_Template
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
        $__internal_56842434b541301d67952031355396db0978b426e46da08d20c1d1be4c1ec31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56842434b541301d67952031355396db0978b426e46da08d20c1d1be4c1ec31a->enter($__internal_56842434b541301d67952031355396db0978b426e46da08d20c1d1be4c1ec31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4850d712329c98d11d38e507cca380ca2e7a3219022d66f62c940c1f88398a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4850d712329c98d11d38e507cca380ca2e7a3219022d66f62c940c1f88398a6a->enter($__internal_4850d712329c98d11d38e507cca380ca2e7a3219022d66f62c940c1f88398a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_56842434b541301d67952031355396db0978b426e46da08d20c1d1be4c1ec31a->leave($__internal_56842434b541301d67952031355396db0978b426e46da08d20c1d1be4c1ec31a_prof);

        
        $__internal_4850d712329c98d11d38e507cca380ca2e7a3219022d66f62c940c1f88398a6a->leave($__internal_4850d712329c98d11d38e507cca380ca2e7a3219022d66f62c940c1f88398a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
