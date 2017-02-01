<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03e1df71ce0b6b49bc6927a38f198ba44bb38c50e09e9b103aa8ee49de9a3883 extends Twig_Template
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
        $__internal_74c6080e6c6d987c77064ae9543e503732eea853fb80a2a2ec20fe6ed06ca17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c6080e6c6d987c77064ae9543e503732eea853fb80a2a2ec20fe6ed06ca17d->enter($__internal_74c6080e6c6d987c77064ae9543e503732eea853fb80a2a2ec20fe6ed06ca17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b7dc37e2d48c5ce5e96087ab158afd8a7540ba14438257e8a060d99e2d36bb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dc37e2d48c5ce5e96087ab158afd8a7540ba14438257e8a060d99e2d36bb79->enter($__internal_b7dc37e2d48c5ce5e96087ab158afd8a7540ba14438257e8a060d99e2d36bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74c6080e6c6d987c77064ae9543e503732eea853fb80a2a2ec20fe6ed06ca17d->leave($__internal_74c6080e6c6d987c77064ae9543e503732eea853fb80a2a2ec20fe6ed06ca17d_prof);

        
        $__internal_b7dc37e2d48c5ce5e96087ab158afd8a7540ba14438257e8a060d99e2d36bb79->leave($__internal_b7dc37e2d48c5ce5e96087ab158afd8a7540ba14438257e8a060d99e2d36bb79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
