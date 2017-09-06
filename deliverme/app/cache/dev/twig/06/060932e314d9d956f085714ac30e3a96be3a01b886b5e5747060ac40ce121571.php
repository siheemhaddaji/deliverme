<?php

/* @Frontend/index.html.twig */
class __TwigTemplate_96f0c16143b0fb2e4d4c37af69b96538e84881b7b5b56828a9ed16c838161bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::index.html.twig", "@Frontend/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8042e462398a322b8b49b050ab583146ca52967e53f3c036208449ef5ba141e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8042e462398a322b8b49b050ab583146ca52967e53f3c036208449ef5ba141e9->enter($__internal_8042e462398a322b8b49b050ab583146ca52967e53f3c036208449ef5ba141e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8042e462398a322b8b49b050ab583146ca52967e53f3c036208449ef5ba141e9->leave($__internal_8042e462398a322b8b49b050ab583146ca52967e53f3c036208449ef5ba141e9_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::index.html.twig' %} 

", "@Frontend/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\index.html.twig");
    }
}
