<?php

/* EmpresaBundle:Default:empresas_all.html.twig */
class __TwigTemplate_0dd4ea1e1a297cb6b86fd8a39eccced81a0adf8782b2f7fd9e68cd7af85bdb9f extends Twig_Template
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
        $__internal_042a6109396f0c8d06f5ebb184058630a569e3e6624194f1bace5c0cda0ef24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042a6109396f0c8d06f5ebb184058630a569e3e6624194f1bace5c0cda0ef24c->enter($__internal_042a6109396f0c8d06f5ebb184058630a569e3e6624194f1bace5c0cda0ef24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_all.html.twig"));

        $__internal_a1304069662018a75f5df2047a0b25f9aaac6e2aac19e69258140645a65107ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1304069662018a75f5df2047a0b25f9aaac6e2aac19e69258140645a65107ed->enter($__internal_a1304069662018a75f5df2047a0b25f9aaac6e2aac19e69258140645a65107ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmpresaBundle:Default:empresas_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042a6109396f0c8d06f5ebb184058630a569e3e6624194f1bace5c0cda0ef24c->leave($__internal_042a6109396f0c8d06f5ebb184058630a569e3e6624194f1bace5c0cda0ef24c_prof);

        
        $__internal_a1304069662018a75f5df2047a0b25f9aaac6e2aac19e69258140645a65107ed->leave($__internal_a1304069662018a75f5df2047a0b25f9aaac6e2aac19e69258140645a65107ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bba33d0adae934a837f8cba22ce9309c0c77ccc9028164f1406732092cbcd002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba33d0adae934a837f8cba22ce9309c0c77ccc9028164f1406732092cbcd002->enter($__internal_bba33d0adae934a837f8cba22ce9309c0c77ccc9028164f1406732092cbcd002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd19fd09ef3412c585af5b8aa71c2371aecdf29bf2b5673993c8f7a2322d909d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd19fd09ef3412c585af5b8aa71c2371aecdf29bf2b5673993c8f7a2322d909d->enter($__internal_cd19fd09ef3412c585af5b8aa71c2371aecdf29bf2b5673993c8f7a2322d909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd19fd09ef3412c585af5b8aa71c2371aecdf29bf2b5673993c8f7a2322d909d->leave($__internal_cd19fd09ef3412c585af5b8aa71c2371aecdf29bf2b5673993c8f7a2322d909d_prof);

        
        $__internal_bba33d0adae934a837f8cba22ce9309c0c77ccc9028164f1406732092cbcd002->leave($__internal_bba33d0adae934a837f8cba22ce9309c0c77ccc9028164f1406732092cbcd002_prof);

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
", "EmpresaBundle:Default:empresas_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\empresas_all.html.twig");
    }
}
