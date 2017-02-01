<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7959ef5ed9cdd813f00e4daf8ae070426af728311cdf56baa99670839740c46d extends Twig_Template
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
        $__internal_f0b1b899985cf250241cf25a04c18b501ba7c2f999d72688738ccac4d482acfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b1b899985cf250241cf25a04c18b501ba7c2f999d72688738ccac4d482acfe->enter($__internal_f0b1b899985cf250241cf25a04c18b501ba7c2f999d72688738ccac4d482acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_79cf91be01c42371f8cae85c720246b5f31200fa14f65fec01536c02e2d44d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cf91be01c42371f8cae85c720246b5f31200fa14f65fec01536c02e2d44d64->enter($__internal_79cf91be01c42371f8cae85c720246b5f31200fa14f65fec01536c02e2d44d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f0b1b899985cf250241cf25a04c18b501ba7c2f999d72688738ccac4d482acfe->leave($__internal_f0b1b899985cf250241cf25a04c18b501ba7c2f999d72688738ccac4d482acfe_prof);

        
        $__internal_79cf91be01c42371f8cae85c720246b5f31200fa14f65fec01536c02e2d44d64->leave($__internal_79cf91be01c42371f8cae85c720246b5f31200fa14f65fec01536c02e2d44d64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
