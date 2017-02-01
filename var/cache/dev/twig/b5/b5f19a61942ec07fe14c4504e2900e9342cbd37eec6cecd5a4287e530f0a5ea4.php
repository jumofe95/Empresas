<?php

/* @Profesor/Default/index.html.twig */
class __TwigTemplate_9daab0b8f2c72d0290e50334709b6414e2d1ed654a788309cc1a22b02bbe0b98 extends Twig_Template
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
        $__internal_14de62c26609555522b40f4954b57ae4412731b9b9fd6df5c4c831bafffee717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14de62c26609555522b40f4954b57ae4412731b9b9fd6df5c4c831bafffee717->enter($__internal_14de62c26609555522b40f4954b57ae4412731b9b9fd6df5c4c831bafffee717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/index.html.twig"));

        $__internal_ad4de4615328e2d84b357940847fec654eed5a6ac689d78c7f5db9cde66ad37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4de4615328e2d84b357940847fec654eed5a6ac689d78c7f5db9cde66ad37e->enter($__internal_ad4de4615328e2d84b357940847fec654eed5a6ac689d78c7f5db9cde66ad37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profesor/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_14de62c26609555522b40f4954b57ae4412731b9b9fd6df5c4c831bafffee717->leave($__internal_14de62c26609555522b40f4954b57ae4412731b9b9fd6df5c4c831bafffee717_prof);

        
        $__internal_ad4de4615328e2d84b357940847fec654eed5a6ac689d78c7f5db9cde66ad37e->leave($__internal_ad4de4615328e2d84b357940847fec654eed5a6ac689d78c7f5db9cde66ad37e_prof);

    }

    public function getTemplateName()
    {
        return "@Profesor/Default/index.html.twig";
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
", "@Profesor/Default/index.html.twig", "C:\\xampp\\symfony\\Empresas\\src\\ProfesorBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
