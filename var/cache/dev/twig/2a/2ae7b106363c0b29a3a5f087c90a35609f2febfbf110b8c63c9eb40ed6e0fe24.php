<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_71fad4b8f8f0a704383a073e7530ad0ab79a4eda6e833cddba57eb6d5755386c extends Twig_Template
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
        $__internal_b5946ae151df43b3a70b398f043a40df535ef45ca9dc9b465c9d0e77a9fd96d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5946ae151df43b3a70b398f043a40df535ef45ca9dc9b465c9d0e77a9fd96d7->enter($__internal_b5946ae151df43b3a70b398f043a40df535ef45ca9dc9b465c9d0e77a9fd96d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f78e6ee317b90800d35a9133d1fb6b044ab19fa7bebb1048076227f85461b127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78e6ee317b90800d35a9133d1fb6b044ab19fa7bebb1048076227f85461b127->enter($__internal_f78e6ee317b90800d35a9133d1fb6b044ab19fa7bebb1048076227f85461b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b5946ae151df43b3a70b398f043a40df535ef45ca9dc9b465c9d0e77a9fd96d7->leave($__internal_b5946ae151df43b3a70b398f043a40df535ef45ca9dc9b465c9d0e77a9fd96d7_prof);

        
        $__internal_f78e6ee317b90800d35a9133d1fb6b044ab19fa7bebb1048076227f85461b127->leave($__internal_f78e6ee317b90800d35a9133d1fb6b044ab19fa7bebb1048076227f85461b127_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
