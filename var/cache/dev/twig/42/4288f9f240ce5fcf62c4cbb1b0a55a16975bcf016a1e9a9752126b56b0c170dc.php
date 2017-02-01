<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_03274af8a9e96f23d916079a8ac134a8f15a47810aba0b941a8ad36cc3f98afa extends Twig_Template
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
        $__internal_be5dd0b4c8f457c28e5e052bd144fbc05551325de29f4f74f2c6461a22fee312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5dd0b4c8f457c28e5e052bd144fbc05551325de29f4f74f2c6461a22fee312->enter($__internal_be5dd0b4c8f457c28e5e052bd144fbc05551325de29f4f74f2c6461a22fee312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_f4f520041b6766a0ed1eaa7b89d0f7a8eb3ca5923beedebbd310049be8c211fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f520041b6766a0ed1eaa7b89d0f7a8eb3ca5923beedebbd310049be8c211fd->enter($__internal_f4f520041b6766a0ed1eaa7b89d0f7a8eb3ca5923beedebbd310049be8c211fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_be5dd0b4c8f457c28e5e052bd144fbc05551325de29f4f74f2c6461a22fee312->leave($__internal_be5dd0b4c8f457c28e5e052bd144fbc05551325de29f4f74f2c6461a22fee312_prof);

        
        $__internal_f4f520041b6766a0ed1eaa7b89d0f7a8eb3ca5923beedebbd310049be8c211fd->leave($__internal_f4f520041b6766a0ed1eaa7b89d0f7a8eb3ca5923beedebbd310049be8c211fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
