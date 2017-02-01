<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e75baf544d14334debdb9011590cd4ff2eb394362b774ee9d4827ef13ed32c9d extends Twig_Template
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
        $__internal_a54995cc74a9f3a4f48d896ae0b4d814eeaded1e649f0334ff3da5b25858355b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54995cc74a9f3a4f48d896ae0b4d814eeaded1e649f0334ff3da5b25858355b->enter($__internal_a54995cc74a9f3a4f48d896ae0b4d814eeaded1e649f0334ff3da5b25858355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a7d2c67c1aba62d3fc549872ee0aa69a321a439d59e43606982aad596c552558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d2c67c1aba62d3fc549872ee0aa69a321a439d59e43606982aad596c552558->enter($__internal_a7d2c67c1aba62d3fc549872ee0aa69a321a439d59e43606982aad596c552558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a54995cc74a9f3a4f48d896ae0b4d814eeaded1e649f0334ff3da5b25858355b->leave($__internal_a54995cc74a9f3a4f48d896ae0b4d814eeaded1e649f0334ff3da5b25858355b_prof);

        
        $__internal_a7d2c67c1aba62d3fc549872ee0aa69a321a439d59e43606982aad596c552558->leave($__internal_a7d2c67c1aba62d3fc549872ee0aa69a321a439d59e43606982aad596c552558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
