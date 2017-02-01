<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_58df4b8e63ffbe4c2c39444e55bb00aa93e0ac6038bc5f896d9cdcd5db0a6aab extends Twig_Template
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
        // line 1
        echo "<body>
PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>
</body>
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:usuarios.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UsuarioBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle/Resources/views/Default/usuarios.html.twig");
    }
}
