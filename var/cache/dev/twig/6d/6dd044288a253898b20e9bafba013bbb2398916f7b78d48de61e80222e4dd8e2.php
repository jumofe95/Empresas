<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_686426eba17f55cca87ca43f76ff8aa413f1bc2638e84099e865053bfe5ad234 extends Twig_Template
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
        $__internal_5a92753731950fa3ae96307a1e39c742db60b542e9f14e1f76deb4acbd663a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a92753731950fa3ae96307a1e39c742db60b542e9f14e1f76deb4acbd663a66->enter($__internal_5a92753731950fa3ae96307a1e39c742db60b542e9f14e1f76deb4acbd663a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "<body>
ADMIN ZONE
</body>
";
        
        $__internal_5a92753731950fa3ae96307a1e39c742db60b542e9f14e1f76deb4acbd663a66->leave($__internal_5a92753731950fa3ae96307a1e39c742db60b542e9f14e1f76deb4acbd663a66_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
ADMIN ZONE
</body>
", "AdminBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
