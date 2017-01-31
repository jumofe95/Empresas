<?php

/* EmpresaBundle:Default:empresas_all.html.twig */
class __TwigTemplate_ac0a3e51585e3b5c573d0c81d5cae4439ef6aa5c9f5b17b635d45be8a9743ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmpresaBundle:Default:empresas_all.html.twig", 1);
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
        $__internal_40b5373a43aab6f8d7519bb7dddb17398f4725732f43e3b23c9cdb82c90695f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b5373a43aab6f8d7519bb7dddb17398f4725732f43e3b23c9cdb82c90695f3->enter($__internal_40b5373a43aab6f8d7519bb7dddb17398f4725732f43e3b23c9cdb82c90695f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b5373a43aab6f8d7519bb7dddb17398f4725732f43e3b23c9cdb82c90695f3->leave($__internal_40b5373a43aab6f8d7519bb7dddb17398f4725732f43e3b23c9cdb82c90695f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f131a83463e6886241432440e2b043aa26631e10235102977dcd8c5cc67b8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f131a83463e6886241432440e2b043aa26631e10235102977dcd8c5cc67b8d2->enter($__internal_5f131a83463e6886241432440e2b043aa26631e10235102977dcd8c5cc67b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EmpresaBundle:Default:empresas_all.html.twig"));

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
        
        $__internal_5f131a83463e6886241432440e2b043aa26631e10235102977dcd8c5cc67b8d2->leave($__internal_5f131a83463e6886241432440e2b043aa26631e10235102977dcd8c5cc67b8d2_prof);

    }

    public function getTemplateName()
    {
        return "EmpresaBundle:Default:empresas_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
", "EmpresaBundle:Default:empresas_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle/Resources/views/Default/empresas_all.html.twig");
    }
}
