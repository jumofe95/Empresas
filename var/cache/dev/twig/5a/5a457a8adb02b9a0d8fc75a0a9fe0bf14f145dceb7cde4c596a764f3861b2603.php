<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92f62d2846d202a26fb29024b582cd18584bc0b31caa89bf64db66d776a71f16 extends Twig_Template
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
        $__internal_622e2d9caa589d489fd3ddbdc3bd506090b8e1e34c19e86efba9e5158848f3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622e2d9caa589d489fd3ddbdc3bd506090b8e1e34c19e86efba9e5158848f3ad->enter($__internal_622e2d9caa589d489fd3ddbdc3bd506090b8e1e34c19e86efba9e5158848f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_31e142c3ba129c9c7ccf4138d72417bd9392e2960694e5e64d704fea849b9cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e142c3ba129c9c7ccf4138d72417bd9392e2960694e5e64d704fea849b9cf9->enter($__internal_31e142c3ba129c9c7ccf4138d72417bd9392e2960694e5e64d704fea849b9cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_622e2d9caa589d489fd3ddbdc3bd506090b8e1e34c19e86efba9e5158848f3ad->leave($__internal_622e2d9caa589d489fd3ddbdc3bd506090b8e1e34c19e86efba9e5158848f3ad_prof);

        
        $__internal_31e142c3ba129c9c7ccf4138d72417bd9392e2960694e5e64d704fea849b9cf9->leave($__internal_31e142c3ba129c9c7ccf4138d72417bd9392e2960694e5e64d704fea849b9cf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
