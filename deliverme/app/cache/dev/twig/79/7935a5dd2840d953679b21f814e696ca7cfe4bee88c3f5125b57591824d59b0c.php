<?php

/* @AcmeDemo/Demo/hello.html.twig */
class __TwigTemplate_f964572ff311659b65e9ba644b46d1f63ac26f5739db6145b5b9e09c4d7b6ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_620ed6920ddfc358499a05a3ee93f7d7af04d9b2e40b368d393c5792cae6e7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620ed6920ddfc358499a05a3ee93f7d7af04d9b2e40b368d393c5792cae6e7f8->enter($__internal_620ed6920ddfc358499a05a3ee93f7d7af04d9b2e40b368d393c5792cae6e7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620ed6920ddfc358499a05a3ee93f7d7af04d9b2e40b368d393c5792cae6e7f8->leave($__internal_620ed6920ddfc358499a05a3ee93f7d7af04d9b2e40b368d393c5792cae6e7f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33fca2d2400f2ed3a132214ee9758578fca9bf408a293e64cadcdb738fb8dac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fca2d2400f2ed3a132214ee9758578fca9bf408a293e64cadcdb738fb8dac8->enter($__internal_33fca2d2400f2ed3a132214ee9758578fca9bf408a293e64cadcdb738fb8dac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_33fca2d2400f2ed3a132214ee9758578fca9bf408a293e64cadcdb738fb8dac8->leave($__internal_33fca2d2400f2ed3a132214ee9758578fca9bf408a293e64cadcdb738fb8dac8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_99c6a6651b4cd0427f930e16d2bf0f17af5f46e8ce43a44c39efa280c0a03f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c6a6651b4cd0427f930e16d2bf0f17af5f46e8ce43a44c39efa280c0a03f08->enter($__internal_99c6a6651b4cd0427f930e16d2bf0f17af5f46e8ce43a44c39efa280c0a03f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_99c6a6651b4cd0427f930e16d2bf0f17af5f46e8ce43a44c39efa280c0a03f08->leave($__internal_99c6a6651b4cd0427f930e16d2bf0f17af5f46e8ce43a44c39efa280c0a03f08_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
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

{% block title \"Hello \" ~ name %}

{% block content %}
    <h1>Hello {{ name }}!</h1>
{% endblock %}

{% set code = code(_self) %}
", "@AcmeDemo/Demo/hello.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Demo\\hello.html.twig");
    }
}
