<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
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
        $__internal_d93832897de555d36fab2b6ad5bd80c0f675ad23433250f71b41f751437ad3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93832897de555d36fab2b6ad5bd80c0f675ad23433250f71b41f751437ad3a6->enter($__internal_d93832897de555d36fab2b6ad5bd80c0f675ad23433250f71b41f751437ad3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2ab44c03c4a5c4e99817693592898a79ab61750b5b6cf07296e3ac8ac4b5e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab44c03c4a5c4e99817693592898a79ab61750b5b6cf07296e3ac8ac4b5e35e->enter($__internal_2ab44c03c4a5c4e99817693592898a79ab61750b5b6cf07296e3ac8ac4b5e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d93832897de555d36fab2b6ad5bd80c0f675ad23433250f71b41f751437ad3a6->leave($__internal_d93832897de555d36fab2b6ad5bd80c0f675ad23433250f71b41f751437ad3a6_prof);

        
        $__internal_2ab44c03c4a5c4e99817693592898a79ab61750b5b6cf07296e3ac8ac4b5e35e->leave($__internal_2ab44c03c4a5c4e99817693592898a79ab61750b5b6cf07296e3ac8ac4b5e35e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
