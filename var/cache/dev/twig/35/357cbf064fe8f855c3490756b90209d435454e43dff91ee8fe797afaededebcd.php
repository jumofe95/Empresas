<?php

/* @Empresa/Default/empresas_all.html.twig */
class __TwigTemplate_0dd4ea1e1a297cb6b86fd8a39eccced81a0adf8782b2f7fd9e68cd7af85bdb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Empresa/Default/empresas_all.html.twig", 1);
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
        $__internal_fac887849488613e85aca401800e192359e3e66ba2790c6c5de4b6c048d738d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac887849488613e85aca401800e192359e3e66ba2790c6c5de4b6c048d738d4->enter($__internal_fac887849488613e85aca401800e192359e3e66ba2790c6c5de4b6c048d738d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/empresas_all.html.twig"));

        $__internal_1aee1a73375809dc88583834430f5ce1c49b9944bc75c19b926647badafdcd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aee1a73375809dc88583834430f5ce1c49b9944bc75c19b926647badafdcd60->enter($__internal_1aee1a73375809dc88583834430f5ce1c49b9944bc75c19b926647badafdcd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/empresas_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac887849488613e85aca401800e192359e3e66ba2790c6c5de4b6c048d738d4->leave($__internal_fac887849488613e85aca401800e192359e3e66ba2790c6c5de4b6c048d738d4_prof);

        
        $__internal_1aee1a73375809dc88583834430f5ce1c49b9944bc75c19b926647badafdcd60->leave($__internal_1aee1a73375809dc88583834430f5ce1c49b9944bc75c19b926647badafdcd60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b3d2d9a18398d1c3a4d5769209b23a16d93914a37187799a1d9c1995853361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b3d2d9a18398d1c3a4d5769209b23a16d93914a37187799a1d9c1995853361->enter($__internal_e0b3d2d9a18398d1c3a4d5769209b23a16d93914a37187799a1d9c1995853361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_865b8fb4f8cbaf6c321633c2f1180e1df2f68c8e59085df09378751240d0eefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865b8fb4f8cbaf6c321633c2f1180e1df2f68c8e59085df09378751240d0eefa->enter($__internal_865b8fb4f8cbaf6c321633c2f1180e1df2f68c8e59085df09378751240d0eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div align=\"center\"><h1>LISTADO DE EMPRESAS</h1></div>
  <div align=\"center\">
    <table>
      <tr>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>CP</th>
        <th>TELEFONO 1</th>
        <th>TELEFONO 2</th>
        <th>FECHA DE CREACION</th>
      </tr>
      
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 17
            echo "      <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empresa"], "fechaCreacion", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </table>
  </div>
";
        
        $__internal_865b8fb4f8cbaf6c321633c2f1180e1df2f68c8e59085df09378751240d0eefa->leave($__internal_865b8fb4f8cbaf6c321633c2f1180e1df2f68c8e59085df09378751240d0eefa_prof);

        
        $__internal_e0b3d2d9a18398d1c3a4d5769209b23a16d93914a37187799a1d9c1995853361->leave($__internal_e0b3d2d9a18398d1c3a4d5769209b23a16d93914a37187799a1d9c1995853361_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/empresas_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
  <div align=\"center\"><h1>LISTADO DE EMPRESAS</h1></div>
  <div align=\"center\">
    <table>
      <tr>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>CP</th>
        <th>TELEFONO 1</th>
        <th>TELEFONO 2</th>
        <th>FECHA DE CREACION</th>
      </tr>
      
      {% for empresa in empresas %}
      <tr>
        <td>{{ empresa.nombre }}</td>
        <td>{{ empresa.direccion }}</td>
        <td>{{ empresa.cp }}</td>
        <td>{{ empresa.telefono1 }}</td>
        <td>{{ empresa.telefono2 }}</td>
        <td>{{ empresa.fechaCreacion|date(\"d/m/Y\") }}</td>
      </tr>
      {% endfor %}
    </table>
  </div>
{% endblock %}
", "@Empresa/Default/empresas_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\empresas_all.html.twig");
    }
}
