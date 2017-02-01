<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b124abf8e1ee7f9d3bfbd371b1e444633ae7c2267f94ff6dec1cbe52cfe8601b extends Twig_Template
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
        $__internal_6b609c20da7c1c3e2d66b31af1012eec2442de846ca718b368157474a77c2794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b609c20da7c1c3e2d66b31af1012eec2442de846ca718b368157474a77c2794->enter($__internal_6b609c20da7c1c3e2d66b31af1012eec2442de846ca718b368157474a77c2794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7ab85bc89d1eba23390c4655168700bdd64cec540e353c9bc9cd876b73926889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab85bc89d1eba23390c4655168700bdd64cec540e353c9bc9cd876b73926889->enter($__internal_7ab85bc89d1eba23390c4655168700bdd64cec540e353c9bc9cd876b73926889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6b609c20da7c1c3e2d66b31af1012eec2442de846ca718b368157474a77c2794->leave($__internal_6b609c20da7c1c3e2d66b31af1012eec2442de846ca718b368157474a77c2794_prof);

        
        $__internal_7ab85bc89d1eba23390c4655168700bdd64cec540e353c9bc9cd876b73926889->leave($__internal_7ab85bc89d1eba23390c4655168700bdd64cec540e353c9bc9cd876b73926889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
