<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58117fd9f6d2d7dc38774a342f0865639da2fab6efeb424eac1b69b8e8b293d4 extends Twig_Template
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
        $__internal_e5f30c4083a8a1b1b71e197ff89af21828531f371dfe5da386d37bc1b52f3845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f30c4083a8a1b1b71e197ff89af21828531f371dfe5da386d37bc1b52f3845->enter($__internal_e5f30c4083a8a1b1b71e197ff89af21828531f371dfe5da386d37bc1b52f3845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_681279c13f77658ceb298db7003f4c00e7d951340ce11f899a493f322dc282f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681279c13f77658ceb298db7003f4c00e7d951340ce11f899a493f322dc282f3->enter($__internal_681279c13f77658ceb298db7003f4c00e7d951340ce11f899a493f322dc282f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e5f30c4083a8a1b1b71e197ff89af21828531f371dfe5da386d37bc1b52f3845->leave($__internal_e5f30c4083a8a1b1b71e197ff89af21828531f371dfe5da386d37bc1b52f3845_prof);

        
        $__internal_681279c13f77658ceb298db7003f4c00e7d951340ce11f899a493f322dc282f3->leave($__internal_681279c13f77658ceb298db7003f4c00e7d951340ce11f899a493f322dc282f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
