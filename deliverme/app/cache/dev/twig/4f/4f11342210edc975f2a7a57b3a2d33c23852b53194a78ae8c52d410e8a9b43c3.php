<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_258d8ab066de7a0d0fc153e8abb1a753593bf6d66fefaec2051665e2840ead06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ce279c24e9ab1ddf77b485eed9f3d104d3cb2cc9b8799e3dc079c7c2c9859c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce279c24e9ab1ddf77b485eed9f3d104d3cb2cc9b8799e3dc079c7c2c9859c4->enter($__internal_3ce279c24e9ab1ddf77b485eed9f3d104d3cb2cc9b8799e3dc079c7c2c9859c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce279c24e9ab1ddf77b485eed9f3d104d3cb2cc9b8799e3dc079c7c2c9859c4->leave($__internal_3ce279c24e9ab1ddf77b485eed9f3d104d3cb2cc9b8799e3dc079c7c2c9859c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0437152fce6abbe54190506fcb3ae2fb00726e43c89040dba5e4bcdc10e3da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0437152fce6abbe54190506fcb3ae2fb00726e43c89040dba5e4bcdc10e3da7->enter($__internal_f0437152fce6abbe54190506fcb3ae2fb00726e43c89040dba5e4bcdc10e3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f0437152fce6abbe54190506fcb3ae2fb00726e43c89040dba5e4bcdc10e3da7->leave($__internal_f0437152fce6abbe54190506fcb3ae2fb00726e43c89040dba5e4bcdc10e3da7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b6d347b9fd6cb9cf8a7666872b501c26e55edbf035d0621036bbd5ecdb2c160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6d347b9fd6cb9cf8a7666872b501c26e55edbf035d0621036bbd5ecdb2c160->enter($__internal_4b6d347b9fd6cb9cf8a7666872b501c26e55edbf035d0621036bbd5ecdb2c160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b6d347b9fd6cb9cf8a7666872b501c26e55edbf035d0621036bbd5ecdb2c160->leave($__internal_4b6d347b9fd6cb9cf8a7666872b501c26e55edbf035d0621036bbd5ecdb2c160_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb2a11f2e5557ec57e3d03810a76193c13a68bc22183e9a333b19824b6835e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2a11f2e5557ec57e3d03810a76193c13a68bc22183e9a333b19824b6835e57->enter($__internal_cb2a11f2e5557ec57e3d03810a76193c13a68bc22183e9a333b19824b6835e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb2a11f2e5557ec57e3d03810a76193c13a68bc22183e9a333b19824b6835e57->leave($__internal_cb2a11f2e5557ec57e3d03810a76193c13a68bc22183e9a333b19824b6835e57_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
