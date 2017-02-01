<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_90cc28985f70a5565b2dfbe2fc2ae162ae28e880f88b6f3138a49f376b796536 extends Twig_Template
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
        $__internal_0616e13c5eb9603bc9e91b1c75fa4e2a3562c0bb0b09c2407b38a613c4153600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0616e13c5eb9603bc9e91b1c75fa4e2a3562c0bb0b09c2407b38a613c4153600->enter($__internal_0616e13c5eb9603bc9e91b1c75fa4e2a3562c0bb0b09c2407b38a613c4153600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ca50133d47a05b8ca1849b9ede92ede4c9bd00f17e29f1784546439dece8b619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca50133d47a05b8ca1849b9ede92ede4c9bd00f17e29f1784546439dece8b619->enter($__internal_ca50133d47a05b8ca1849b9ede92ede4c9bd00f17e29f1784546439dece8b619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0616e13c5eb9603bc9e91b1c75fa4e2a3562c0bb0b09c2407b38a613c4153600->leave($__internal_0616e13c5eb9603bc9e91b1c75fa4e2a3562c0bb0b09c2407b38a613c4153600_prof);

        
        $__internal_ca50133d47a05b8ca1849b9ede92ede4c9bd00f17e29f1784546439dece8b619->leave($__internal_ca50133d47a05b8ca1849b9ede92ede4c9bd00f17e29f1784546439dece8b619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
