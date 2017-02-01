<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb589a6dd291b61b795e1b32ab4fa249a6e33604ea936d84ea7ccdf0b2a6ec59 extends Twig_Template
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
        $__internal_3c6a4103ede4aa7450a552c1374be030e6d599327439d41e3a5fe4bb5a02cea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6a4103ede4aa7450a552c1374be030e6d599327439d41e3a5fe4bb5a02cea8->enter($__internal_3c6a4103ede4aa7450a552c1374be030e6d599327439d41e3a5fe4bb5a02cea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_dba7fffb3d26b363fc39dac2ed6e71ae21b82afc6ab0b9539d6ac6963a6cd282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba7fffb3d26b363fc39dac2ed6e71ae21b82afc6ab0b9539d6ac6963a6cd282->enter($__internal_dba7fffb3d26b363fc39dac2ed6e71ae21b82afc6ab0b9539d6ac6963a6cd282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3c6a4103ede4aa7450a552c1374be030e6d599327439d41e3a5fe4bb5a02cea8->leave($__internal_3c6a4103ede4aa7450a552c1374be030e6d599327439d41e3a5fe4bb5a02cea8_prof);

        
        $__internal_dba7fffb3d26b363fc39dac2ed6e71ae21b82afc6ab0b9539d6ac6963a6cd282->leave($__internal_dba7fffb3d26b363fc39dac2ed6e71ae21b82afc6ab0b9539d6ac6963a6cd282_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
