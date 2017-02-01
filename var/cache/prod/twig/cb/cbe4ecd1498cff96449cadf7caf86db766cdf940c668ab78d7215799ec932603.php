<?php

/* ProfesorBundle:Default:profesores_new.html.twig */
class __TwigTemplate_454d3f8b3f94dbdaabdb919f62ceddbda8da156ea31aadd967f63160c0a4f738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProfesorBundle:Default:profesores_new.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Nuevo profesor.</h2>
<!-- (form) es el array que hemos devuelto en la funcion \"newAction()\" del controlador ProfesorController-->
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "ProfesorBundle:Default:profesores_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProfesorBundle:Default:profesores_new.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle/Resources/views/Default/profesores_new.html.twig");
    }
}
