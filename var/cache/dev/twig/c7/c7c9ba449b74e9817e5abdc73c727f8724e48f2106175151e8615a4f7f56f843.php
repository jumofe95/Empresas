<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_28e0390647397dc850855c2e15f8b5f03e44bf2bab3365e8d1ccb7939ec2f10c extends Twig_Template
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
        $__internal_12a7c9d385d7e690cc39e3794fd29bbd6eef77506740cf2b01666da01cb75a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a7c9d385d7e690cc39e3794fd29bbd6eef77506740cf2b01666da01cb75a31->enter($__internal_12a7c9d385d7e690cc39e3794fd29bbd6eef77506740cf2b01666da01cb75a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ba325bfaa59b747f577689723ff0d6d56f0b01b9262becbf35fc4c1c6c4cbeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba325bfaa59b747f577689723ff0d6d56f0b01b9262becbf35fc4c1c6c4cbeb9->enter($__internal_ba325bfaa59b747f577689723ff0d6d56f0b01b9262becbf35fc4c1c6c4cbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_12a7c9d385d7e690cc39e3794fd29bbd6eef77506740cf2b01666da01cb75a31->leave($__internal_12a7c9d385d7e690cc39e3794fd29bbd6eef77506740cf2b01666da01cb75a31_prof);

        
        $__internal_ba325bfaa59b747f577689723ff0d6d56f0b01b9262becbf35fc4c1c6c4cbeb9->leave($__internal_ba325bfaa59b747f577689723ff0d6d56f0b01b9262becbf35fc4c1c6c4cbeb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
