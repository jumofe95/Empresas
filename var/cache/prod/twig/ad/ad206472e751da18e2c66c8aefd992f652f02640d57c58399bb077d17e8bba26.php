<?php

/* @Alumno/Default/alumnos_all.html.twig */
class __TwigTemplate_2644e121b7b51d24b91a29a1cf23f633df69e44b16102a8d9eca04d21eba0ea0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
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
        return array (  80 => 24,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Alumno/Default/alumnos_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\AlumnoBundle\\Resources\\views\\Default\\alumnos_all.html.twig");
    }
}
