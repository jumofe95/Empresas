<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8731a420aec54a97ee655fb2d2b7631a4ae901573530878e2dc0fada578b27e6 extends Twig_Template
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
        $__internal_2ced641c5c938beda16aa7ea094466f2785a1ce001877313f5ed1690b95625c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ced641c5c938beda16aa7ea094466f2785a1ce001877313f5ed1690b95625c2->enter($__internal_2ced641c5c938beda16aa7ea094466f2785a1ce001877313f5ed1690b95625c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c2ec596dabbb69dfe560e5da68be47c7976be6e5f60967524294f576af65f0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ec596dabbb69dfe560e5da68be47c7976be6e5f60967524294f576af65f0b8->enter($__internal_c2ec596dabbb69dfe560e5da68be47c7976be6e5f60967524294f576af65f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2ced641c5c938beda16aa7ea094466f2785a1ce001877313f5ed1690b95625c2->leave($__internal_2ced641c5c938beda16aa7ea094466f2785a1ce001877313f5ed1690b95625c2_prof);

        
        $__internal_c2ec596dabbb69dfe560e5da68be47c7976be6e5f60967524294f576af65f0b8->leave($__internal_c2ec596dabbb69dfe560e5da68be47c7976be6e5f60967524294f576af65f0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\symfony\\Empresas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
