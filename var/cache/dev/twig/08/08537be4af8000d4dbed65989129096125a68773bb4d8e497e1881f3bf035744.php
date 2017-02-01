<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8a4d41bb74f452199bf28de936c450a734ad83d53d445b4d2685954a776bba10 extends Twig_Template
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
        $__internal_d187c84efbd33e3d0324e8a7c51f50bdedabb80e75b3ecc90abd5783811e65ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d187c84efbd33e3d0324e8a7c51f50bdedabb80e75b3ecc90abd5783811e65ab->enter($__internal_d187c84efbd33e3d0324e8a7c51f50bdedabb80e75b3ecc90abd5783811e65ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e9b8d50f716b4070bc5853acf16e517c5f9d4cac8ac4ecb0909d9c35df100e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b8d50f716b4070bc5853acf16e517c5f9d4cac8ac4ecb0909d9c35df100e82->enter($__internal_e9b8d50f716b4070bc5853acf16e517c5f9d4cac8ac4ecb0909d9c35df100e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d187c84efbd33e3d0324e8a7c51f50bdedabb80e75b3ecc90abd5783811e65ab->leave($__internal_d187c84efbd33e3d0324e8a7c51f50bdedabb80e75b3ecc90abd5783811e65ab_prof);

        
        $__internal_e9b8d50f716b4070bc5853acf16e517c5f9d4cac8ac4ecb0909d9c35df100e82->leave($__internal_e9b8d50f716b4070bc5853acf16e517c5f9d4cac8ac4ecb0909d9c35df100e82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
