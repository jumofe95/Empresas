<?php

/* @Profesor/Default/profesores_all.html.twig */
class __TwigTemplate_0010b4f866b450671d3302a288d270d83e8e46638a25eab8cec000aea91dd03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Profesor/Default/profesores_all.html.twig", 1);
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
        $__internal_4c127e2ea79bb98d9ecf8eecef46a7a4c0594a8893b9987329c9b08562404e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c127e2ea79bb98d9ecf8eecef46a7a4c0594a8893b9987329c9b08562404e8c->enter($__internal_4c127e2ea79bb98d9ecf8eecef46a7a4c0594a8893b9987329c9b08562404e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/profesores_all.html.twig"));

        $__internal_b6c29c1a7e3e570e2e125e3ff4facb6f5d89454f76786ba71ba30f5c4a764a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c29c1a7e3e570e2e125e3ff4facb6f5d89454f76786ba71ba30f5c4a764a48->enter($__internal_b6c29c1a7e3e570e2e125e3ff4facb6f5d89454f76786ba71ba30f5c4a764a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/profesores_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c127e2ea79bb98d9ecf8eecef46a7a4c0594a8893b9987329c9b08562404e8c->leave($__internal_4c127e2ea79bb98d9ecf8eecef46a7a4c0594a8893b9987329c9b08562404e8c_prof);

        
        $__internal_b6c29c1a7e3e570e2e125e3ff4facb6f5d89454f76786ba71ba30f5c4a764a48->leave($__internal_b6c29c1a7e3e570e2e125e3ff4facb6f5d89454f76786ba71ba30f5c4a764a48_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae73de30242ca23ba47a19ac66af02c8c414d4ea7be02d9294b7e84c48f12797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae73de30242ca23ba47a19ac66af02c8c414d4ea7be02d9294b7e84c48f12797->enter($__internal_ae73de30242ca23ba47a19ac66af02c8c414d4ea7be02d9294b7e84c48f12797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cf33152ea24e49ec54641caa54a560d9e5ac3296c5ce5ff72a1062aff5d523c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf33152ea24e49ec54641caa54a560d9e5ac3296c5ce5ff72a1062aff5d523c->enter($__internal_0cf33152ea24e49ec54641caa54a560d9e5ac3296c5ce5ff72a1062aff5d523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div align=\"center\"><h1>LISTADO DE PROFESORES</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>NOMBRE</th>
      <th>APELLIDOS</th>
      <th>DEPARTAMENTO</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profesores"]) ? $context["profesores"] : $this->getContext($context, "profesores")));
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 13
            echo "    <tr>
      <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "</td>    
      <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellidos", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "departamento", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </table>
</div>
";
        
        $__internal_0cf33152ea24e49ec54641caa54a560d9e5ac3296c5ce5ff72a1062aff5d523c->leave($__internal_0cf33152ea24e49ec54641caa54a560d9e5ac3296c5ce5ff72a1062aff5d523c_prof);

        
        $__internal_ae73de30242ca23ba47a19ac66af02c8c414d4ea7be02d9294b7e84c48f12797->leave($__internal_ae73de30242ca23ba47a19ac66af02c8c414d4ea7be02d9294b7e84c48f12797_prof);

    }

    public function getTemplateName()
    {
        return "@Profesor/Default/profesores_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
<div align=\"center\"><h1>LISTADO DE PROFESORES</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>NOMBRE</th>
      <th>APELLIDOS</th>
      <th>DEPARTAMENTO</th>
    </tr>
    {% for profesor in profesores %}
    <tr>
      <td>{{ profesor.id }}</td>    
      <td>{{ profesor.nombre }}</td>
      <td>{{ profesor.apellidos }}</td>
      <td>{{ profesor.departamento }}</td>
    </tr>
    {% endfor %}
  </table>
</div>
{% endblock %}
", "@Profesor/Default/profesores_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle\\Resources\\views\\Default\\profesores_all.html.twig");
    }
}
