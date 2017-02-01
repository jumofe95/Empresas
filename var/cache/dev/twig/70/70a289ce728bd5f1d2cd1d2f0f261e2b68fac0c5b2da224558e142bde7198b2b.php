<?php

/* ProfesorBundle:Default:profesores_all.html.twig */
class __TwigTemplate_cc60efe3e95aadf28e0965ed097fc31dccfc471e84802e0d8015732970522006 extends Twig_Template
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
        $__internal_44dd4edcb4e26d321a457899ca030bd2da9518e7c41527ba985772f04aada6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dd4edcb4e26d321a457899ca030bd2da9518e7c41527ba985772f04aada6c6->enter($__internal_44dd4edcb4e26d321a457899ca030bd2da9518e7c41527ba985772f04aada6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_all.html.twig"));

        $__internal_c59f83edfbac9a3cbdc99ff342cd3bf129c0dca5a507a145e3958b78707008d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59f83edfbac9a3cbdc99ff342cd3bf129c0dca5a507a145e3958b78707008d0->enter($__internal_c59f83edfbac9a3cbdc99ff342cd3bf129c0dca5a507a145e3958b78707008d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:profesores_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44dd4edcb4e26d321a457899ca030bd2da9518e7c41527ba985772f04aada6c6->leave($__internal_44dd4edcb4e26d321a457899ca030bd2da9518e7c41527ba985772f04aada6c6_prof);

        
        $__internal_c59f83edfbac9a3cbdc99ff342cd3bf129c0dca5a507a145e3958b78707008d0->leave($__internal_c59f83edfbac9a3cbdc99ff342cd3bf129c0dca5a507a145e3958b78707008d0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3471b8deb4f3e458ca15be7f1fd1f87a07e5f4dc08d522c81d872565833b85af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3471b8deb4f3e458ca15be7f1fd1f87a07e5f4dc08d522c81d872565833b85af->enter($__internal_3471b8deb4f3e458ca15be7f1fd1f87a07e5f4dc08d522c81d872565833b85af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b95d9bd068daf82613d86072f288628ad0714bc4cc2e13e8e7c5b8946967b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b95d9bd068daf82613d86072f288628ad0714bc4cc2e13e8e7c5b8946967b50->enter($__internal_8b95d9bd068daf82613d86072f288628ad0714bc4cc2e13e8e7c5b8946967b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b95d9bd068daf82613d86072f288628ad0714bc4cc2e13e8e7c5b8946967b50->leave($__internal_8b95d9bd068daf82613d86072f288628ad0714bc4cc2e13e8e7c5b8946967b50_prof);

        
        $__internal_3471b8deb4f3e458ca15be7f1fd1f87a07e5f4dc08d522c81d872565833b85af->leave($__internal_3471b8deb4f3e458ca15be7f1fd1f87a07e5f4dc08d522c81d872565833b85af_prof);

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
", "ProfesorBundle:Default:profesores_all.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle/Resources/views/Default/profesores_all.html.twig");
    }
}
