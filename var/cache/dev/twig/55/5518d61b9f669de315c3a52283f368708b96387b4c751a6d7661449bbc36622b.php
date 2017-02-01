<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1190cd32d4fb34381624ca6ed13fe5c4fd30002951773fb6c2a751742cd046b1 extends Twig_Template
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
        $__internal_48f68a7141851a1b4d1c5e43dd4fd13f75636216794266295f0c8df1a2df5e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f68a7141851a1b4d1c5e43dd4fd13f75636216794266295f0c8df1a2df5e65->enter($__internal_48f68a7141851a1b4d1c5e43dd4fd13f75636216794266295f0c8df1a2df5e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a10c0b7a8f719ed3167730ce20a6c2f08b25c1b5923f0bdacbc87b44cc3b4b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10c0b7a8f719ed3167730ce20a6c2f08b25c1b5923f0bdacbc87b44cc3b4b6d->enter($__internal_a10c0b7a8f719ed3167730ce20a6c2f08b25c1b5923f0bdacbc87b44cc3b4b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_48f68a7141851a1b4d1c5e43dd4fd13f75636216794266295f0c8df1a2df5e65->leave($__internal_48f68a7141851a1b4d1c5e43dd4fd13f75636216794266295f0c8df1a2df5e65_prof);

        
        $__internal_a10c0b7a8f719ed3167730ce20a6c2f08b25c1b5923f0bdacbc87b44cc3b4b6d->leave($__internal_a10c0b7a8f719ed3167730ce20a6c2f08b25c1b5923f0bdacbc87b44cc3b4b6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
