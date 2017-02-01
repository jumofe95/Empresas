<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a149910c3a5b9c243e3d07b05a0011bd45eaed32abc77585b56e2073879d4930 extends Twig_Template
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
        $__internal_af1e4784461d0e1d7bc5e7589cf9eb7cbf5eb85e13ced41e01180ee340286a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1e4784461d0e1d7bc5e7589cf9eb7cbf5eb85e13ced41e01180ee340286a3d->enter($__internal_af1e4784461d0e1d7bc5e7589cf9eb7cbf5eb85e13ced41e01180ee340286a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0eee48f898b07bb699ffb8e7525e1970c36c125fd39d2189ded5b83e4e41257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eee48f898b07bb699ffb8e7525e1970c36c125fd39d2189ded5b83e4e41257b->enter($__internal_0eee48f898b07bb699ffb8e7525e1970c36c125fd39d2189ded5b83e4e41257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_af1e4784461d0e1d7bc5e7589cf9eb7cbf5eb85e13ced41e01180ee340286a3d->leave($__internal_af1e4784461d0e1d7bc5e7589cf9eb7cbf5eb85e13ced41e01180ee340286a3d_prof);

        
        $__internal_0eee48f898b07bb699ffb8e7525e1970c36c125fd39d2189ded5b83e4e41257b->leave($__internal_0eee48f898b07bb699ffb8e7525e1970c36c125fd39d2189ded5b83e4e41257b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
