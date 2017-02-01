<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_041025330dc5030040ef57b36cd9c3001eaa93670c67b82807a66b7caba88128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d10a15bf3c06fd4f5a48ca08a1594b510442c423384f1d28c09b538c63b84f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d10a15bf3c06fd4f5a48ca08a1594b510442c423384f1d28c09b538c63b84f9->enter($__internal_3d10a15bf3c06fd4f5a48ca08a1594b510442c423384f1d28c09b538c63b84f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        $__internal_c9a68f8505b852dc0639593b3286416ef7d9e3070ce8ca9d704c309da36a2b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a68f8505b852dc0639593b3286416ef7d9e3070ce8ca9d704c309da36a2b60->enter($__internal_c9a68f8505b852dc0639593b3286416ef7d9e3070ce8ca9d704c309da36a2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Default:login.html.twig"));

        // line 1
        echo "<body>

  ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "  <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
  ";
        }
        // line 6
        echo "
  <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
  </form>

</body>
";
        
        $__internal_3d10a15bf3c06fd4f5a48ca08a1594b510442c423384f1d28c09b538c63b84f9->leave($__internal_3d10a15bf3c06fd4f5a48ca08a1594b510442c423384f1d28c09b538c63b84f9_prof);

        
        $__internal_c9a68f8505b852dc0639593b3286416ef7d9e3070ce8ca9d704c309da36a2b60->leave($__internal_c9a68f8505b852dc0639593b3286416ef7d9e3070ce8ca9d704c309da36a2b60_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  37 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>

  {% if error %}
  <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
  {% endif %}

  <form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
  </form>

</body>
", "UsuarioBundle:Default:login.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\UsuarioBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
