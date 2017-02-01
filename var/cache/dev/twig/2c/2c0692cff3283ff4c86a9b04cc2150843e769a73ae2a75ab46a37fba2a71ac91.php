<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_2645de5fcd22e740f791373ff594c5edab9930888fda6cff6c5daecb102be454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2645de5fcd22e740f791373ff594c5edab9930888fda6cff6c5daecb102be454->enter($__internal_2645de5fcd22e740f791373ff594c5edab9930888fda6cff6c5daecb102be454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9f8e76125cce1c695c28ea2e0772aedd6d80f2e79185371a6d515190f5254758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8e76125cce1c695c28ea2e0772aedd6d80f2e79185371a6d515190f5254758->enter($__internal_9f8e76125cce1c695c28ea2e0772aedd6d80f2e79185371a6d515190f5254758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2645de5fcd22e740f791373ff594c5edab9930888fda6cff6c5daecb102be454->leave($__internal_2645de5fcd22e740f791373ff594c5edab9930888fda6cff6c5daecb102be454_prof);

        
        $__internal_9f8e76125cce1c695c28ea2e0772aedd6d80f2e79185371a6d515190f5254758->leave($__internal_9f8e76125cce1c695c28ea2e0772aedd6d80f2e79185371a6d515190f5254758_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
