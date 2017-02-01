<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_15533c2e36f04ddcbc2a788d622de547cc7615b5906c124dd148b1cb0a18be36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15533c2e36f04ddcbc2a788d622de547cc7615b5906c124dd148b1cb0a18be36->enter($__internal_15533c2e36f04ddcbc2a788d622de547cc7615b5906c124dd148b1cb0a18be36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_86e273ae8e6b562629c3a71498fd32187181475f07db45177e5210f6f45bbeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e273ae8e6b562629c3a71498fd32187181475f07db45177e5210f6f45bbeef->enter($__internal_86e273ae8e6b562629c3a71498fd32187181475f07db45177e5210f6f45bbeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_15533c2e36f04ddcbc2a788d622de547cc7615b5906c124dd148b1cb0a18be36->leave($__internal_15533c2e36f04ddcbc2a788d622de547cc7615b5906c124dd148b1cb0a18be36_prof);

        
        $__internal_86e273ae8e6b562629c3a71498fd32187181475f07db45177e5210f6f45bbeef->leave($__internal_86e273ae8e6b562629c3a71498fd32187181475f07db45177e5210f6f45bbeef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
