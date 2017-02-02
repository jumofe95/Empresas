<?php

/* AlumnoBundle:Default:alumnos_all.html.twig */
class __TwigTemplate_f9bc211c590122a5f55c2352746897d807d4bc9a318fca0ef33851c429e9cf09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AlumnoBundle:Default:alumnos_all.html.twig", 1);
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
        $__internal_65fa2aa3315a284496b6b7fffa45e89420d01980d50d25fad990368bb59d9ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fa2aa3315a284496b6b7fffa45e89420d01980d50d25fad990368bb59d9ae7->enter($__internal_65fa2aa3315a284496b6b7fffa45e89420d01980d50d25fad990368bb59d9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlumnoBundle:Default:alumnos_all.html.twig"));

        $__internal_8c0f1cc29a8165eea9ff1e5223e8df6ba4aec94a5dd9e5ac65cde65ffa5702ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0f1cc29a8165eea9ff1e5223e8df6ba4aec94a5dd9e5ac65cde65ffa5702ec->enter($__internal_8c0f1cc29a8165eea9ff1e5223e8df6ba4aec94a5dd9e5ac65cde65ffa5702ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlumnoBundle:Default:alumnos_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fa2aa3315a284496b6b7fffa45e89420d01980d50d25fad990368bb59d9ae7->leave($__internal_65fa2aa3315a284496b6b7fffa45e89420d01980d50d25fad990368bb59d9ae7_prof);

        
        $__internal_8c0f1cc29a8165eea9ff1e5223e8df6ba4aec94a5dd9e5ac65cde65ffa5702ec->leave($__internal_8c0f1cc29a8165eea9ff1e5223e8df6ba4aec94a5dd9e5ac65cde65ffa5702ec_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a26792a0762f823d13bc7e07cd0150800f67394749b4ac961358f277207bc202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26792a0762f823d13bc7e07cd0150800f67394749b4ac961358f277207bc202->enter($__internal_a26792a0762f823d13bc7e07cd0150800f67394749b4ac961358f277207bc202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee4aa970d2ea094d9976716aaa440128740574a937ad8669e71c0e32673e3fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4aa970d2ea094d9976716aaa440128740574a937ad8669e71c0e32673e3fe1->enter($__internal_ee4aa970d2ea094d9976716aaa440128740574a937ad8669e71c0e32673e3fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div align=\"center\"><h1>LISTADO DE ALUMNOS</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>NOMBRE</th>
      <th>APELLIDO 1</th>
      <th>APELLIDO 2</th>
      <th>CICLO</th>
      <th>EMPRESA</th>
    </tr>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 15
            echo "    <tr>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>    
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </table>
</div>
";
        
        $__internal_ee4aa970d2ea094d9976716aaa440128740574a937ad8669e71c0e32673e3fe1->leave($__internal_ee4aa970d2ea094d9976716aaa440128740574a937ad8669e71c0e32673e3fe1_prof);

        
        $__internal_a26792a0762f823d13bc7e07cd0150800f67394749b4ac961358f277207bc202->leave($__internal_a26792a0762f823d13bc7e07cd0150800f67394749b4ac961358f277207bc202_prof);

    }

    public function getTemplateName()
    {
        return "AlumnoBundle:Default:alumnos_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
<div align=\"center\"><h1>LISTADO DE ALUMNOS</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>NOMBRE</th>
      <th>APELLIDO 1</th>
      <th>APELLIDO 2</th>
      <th>CICLO</th>
      <th>EMPRESA</th>
    </tr>
    {% for alumno in alumnos %}
    <tr>
      <td>{{ alumno.id }}</td>    
      <td>{{ alumno.nombre }}</td>
      <td>{{ alumno.apellido1 }}</td>
      <td>{{ alumno.apellido2 }}</td>
      <td>{{ alumno.ciclo }}</td>
      <td>{{ alumno.empresa.nombre}}</td>
    </tr>
    {% endfor %}
  </table>
</div>
{% endblock %}
", "AlumnoBundle:Default:alumnos_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\AlumnoBundle\\Resources\\views\\Default\\alumnos_all.html.twig");
    }
}
