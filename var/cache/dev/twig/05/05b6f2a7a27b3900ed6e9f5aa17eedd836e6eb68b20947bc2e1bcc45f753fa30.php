<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_548bcaa49779f00f944e90208efd9609ffbc26896996f67ee7c056a88554c014 extends Twig_Template
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
        $__internal_0475860e4e66650fc469c845e0d542ab8e7c9dd04a1d5010852668423f26ed16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0475860e4e66650fc469c845e0d542ab8e7c9dd04a1d5010852668423f26ed16->enter($__internal_0475860e4e66650fc469c845e0d542ab8e7c9dd04a1d5010852668423f26ed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ff1d5a8ba07f99626a09a964cbdfddb063cb9efa150d5e84faff8725539db485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1d5a8ba07f99626a09a964cbdfddb063cb9efa150d5e84faff8725539db485->enter($__internal_ff1d5a8ba07f99626a09a964cbdfddb063cb9efa150d5e84faff8725539db485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0475860e4e66650fc469c845e0d542ab8e7c9dd04a1d5010852668423f26ed16->leave($__internal_0475860e4e66650fc469c845e0d542ab8e7c9dd04a1d5010852668423f26ed16_prof);

        
        $__internal_ff1d5a8ba07f99626a09a964cbdfddb063cb9efa150d5e84faff8725539db485->leave($__internal_ff1d5a8ba07f99626a09a964cbdfddb063cb9efa150d5e84faff8725539db485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
