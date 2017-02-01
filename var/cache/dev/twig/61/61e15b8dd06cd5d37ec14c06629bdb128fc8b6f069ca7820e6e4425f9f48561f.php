<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_096114c720480ab24f3a1e9603a4c8c1f3cbff763fb37483dd654151cd4d11ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IndexBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91642b2c71e54116587896f4d8250412eed45c5602d33955fc43f46135efd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91642b2c71e54116587896f4d8250412eed45c5602d33955fc43f46135efd53->enter($__internal_a91642b2c71e54116587896f4d8250412eed45c5602d33955fc43f46135efd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $__internal_1c638f0690fad8d982ecb52b5b052b94d815122ae15b479e22e62b05f224f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c638f0690fad8d982ecb52b5b052b94d815122ae15b479e22e62b05f224f567->enter($__internal_1c638f0690fad8d982ecb52b5b052b94d815122ae15b479e22e62b05f224f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91642b2c71e54116587896f4d8250412eed45c5602d33955fc43f46135efd53->leave($__internal_a91642b2c71e54116587896f4d8250412eed45c5602d33955fc43f46135efd53_prof);

        
        $__internal_1c638f0690fad8d982ecb52b5b052b94d815122ae15b479e22e62b05f224f567->leave($__internal_1c638f0690fad8d982ecb52b5b052b94d815122ae15b479e22e62b05f224f567_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c556f8c2cc6e8859d43c4caf697da0955964e4fc954569f5744288b46611edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c556f8c2cc6e8859d43c4caf697da0955964e4fc954569f5744288b46611edf->enter($__internal_6c556f8c2cc6e8859d43c4caf697da0955964e4fc954569f5744288b46611edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e6a04eeb59d168cefdcd965ce9bc42035ea45ce41a047b95c8772de8dbd44ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6a04eeb59d168cefdcd965ce9bc42035ea45ce41a047b95c8772de8dbd44ae->enter($__internal_6e6a04eeb59d168cefdcd965ce9bc42035ea45ce41a047b95c8772de8dbd44ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


";
        
        $__internal_6e6a04eeb59d168cefdcd965ce9bc42035ea45ce41a047b95c8772de8dbd44ae->leave($__internal_6e6a04eeb59d168cefdcd965ce9bc42035ea45ce41a047b95c8772de8dbd44ae_prof);

        
        $__internal_6c556f8c2cc6e8859d43c4caf697da0955964e4fc954569f5744288b46611edf->leave($__internal_6c556f8c2cc6e8859d43c4caf697da0955964e4fc954569f5744288b46611edf_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

<h2 align=\"center\">BIENVENIDO AL GESTOR DE EMPRESAS DE FCT</h2>


{% endblock %}
", "IndexBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\IndexBundle/Resources/views/Default/index.html.twig");
    }
}
