<?php

/* @Empresa/Default/empresas_all.html.twig */
class __TwigTemplate_2a2555c4ce023a12b5c8042861aea84fd879d9c33b87b078dfddee47ca6220cb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : null));
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
        return array (  81 => 26,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Empresa/Default/empresas_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\EmpresaBundle\\Resources\\views\\Default\\empresas_all.html.twig");
    }
}
