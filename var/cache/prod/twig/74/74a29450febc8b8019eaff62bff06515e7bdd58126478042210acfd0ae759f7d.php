<?php

/* ProfesorBundle:Default:profesores_all.html.twig */
class __TwigTemplate_8ac1743d5121de7df4c591a19624da798b650588f7c8230df4a02786a5b9b69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProfesorBundle:Default:profesores_all.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["profesores"]) ? $context["profesores"] : null));
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
    }

    public function getTemplateName()
    {
        return "ProfesorBundle:Default:profesores_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProfesorBundle:Default:profesores_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle/Resources/views/Default/profesores_all.html.twig");
    }
}
