<?php

/* UsuarioBundle:Default:usuarios.html.twig */
class __TwigTemplate_d937567b01c707bbc62f88c71d9dd6a1031a56fb81315d9a8ed1b67471d8d738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UsuarioBundle:Default:usuarios.html.twig", 1);
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
        $__internal_09a591cdb6e1ad2f7248099a79a30bd1180302c75d095a74e0ff75d34962277d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a591cdb6e1ad2f7248099a79a30bd1180302c75d095a74e0ff75d34962277d->enter($__internal_09a591cdb6e1ad2f7248099a79a30bd1180302c75d095a74e0ff75d34962277d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $__internal_9d2bc2c0e888e621f91c9651b8808d20ae2a5de74d873e93696ed7d464f2167a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2bc2c0e888e621f91c9651b8808d20ae2a5de74d873e93696ed7d464f2167a->enter($__internal_9d2bc2c0e888e621f91c9651b8808d20ae2a5de74d873e93696ed7d464f2167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a591cdb6e1ad2f7248099a79a30bd1180302c75d095a74e0ff75d34962277d->leave($__internal_09a591cdb6e1ad2f7248099a79a30bd1180302c75d095a74e0ff75d34962277d_prof);

        
        $__internal_9d2bc2c0e888e621f91c9651b8808d20ae2a5de74d873e93696ed7d464f2167a->leave($__internal_9d2bc2c0e888e621f91c9651b8808d20ae2a5de74d873e93696ed7d464f2167a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7178e2790a92c2bc41787d0d71357a7e64e9b521d0a6e05261adcb81fff4d43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7178e2790a92c2bc41787d0d71357a7e64e9b521d0a6e05261adcb81fff4d43b->enter($__internal_7178e2790a92c2bc41787d0d71357a7e64e9b521d0a6e05261adcb81fff4d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c078bfc486eaf50bdfa1f51ccc52594569857978f737cb149e3dea5e702813cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c078bfc486eaf50bdfa1f51ccc52594569857978f737cb149e3dea5e702813cd->enter($__internal_c078bfc486eaf50bdfa1f51ccc52594569857978f737cb149e3dea5e702813cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>¡Hola

";
        // line 7
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "!</h1>

";
            // line 9
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo " <h2>¡Eres admin!</h2> ";
            }
            // line 10
            echo "<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>


";
        } else {
            // line 14
            echo " Anónimo !</h1>
<br>
<a href=\"/usuario/usuarios/login\">Entrar</a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href=\"/usuario/register\">Registrarse</a>

";
        }
        // line 20
        echo "


";
        
        $__internal_c078bfc486eaf50bdfa1f51ccc52594569857978f737cb149e3dea5e702813cd->leave($__internal_c078bfc486eaf50bdfa1f51ccc52594569857978f737cb149e3dea5e702813cd_prof);

        
        $__internal_7178e2790a92c2bc41787d0d71357a7e64e9b521d0a6e05261adcb81fff4d43b->leave($__internal_7178e2790a92c2bc41787d0d71357a7e64e9b521d0a6e05261adcb81fff4d43b_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  71 => 14,  64 => 10,  60 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<h1>¡Hola

{% if app.user != null %}{{ app.user.username }}!</h1>

{% if is_granted('ROLE_ADMIN') %} <h2>¡Eres admin!</h2> {% endif %}
<br>
<a href=\"/usuario/usuarios/logout\">Salir</a>


{% else %} Anónimo !</h1>
<br>
<a href=\"/usuario/usuarios/login\">Entrar</a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href=\"/usuario/register\">Registrarse</a>

{% endif %}



{% endblock %}
", "UsuarioBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\usuarios.html.twig");
    }
}
