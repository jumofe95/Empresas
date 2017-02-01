<?php

/* ProfesorBundle:Default:index.html.twig */
class __TwigTemplate_6e61b35e4a747e55ceb995a4d6153c2578adb9967c46289296d6f2c8a471cb3e extends Twig_Template
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
        $__internal_e9d76e6dd818895550d5ed62ebad2c3789fd4fa51648fd081826db7b8d5402fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d76e6dd818895550d5ed62ebad2c3789fd4fa51648fd081826db7b8d5402fd->enter($__internal_e9d76e6dd818895550d5ed62ebad2c3789fd4fa51648fd081826db7b8d5402fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:index.html.twig"));

        $__internal_3b756c0b9e482941d33c7b9c390826fdd3977e7ef1a9bb38a32efdd9125428d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b756c0b9e482941d33c7b9c390826fdd3977e7ef1a9bb38a32efdd9125428d9->enter($__internal_3b756c0b9e482941d33c7b9c390826fdd3977e7ef1a9bb38a32efdd9125428d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfesorBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e9d76e6dd818895550d5ed62ebad2c3789fd4fa51648fd081826db7b8d5402fd->leave($__internal_e9d76e6dd818895550d5ed62ebad2c3789fd4fa51648fd081826db7b8d5402fd_prof);

        
        $__internal_3b756c0b9e482941d33c7b9c390826fdd3977e7ef1a9bb38a32efdd9125428d9->leave($__internal_3b756c0b9e482941d33c7b9c390826fdd3977e7ef1a9bb38a32efdd9125428d9_prof);

    }

    public function getTemplateName()
    {
        return "ProfesorBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ProfesorBundle:Default:index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle/Resources/views/Default/index.html.twig");
    }
}
