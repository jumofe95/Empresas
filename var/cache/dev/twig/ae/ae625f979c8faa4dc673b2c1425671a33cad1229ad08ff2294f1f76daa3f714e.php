<?php

/* ConfigBundle:Default:all_config.html.twig */
class __TwigTemplate_740c9ce677db2763e3c8108e889d32ba989383b4571a9f35838ec72ebeef56c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ConfigBundle:Default:all_config.html.twig", 1);
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
        $__internal_180a7e81dff3226e4ee3e742c287e65868a31ade5c89a20be09b945bf8ec2902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180a7e81dff3226e4ee3e742c287e65868a31ade5c89a20be09b945bf8ec2902->enter($__internal_180a7e81dff3226e4ee3e742c287e65868a31ade5c89a20be09b945bf8ec2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:all_config.html.twig"));

        $__internal_cb95633e424245850acdc84ac6b8772237d2d9abcaec5c88a543fc88e7e9c648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb95633e424245850acdc84ac6b8772237d2d9abcaec5c88a543fc88e7e9c648->enter($__internal_cb95633e424245850acdc84ac6b8772237d2d9abcaec5c88a543fc88e7e9c648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConfigBundle:Default:all_config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180a7e81dff3226e4ee3e742c287e65868a31ade5c89a20be09b945bf8ec2902->leave($__internal_180a7e81dff3226e4ee3e742c287e65868a31ade5c89a20be09b945bf8ec2902_prof);

        
        $__internal_cb95633e424245850acdc84ac6b8772237d2d9abcaec5c88a543fc88e7e9c648->leave($__internal_cb95633e424245850acdc84ac6b8772237d2d9abcaec5c88a543fc88e7e9c648_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3574d76b1dd0fb5591042f5a37e29149cf8529d5b5d883d280176593b2de29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3574d76b1dd0fb5591042f5a37e29149cf8529d5b5d883d280176593b2de29e->enter($__internal_f3574d76b1dd0fb5591042f5a37e29149cf8529d5b5d883d280176593b2de29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc65f1d9157f4ff57910760960619c63d249971c3c19fc39f6286eb364355803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc65f1d9157f4ff57910760960619c63d249971c3c19fc39f6286eb364355803->enter($__internal_fc65f1d9157f4ff57910760960619c63d249971c3c19fc39f6286eb364355803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div align=\"center\"><h1>CONFIGURACIONES</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>PARAM</th>
      <th>CONFIG</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 12
            echo "    <tr>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "id", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "param", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "config", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </table>
</div>
";
        
        $__internal_fc65f1d9157f4ff57910760960619c63d249971c3c19fc39f6286eb364355803->leave($__internal_fc65f1d9157f4ff57910760960619c63d249971c3c19fc39f6286eb364355803_prof);

        
        $__internal_f3574d76b1dd0fb5591042f5a37e29149cf8529d5b5d883d280176593b2de29e->leave($__internal_f3574d76b1dd0fb5591042f5a37e29149cf8529d5b5d883d280176593b2de29e_prof);

    }

    public function getTemplateName()
    {
        return "ConfigBundle:Default:all_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
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
<div align=\"center\"><h1>CONFIGURACIONES</h1></div>
<div align=\"center\">
  <table>
    <tr>
      <th>#</th>
      <th>PARAM</th>
      <th>CONFIG</th>
    </tr>
    {% for config in configs %}
    <tr>
      <td>{{ config.id }}</td>
      <td>{{ config.param }}</td>
      <td>{{ config.config }}</td>
    </tr>
    {% endfor %}
  </table>
</div>
{% endblock %}
", "ConfigBundle:Default:all_config.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ConfigBundle/Resources/views/Default/all_config.html.twig");
    }
}
