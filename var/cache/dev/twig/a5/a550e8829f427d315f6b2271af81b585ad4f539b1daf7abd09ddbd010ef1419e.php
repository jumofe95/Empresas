<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7da94c75a485bd5d8225de6e30d7d8888732ffc8123f20fbe3f06471ca4eb03e extends Twig_Template
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
        $__internal_fd44e7386c17d8778586d21d3310bb653e5af3912e07798b0fc38ff6d6721483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd44e7386c17d8778586d21d3310bb653e5af3912e07798b0fc38ff6d6721483->enter($__internal_fd44e7386c17d8778586d21d3310bb653e5af3912e07798b0fc38ff6d6721483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bef90a7cc55f2648089610db17db8ff199a1b1788edc3cddea03a65742992f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef90a7cc55f2648089610db17db8ff199a1b1788edc3cddea03a65742992f1f->enter($__internal_bef90a7cc55f2648089610db17db8ff199a1b1788edc3cddea03a65742992f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fd44e7386c17d8778586d21d3310bb653e5af3912e07798b0fc38ff6d6721483->leave($__internal_fd44e7386c17d8778586d21d3310bb653e5af3912e07798b0fc38ff6d6721483_prof);

        
        $__internal_bef90a7cc55f2648089610db17db8ff199a1b1788edc3cddea03a65742992f1f->leave($__internal_bef90a7cc55f2648089610db17db8ff199a1b1788edc3cddea03a65742992f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
