<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_52c211261b9d74c9ab9e1c4da2b79c44d543246778aed5e79ba360f413151da7 extends Twig_Template
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
        $__internal_b8c997fd1b56e37414ca29f23c897a749491c3e543c42fcd58c9177eaeb8555b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c997fd1b56e37414ca29f23c897a749491c3e543c42fcd58c9177eaeb8555b->enter($__internal_b8c997fd1b56e37414ca29f23c897a749491c3e543c42fcd58c9177eaeb8555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ee158d52e00416959015a195035dcdefc61d787fb4f397440bbc84aec26772a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee158d52e00416959015a195035dcdefc61d787fb4f397440bbc84aec26772a0->enter($__internal_ee158d52e00416959015a195035dcdefc61d787fb4f397440bbc84aec26772a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b8c997fd1b56e37414ca29f23c897a749491c3e543c42fcd58c9177eaeb8555b->leave($__internal_b8c997fd1b56e37414ca29f23c897a749491c3e543c42fcd58c9177eaeb8555b_prof);

        
        $__internal_ee158d52e00416959015a195035dcdefc61d787fb4f397440bbc84aec26772a0->leave($__internal_ee158d52e00416959015a195035dcdefc61d787fb4f397440bbc84aec26772a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
