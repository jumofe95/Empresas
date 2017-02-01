<?php

/* @Usuario/Default/usuarios.html.twig */
class __TwigTemplate_2e546aa13649d0421d3ce2634a90e57a6e92343524ceadb2bb3f05ce68e0c2d1 extends Twig_Template
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
        return "@Usuario/Default/usuarios.html.twig";
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
        return new Twig_Source("", "@Usuario/Default/usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\usuarios.html.twig");
    }
}
