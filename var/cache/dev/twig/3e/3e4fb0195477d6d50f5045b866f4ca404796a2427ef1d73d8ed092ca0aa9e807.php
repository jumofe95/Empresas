<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba4ae6009d75e433a538813d37b22ae62c1aadf7f2453b7ba4419ab24c13d67f extends Twig_Template
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
        $__internal_48ced881b9087eea1dbdb786cc250139b199bd362853f71cb4d9907435e54d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ced881b9087eea1dbdb786cc250139b199bd362853f71cb4d9907435e54d8f->enter($__internal_48ced881b9087eea1dbdb786cc250139b199bd362853f71cb4d9907435e54d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3a921815bece2b68d71d3e535e0afdaece24216ad33be2a47b7e1bd3ee0d86f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a921815bece2b68d71d3e535e0afdaece24216ad33be2a47b7e1bd3ee0d86f1->enter($__internal_3a921815bece2b68d71d3e535e0afdaece24216ad33be2a47b7e1bd3ee0d86f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_48ced881b9087eea1dbdb786cc250139b199bd362853f71cb4d9907435e54d8f->leave($__internal_48ced881b9087eea1dbdb786cc250139b199bd362853f71cb4d9907435e54d8f_prof);

        
        $__internal_3a921815bece2b68d71d3e535e0afdaece24216ad33be2a47b7e1bd3ee0d86f1->leave($__internal_3a921815bece2b68d71d3e535e0afdaece24216ad33be2a47b7e1bd3ee0d86f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
