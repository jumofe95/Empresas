<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5b8f90c2ac6d95cbf7f26559f55f8ac683ae3e6bef4926eb61ae5049c779c3bd extends Twig_Template
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
        $__internal_af041641dd6eea06832c798e0b2d9de110128bff866df7fb56243794631d7d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af041641dd6eea06832c798e0b2d9de110128bff866df7fb56243794631d7d6a->enter($__internal_af041641dd6eea06832c798e0b2d9de110128bff866df7fb56243794631d7d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2198aa0ae568f2643f93dd0a65ffe75de73ce232fb2c90fbc2fcc0fec733c10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2198aa0ae568f2643f93dd0a65ffe75de73ce232fb2c90fbc2fcc0fec733c10a->enter($__internal_2198aa0ae568f2643f93dd0a65ffe75de73ce232fb2c90fbc2fcc0fec733c10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_af041641dd6eea06832c798e0b2d9de110128bff866df7fb56243794631d7d6a->leave($__internal_af041641dd6eea06832c798e0b2d9de110128bff866df7fb56243794631d7d6a_prof);

        
        $__internal_2198aa0ae568f2643f93dd0a65ffe75de73ce232fb2c90fbc2fcc0fec733c10a->leave($__internal_2198aa0ae568f2643f93dd0a65ffe75de73ce232fb2c90fbc2fcc0fec733c10a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
