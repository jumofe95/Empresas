<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_e5454b25489899fb51d13e97618b9f45bf33e3f42c541df5f545d1e63d364a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5454b25489899fb51d13e97618b9f45bf33e3f42c541df5f545d1e63d364a4e->enter($__internal_e5454b25489899fb51d13e97618b9f45bf33e3f42c541df5f545d1e63d364a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cb4714481ca163ef2d5855ac3ab68dc4333c2298d2651bfa47ed8e9749f9827a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4714481ca163ef2d5855ac3ab68dc4333c2298d2651bfa47ed8e9749f9827a->enter($__internal_cb4714481ca163ef2d5855ac3ab68dc4333c2298d2651bfa47ed8e9749f9827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5454b25489899fb51d13e97618b9f45bf33e3f42c541df5f545d1e63d364a4e->leave($__internal_e5454b25489899fb51d13e97618b9f45bf33e3f42c541df5f545d1e63d364a4e_prof);

        
        $__internal_cb4714481ca163ef2d5855ac3ab68dc4333c2298d2651bfa47ed8e9749f9827a->leave($__internal_cb4714481ca163ef2d5855ac3ab68dc4333c2298d2651bfa47ed8e9749f9827a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
