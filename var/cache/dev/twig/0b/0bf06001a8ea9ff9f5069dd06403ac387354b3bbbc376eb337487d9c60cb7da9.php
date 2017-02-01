<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_765cf7567bd13cb000f0a7606104138743636c1065830633d4ad1d23e480ec9a extends Twig_Template
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
        $__internal_917548238cad1555c3ac1f234bfb99ec1aacc1d698c3925799e882ef049bba0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917548238cad1555c3ac1f234bfb99ec1aacc1d698c3925799e882ef049bba0f->enter($__internal_917548238cad1555c3ac1f234bfb99ec1aacc1d698c3925799e882ef049bba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d52b16e1475a9abe63aa720e05b41b3afa8cef8c0a5b33c201165510fbd20b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52b16e1475a9abe63aa720e05b41b3afa8cef8c0a5b33c201165510fbd20b62->enter($__internal_d52b16e1475a9abe63aa720e05b41b3afa8cef8c0a5b33c201165510fbd20b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_917548238cad1555c3ac1f234bfb99ec1aacc1d698c3925799e882ef049bba0f->leave($__internal_917548238cad1555c3ac1f234bfb99ec1aacc1d698c3925799e882ef049bba0f_prof);

        
        $__internal_d52b16e1475a9abe63aa720e05b41b3afa8cef8c0a5b33c201165510fbd20b62->leave($__internal_d52b16e1475a9abe63aa720e05b41b3afa8cef8c0a5b33c201165510fbd20b62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
