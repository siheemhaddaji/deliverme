<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_c513e567e3077a9a347fa30c45c7e5bef4fc970aed3a1cdcc967124fa2a43adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90aef618f7d186719837317dc1caae82853ba111d96d8c71cffa5b3470391c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90aef618f7d186719837317dc1caae82853ba111d96d8c71cffa5b3470391c15->enter($__internal_90aef618f7d186719837317dc1caae82853ba111d96d8c71cffa5b3470391c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90aef618f7d186719837317dc1caae82853ba111d96d8c71cffa5b3470391c15->leave($__internal_90aef618f7d186719837317dc1caae82853ba111d96d8c71cffa5b3470391c15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2726b7e76dbafbb30b63c32c570be8a7f2c0eefaf486f303bd018c87285309fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2726b7e76dbafbb30b63c32c570be8a7f2c0eefaf486f303bd018c87285309fe->enter($__internal_2726b7e76dbafbb30b63c32c570be8a7f2c0eefaf486f303bd018c87285309fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_2726b7e76dbafbb30b63c32c570be8a7f2c0eefaf486f303bd018c87285309fe->leave($__internal_2726b7e76dbafbb30b63c32c570be8a7f2c0eefaf486f303bd018c87285309fe_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_13e949c1cbbcee241662a11ed0091465106eee5afb4f5f5e58b8bd2aba02efc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e949c1cbbcee241662a11ed0091465106eee5afb4f5f5e58b8bd2aba02efc4->enter($__internal_13e949c1cbbcee241662a11ed0091465106eee5afb4f5f5e58b8bd2aba02efc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_13e949c1cbbcee241662a11ed0091465106eee5afb4f5f5e58b8bd2aba02efc4->leave($__internal_13e949c1cbbcee241662a11ed0091465106eee5afb4f5f5e58b8bd2aba02efc4_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_7089bb17382f75cd62909ff93f8836faf279a3d336124059da91ef1593379496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7089bb17382f75cd62909ff93f8836faf279a3d336124059da91ef1593379496->enter($__internal_7089bb17382f75cd62909ff93f8836faf279a3d336124059da91ef1593379496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
        
        $__internal_7089bb17382f75cd62909ff93f8836faf279a3d336124059da91ef1593379496->leave($__internal_7089bb17382f75cd62909ff93f8836faf279a3d336124059da91ef1593379496_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AcmeDemoBundle::layout.html.twig\" %}

{% block title \"Symfony - Demos\" %}

{% block content_header '' %}

{% block content %}
    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"{{ path('_demo_hello', {'name': 'World'}) }}\">Hello World</a></li>
        <li><a href=\"{{ path('_demo_secured_hello', {'name': 'World'}) }}\">Access the secured area</a> <a href=\"{{ path('_demo_login') }}\">Go to the login page</a></li>
        {# <li><a href=\"{{ path('_demo_contact') }}\">Send a Message</a></li> #}
    </ul>
{% endblock %}
", "AcmeDemoBundle:Demo:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Demo/index.html.twig");
    }
}
