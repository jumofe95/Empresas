<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_78647b7f70c550859e2f0a150ea3fd03916b1d73dee3aaf2c356cd0c4c94558f extends Twig_Template
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
        $__internal_98b933121152aa8ff01d7e208fddc76f24ab72323adb8391baa3a4f4d66e3096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b933121152aa8ff01d7e208fddc76f24ab72323adb8391baa3a4f4d66e3096->enter($__internal_98b933121152aa8ff01d7e208fddc76f24ab72323adb8391baa3a4f4d66e3096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $__internal_a968415d27122a014c287062eb4deb671e87d0c82871fd9f033b905313607e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a968415d27122a014c287062eb4deb671e87d0c82871fd9f033b905313607e9d->enter($__internal_a968415d27122a014c287062eb4deb671e87d0c82871fd9f033b905313607e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        // line 1
        echo "<body>
PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>
</body>
";
        
        $__internal_98b933121152aa8ff01d7e208fddc76f24ab72323adb8391baa3a4f4d66e3096->leave($__internal_98b933121152aa8ff01d7e208fddc76f24ab72323adb8391baa3a4f4d66e3096_prof);

        
        $__internal_a968415d27122a014c287062eb4deb671e87d0c82871fd9f033b905313607e9d->leave($__internal_a968415d27122a014c287062eb4deb671e87d0c82871fd9f033b905313607e9d_prof);

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
PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>
</body>
", "UsuarioBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle/Resources/views/Default/usuarios.html.twig");
    }
}
