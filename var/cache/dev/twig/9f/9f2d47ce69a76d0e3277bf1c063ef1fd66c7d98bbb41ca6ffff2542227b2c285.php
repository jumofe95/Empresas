<?php

/* @Alumno/Default/alumnos_all.html.twig */
class __TwigTemplate_f9bc211c590122a5f55c2352746897d807d4bc9a318fca0ef33851c429e9cf09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Alumno/Default/alumnos_all.html.twig", 1);
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
        $__internal_6b99e95be232349814e4b0e734ba6fbbe2b5f16f2f683c2384c7b35300b2c891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b99e95be232349814e4b0e734ba6fbbe2b5f16f2f683c2384c7b35300b2c891->enter($__internal_6b99e95be232349814e4b0e734ba6fbbe2b5f16f2f683c2384c7b35300b2c891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alumno/Default/alumnos_all.html.twig"));

        $__internal_3bd5c654041899c61e52295798b981ac0b1ad1cb3a4bc2efce3e0e77dca4306c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd5c654041899c61e52295798b981ac0b1ad1cb3a4bc2efce3e0e77dca4306c->enter($__internal_3bd5c654041899c61e52295798b981ac0b1ad1cb3a4bc2efce3e0e77dca4306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alumno/Default/alumnos_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b99e95be232349814e4b0e734ba6fbbe2b5f16f2f683c2384c7b35300b2c891->leave($__internal_6b99e95be232349814e4b0e734ba6fbbe2b5f16f2f683c2384c7b35300b2c891_prof);

        
        $__internal_3bd5c654041899c61e52295798b981ac0b1ad1cb3a4bc2efce3e0e77dca4306c->leave($__internal_3bd5c654041899c61e52295798b981ac0b1ad1cb3a4bc2efce3e0e77dca4306c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d28536536c701179106813de106c112149f04f21af1c54738880210dac2f05be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28536536c701179106813de106c112149f04f21af1c54738880210dac2f05be->enter($__internal_d28536536c701179106813de106c112149f04f21af1c54738880210dac2f05be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f53836129f0fc9f641b61a9e3190111dc27570cbab9be18aa01858158c328a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53836129f0fc9f641b61a9e3190111dc27570cbab9be18aa01858158c328a51->enter($__internal_f53836129f0fc9f641b61a9e3190111dc27570cbab9be18aa01858158c328a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f53836129f0fc9f641b61a9e3190111dc27570cbab9be18aa01858158c328a51->leave($__internal_f53836129f0fc9f641b61a9e3190111dc27570cbab9be18aa01858158c328a51_prof);

        
        $__internal_d28536536c701179106813de106c112149f04f21af1c54738880210dac2f05be->leave($__internal_d28536536c701179106813de106c112149f04f21af1c54738880210dac2f05be_prof);

    }

    public function getTemplateName()
    {
        return "@Alumno/Default/alumnos_all.html.twig";
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
", "@Alumno/Default/alumnos_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\AlumnoBundle\\Resources\\views\\Default\\alumnos_all.html.twig");
    }
}
