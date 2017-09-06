<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_41240be520c8128c1f93f1764fc448798ab6af4dc5e792d271d6b71aeeec80a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aca69fae4e1304bc69c42e4ef493070487795fe97c59e9314b83ef1e332f785b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca69fae4e1304bc69c42e4ef493070487795fe97c59e9314b83ef1e332f785b->enter($__internal_aca69fae4e1304bc69c42e4ef493070487795fe97c59e9314b83ef1e332f785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca69fae4e1304bc69c42e4ef493070487795fe97c59e9314b83ef1e332f785b->leave($__internal_aca69fae4e1304bc69c42e4ef493070487795fe97c59e9314b83ef1e332f785b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a16d32a521b37fd42a5462dd3577f5eedc679e305bab93bcf345b02758533416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16d32a521b37fd42a5462dd3577f5eedc679e305bab93bcf345b02758533416->enter($__internal_a16d32a521b37fd42a5462dd3577f5eedc679e305bab93bcf345b02758533416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a16d32a521b37fd42a5462dd3577f5eedc679e305bab93bcf345b02758533416->leave($__internal_a16d32a521b37fd42a5462dd3577f5eedc679e305bab93bcf345b02758533416_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3d0a037cf7623676a15b1d07e4c2eb22d5f119bbf3531a303bf736cf368ff24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d0a037cf7623676a15b1d07e4c2eb22d5f119bbf3531a303bf736cf368ff24->enter($__internal_e3d0a037cf7623676a15b1d07e4c2eb22d5f119bbf3531a303bf736cf368ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e3d0a037cf7623676a15b1d07e4c2eb22d5f119bbf3531a303bf736cf368ff24->leave($__internal_e3d0a037cf7623676a15b1d07e4c2eb22d5f119bbf3531a303bf736cf368ff24_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_489418fbf38057300267bf59a8ca7dae021fa982ca23c5fb558f40bb77e91011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489418fbf38057300267bf59a8ca7dae021fa982ca23c5fb558f40bb77e91011->enter($__internal_489418fbf38057300267bf59a8ca7dae021fa982ca23c5fb558f40bb77e91011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_489418fbf38057300267bf59a8ca7dae021fa982ca23c5fb558f40bb77e91011->leave($__internal_489418fbf38057300267bf59a8ca7dae021fa982ca23c5fb558f40bb77e91011_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2cc1d554bf1029801e55ff2628a051ae26d4304e1da82e400e46b611a3adb631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc1d554bf1029801e55ff2628a051ae26d4304e1da82e400e46b611a3adb631->enter($__internal_2cc1d554bf1029801e55ff2628a051ae26d4304e1da82e400e46b611a3adb631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2cc1d554bf1029801e55ff2628a051ae26d4304e1da82e400e46b611a3adb631->leave($__internal_2cc1d554bf1029801e55ff2628a051ae26d4304e1da82e400e46b611a3adb631_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
