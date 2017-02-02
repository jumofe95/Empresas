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
        $__internal_dbe922c73da5ff00df204a2574d54e44f85b4b3728379ef08b4c03e01af93de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe922c73da5ff00df204a2574d54e44f85b4b3728379ef08b4c03e01af93de6->enter($__internal_dbe922c73da5ff00df204a2574d54e44f85b4b3728379ef08b4c03e01af93de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlumnoBundle:Default:alumnos_all.html.twig"));

        $__internal_ad249455f573c65064242ff170651222a03eb60a540746f839d6aac16b947fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad249455f573c65064242ff170651222a03eb60a540746f839d6aac16b947fa8->enter($__internal_ad249455f573c65064242ff170651222a03eb60a540746f839d6aac16b947fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlumnoBundle:Default:alumnos_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe922c73da5ff00df204a2574d54e44f85b4b3728379ef08b4c03e01af93de6->leave($__internal_dbe922c73da5ff00df204a2574d54e44f85b4b3728379ef08b4c03e01af93de6_prof);

        
        $__internal_ad249455f573c65064242ff170651222a03eb60a540746f839d6aac16b947fa8->leave($__internal_ad249455f573c65064242ff170651222a03eb60a540746f839d6aac16b947fa8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f5d89ebca21a9fa3b63319c198c6705cc67b1fcce12c7fb0b326f3f435364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f5d89ebca21a9fa3b63319c198c6705cc67b1fcce12c7fb0b326f3f435364a->enter($__internal_80f5d89ebca21a9fa3b63319c198c6705cc67b1fcce12c7fb0b326f3f435364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4151b083a30a7ba2085669b8c05eecb7262385e982ec37f4dbaee7bc99b5ee53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4151b083a30a7ba2085669b8c05eecb7262385e982ec37f4dbaee7bc99b5ee53->enter($__internal_4151b083a30a7ba2085669b8c05eecb7262385e982ec37f4dbaee7bc99b5ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4151b083a30a7ba2085669b8c05eecb7262385e982ec37f4dbaee7bc99b5ee53->leave($__internal_4151b083a30a7ba2085669b8c05eecb7262385e982ec37f4dbaee7bc99b5ee53_prof);

        
        $__internal_80f5d89ebca21a9fa3b63319c198c6705cc67b1fcce12c7fb0b326f3f435364a->leave($__internal_80f5d89ebca21a9fa3b63319c198c6705cc67b1fcce12c7fb0b326f3f435364a_prof);

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
