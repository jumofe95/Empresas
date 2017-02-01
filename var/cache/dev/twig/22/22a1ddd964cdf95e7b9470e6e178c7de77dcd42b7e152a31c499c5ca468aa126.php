<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_bfa475d46c7f138f49dafadff0a57f46febcda67852965ae647fa98195b6e785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa475d46c7f138f49dafadff0a57f46febcda67852965ae647fa98195b6e785->enter($__internal_bfa475d46c7f138f49dafadff0a57f46febcda67852965ae647fa98195b6e785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1919ab752ccd36d365ef5d35136e9e86b184515899e03430f051041deb3a2add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1919ab752ccd36d365ef5d35136e9e86b184515899e03430f051041deb3a2add->enter($__internal_1919ab752ccd36d365ef5d35136e9e86b184515899e03430f051041deb3a2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bfa475d46c7f138f49dafadff0a57f46febcda67852965ae647fa98195b6e785->leave($__internal_bfa475d46c7f138f49dafadff0a57f46febcda67852965ae647fa98195b6e785_prof);

        
        $__internal_1919ab752ccd36d365ef5d35136e9e86b184515899e03430f051041deb3a2add->leave($__internal_1919ab752ccd36d365ef5d35136e9e86b184515899e03430f051041deb3a2add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
