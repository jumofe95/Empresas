<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_d6dbc2967bf812155ba214957038462228405176792539e029e00ce572b3b3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dbc2967bf812155ba214957038462228405176792539e029e00ce572b3b3ae->enter($__internal_d6dbc2967bf812155ba214957038462228405176792539e029e00ce572b3b3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_38d92d15c30157ff5dd1db00a4426f98ce0a7d3eb1b821eed2f195f68926c4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d92d15c30157ff5dd1db00a4426f98ce0a7d3eb1b821eed2f195f68926c4cc->enter($__internal_38d92d15c30157ff5dd1db00a4426f98ce0a7d3eb1b821eed2f195f68926c4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d6dbc2967bf812155ba214957038462228405176792539e029e00ce572b3b3ae->leave($__internal_d6dbc2967bf812155ba214957038462228405176792539e029e00ce572b3b3ae_prof);

        
        $__internal_38d92d15c30157ff5dd1db00a4426f98ce0a7d3eb1b821eed2f195f68926c4cc->leave($__internal_38d92d15c30157ff5dd1db00a4426f98ce0a7d3eb1b821eed2f195f68926c4cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
