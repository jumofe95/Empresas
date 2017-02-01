<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ba884bcc3785bec48fa7a68651cb0366d9c40cfbc143ce192c957dc3a2a98c7e extends Twig_Template
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
        $__internal_6104d8d211d41f73c5bdedd559f25c09a77493702f3ca14415e62810433eb2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6104d8d211d41f73c5bdedd559f25c09a77493702f3ca14415e62810433eb2e3->enter($__internal_6104d8d211d41f73c5bdedd559f25c09a77493702f3ca14415e62810433eb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7aa581d10ed26801ab951bda5a00f39061251284a63a035c1150fc13c2359a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa581d10ed26801ab951bda5a00f39061251284a63a035c1150fc13c2359a5b->enter($__internal_7aa581d10ed26801ab951bda5a00f39061251284a63a035c1150fc13c2359a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6104d8d211d41f73c5bdedd559f25c09a77493702f3ca14415e62810433eb2e3->leave($__internal_6104d8d211d41f73c5bdedd559f25c09a77493702f3ca14415e62810433eb2e3_prof);

        
        $__internal_7aa581d10ed26801ab951bda5a00f39061251284a63a035c1150fc13c2359a5b->leave($__internal_7aa581d10ed26801ab951bda5a00f39061251284a63a035c1150fc13c2359a5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
