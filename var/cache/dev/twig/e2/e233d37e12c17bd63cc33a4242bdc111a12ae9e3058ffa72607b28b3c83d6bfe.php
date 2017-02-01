<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_693fee8af28bb2a8e79ddf822451ae62aaae63cf959d57014fa41c4b6bed4655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693fee8af28bb2a8e79ddf822451ae62aaae63cf959d57014fa41c4b6bed4655->enter($__internal_693fee8af28bb2a8e79ddf822451ae62aaae63cf959d57014fa41c4b6bed4655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3087f7dc422e640e78a0e86e7a482430e053ac588cce38aa8f9f1d3e1556fc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3087f7dc422e640e78a0e86e7a482430e053ac588cce38aa8f9f1d3e1556fc73->enter($__internal_3087f7dc422e640e78a0e86e7a482430e053ac588cce38aa8f9f1d3e1556fc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_693fee8af28bb2a8e79ddf822451ae62aaae63cf959d57014fa41c4b6bed4655->leave($__internal_693fee8af28bb2a8e79ddf822451ae62aaae63cf959d57014fa41c4b6bed4655_prof);

        
        $__internal_3087f7dc422e640e78a0e86e7a482430e053ac588cce38aa8f9f1d3e1556fc73->leave($__internal_3087f7dc422e640e78a0e86e7a482430e053ac588cce38aa8f9f1d3e1556fc73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
