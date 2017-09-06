<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_eaefd384e171fbe58a816aac4f3cb36a2e42d6d4b6df7eb26d900c62a1dbcdf6 extends Twig_Template
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
        $__internal_d4ea1cb19a99dc7cdeaf11ef38c89c24ac5a7ca209d60dc29c549ae107928d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ea1cb19a99dc7cdeaf11ef38c89c24ac5a7ca209d60dc29c549ae107928d73->enter($__internal_d4ea1cb19a99dc7cdeaf11ef38c89c24ac5a7ca209d60dc29c549ae107928d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d4ea1cb19a99dc7cdeaf11ef38c89c24ac5a7ca209d60dc29c549ae107928d73->leave($__internal_d4ea1cb19a99dc7cdeaf11ef38c89c24ac5a7ca209d60dc29c549ae107928d73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
