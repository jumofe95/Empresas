<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_d937567b01c707bbc62f88c71d9dd6a1031a56fb81315d9a8ed1b67471d8d738 extends Twig_Template
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
        $__internal_cd0bfc1082d5c306004272d70c6ca12a28ec1c7b26a31bbd359cf3dbf9cf03b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0bfc1082d5c306004272d70c6ca12a28ec1c7b26a31bbd359cf3dbf9cf03b2->enter($__internal_cd0bfc1082d5c306004272d70c6ca12a28ec1c7b26a31bbd359cf3dbf9cf03b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $__internal_8bf1c37e376f4662e9d220ec1533d8c0f90460027508894ea85022972050dc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf1c37e376f4662e9d220ec1533d8c0f90460027508894ea85022972050dc59->enter($__internal_8bf1c37e376f4662e9d220ec1533d8c0f90460027508894ea85022972050dc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        // line 1
        echo "<body>
usuarios.html
<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>
</body>
";
        
        $__internal_cd0bfc1082d5c306004272d70c6ca12a28ec1c7b26a31bbd359cf3dbf9cf03b2->leave($__internal_cd0bfc1082d5c306004272d70c6ca12a28ec1c7b26a31bbd359cf3dbf9cf03b2_prof);

        
        $__internal_8bf1c37e376f4662e9d220ec1533d8c0f90460027508894ea85022972050dc59->leave($__internal_8bf1c37e376f4662e9d220ec1533d8c0f90460027508894ea85022972050dc59_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:usuarios.html.twig";
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
        return new Twig_Source("<body>
usuarios.html
<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>
</body>
", "UsuarioBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\usuarios.html.twig");
    }
}
