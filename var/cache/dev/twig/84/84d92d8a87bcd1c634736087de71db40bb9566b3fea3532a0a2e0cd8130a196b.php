<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9bd17346f1151846329ee9bedb764f130a7eb79eb82f02ad955b2424b15b926c extends Twig_Template
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
        $__internal_dcde9f0fb0535408e6daf1b005a36854d1abe69b223b07469526705b193bef3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcde9f0fb0535408e6daf1b005a36854d1abe69b223b07469526705b193bef3f->enter($__internal_dcde9f0fb0535408e6daf1b005a36854d1abe69b223b07469526705b193bef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e1074e5d86e0d9b1012a7a09a71072dc8fa5e98b3896fea4998b4272b2ce2394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1074e5d86e0d9b1012a7a09a71072dc8fa5e98b3896fea4998b4272b2ce2394->enter($__internal_e1074e5d86e0d9b1012a7a09a71072dc8fa5e98b3896fea4998b4272b2ce2394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dcde9f0fb0535408e6daf1b005a36854d1abe69b223b07469526705b193bef3f->leave($__internal_dcde9f0fb0535408e6daf1b005a36854d1abe69b223b07469526705b193bef3f_prof);

        
        $__internal_e1074e5d86e0d9b1012a7a09a71072dc8fa5e98b3896fea4998b4272b2ce2394->leave($__internal_e1074e5d86e0d9b1012a7a09a71072dc8fa5e98b3896fea4998b4272b2ce2394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
