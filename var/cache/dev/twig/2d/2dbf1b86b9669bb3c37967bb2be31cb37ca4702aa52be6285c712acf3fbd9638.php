<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_085a85f7e79281ea244521c36e11876f55a8fab2d97414eb6b08dbadae73c81a extends Twig_Template
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
        $__internal_fd7c791e696a0b0d5a2e93cb08a6bb59011952d8e4345eb96804d0957c37e38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7c791e696a0b0d5a2e93cb08a6bb59011952d8e4345eb96804d0957c37e38d->enter($__internal_fd7c791e696a0b0d5a2e93cb08a6bb59011952d8e4345eb96804d0957c37e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bf418ae2cbe9355310e666997c4988af42f5adddfc269429adc62298268efa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf418ae2cbe9355310e666997c4988af42f5adddfc269429adc62298268efa1d->enter($__internal_bf418ae2cbe9355310e666997c4988af42f5adddfc269429adc62298268efa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fd7c791e696a0b0d5a2e93cb08a6bb59011952d8e4345eb96804d0957c37e38d->leave($__internal_fd7c791e696a0b0d5a2e93cb08a6bb59011952d8e4345eb96804d0957c37e38d_prof);

        
        $__internal_bf418ae2cbe9355310e666997c4988af42f5adddfc269429adc62298268efa1d->leave($__internal_bf418ae2cbe9355310e666997c4988af42f5adddfc269429adc62298268efa1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
