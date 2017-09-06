<?php

/* @AcmeDemo/Secured/hello.html.twig */
class __TwigTemplate_250f0aba303c3f3f9b6bb0015a4e70afa9159d0164ae3ca19dc69b4ba58cead5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "@AcmeDemo/Secured/hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_966a7984227b36f408f4c716c166300d580dabc1955ff3411b2786b31f4ad6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966a7984227b36f408f4c716c166300d580dabc1955ff3411b2786b31f4ad6aa->enter($__internal_966a7984227b36f408f4c716c166300d580dabc1955ff3411b2786b31f4ad6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_966a7984227b36f408f4c716c166300d580dabc1955ff3411b2786b31f4ad6aa->leave($__internal_966a7984227b36f408f4c716c166300d580dabc1955ff3411b2786b31f4ad6aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce4fff5ef4821270c65cba9dca2d1df18383727b53b272c6db74760e4cff708a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4fff5ef4821270c65cba9dca2d1df18383727b53b272c6db74760e4cff708a->enter($__internal_ce4fff5ef4821270c65cba9dca2d1df18383727b53b272c6db74760e4cff708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_ce4fff5ef4821270c65cba9dca2d1df18383727b53b272c6db74760e4cff708a->leave($__internal_ce4fff5ef4821270c65cba9dca2d1df18383727b53b272c6db74760e4cff708a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_53a72d9c267a63d1bf30bab762c250fabe31f77bd58f9c07454e068fed1d909f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a72d9c267a63d1bf30bab762c250fabe31f77bd58f9c07454e068fed1d909f->enter($__internal_53a72d9c267a63d1bf30bab762c250fabe31f77bd58f9c07454e068fed1d909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_53a72d9c267a63d1bf30bab762c250fabe31f77bd58f9c07454e068fed1d909f->leave($__internal_53a72d9c267a63d1bf30bab762c250fabe31f77bd58f9c07454e068fed1d909f_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AcmeDemoBundle:Secured:layout.html.twig\" %}

{% block title \"Hello \" ~ name %}

{% block content %}
    <h1 class=\"title\">Hello {{ name }}!</h1>

    <a href=\"{{ path('_demo_secured_hello_admin', { 'name': name }) }}\">Hello resource secured for <strong>admin</strong> only.</a>
{% endblock %}

{% set code = code(_self) %}
", "@AcmeDemo/Secured/hello.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Secured\\hello.html.twig");
    }
}
