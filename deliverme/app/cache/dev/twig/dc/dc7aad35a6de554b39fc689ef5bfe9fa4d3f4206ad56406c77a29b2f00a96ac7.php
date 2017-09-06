<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_7769d39008194aaaa0b5653108051f504d5962280a54f56e4e6ab22c91a3fdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:helloadmin.html.twig", 1);
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
        $__internal_1a1ac308ff58b3e30421836dd24891153dc05b7abd984ed2f61d2928ba457a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1ac308ff58b3e30421836dd24891153dc05b7abd984ed2f61d2928ba457a44->enter($__internal_1a1ac308ff58b3e30421836dd24891153dc05b7abd984ed2f61d2928ba457a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a1ac308ff58b3e30421836dd24891153dc05b7abd984ed2f61d2928ba457a44->leave($__internal_1a1ac308ff58b3e30421836dd24891153dc05b7abd984ed2f61d2928ba457a44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96e2c13414e38747f9377962af4c9ed8fe75076e31cceefc909663014d8590ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e2c13414e38747f9377962af4c9ed8fe75076e31cceefc909663014d8590ce->enter($__internal_96e2c13414e38747f9377962af4c9ed8fe75076e31cceefc909663014d8590ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_96e2c13414e38747f9377962af4c9ed8fe75076e31cceefc909663014d8590ce->leave($__internal_96e2c13414e38747f9377962af4c9ed8fe75076e31cceefc909663014d8590ce_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9156bdc9bf432bb9fddb73477fca6696d35bf264b3e8b08247f08abf77ea8219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9156bdc9bf432bb9fddb73477fca6696d35bf264b3e8b08247f08abf77ea8219->enter($__internal_9156bdc9bf432bb9fddb73477fca6696d35bf264b3e8b08247f08abf77ea8219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_9156bdc9bf432bb9fddb73477fca6696d35bf264b3e8b08247f08abf77ea8219->leave($__internal_9156bdc9bf432bb9fddb73477fca6696d35bf264b3e8b08247f08abf77ea8219_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
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
        return new Twig_Source("{% extends \"AcmeDemoBundle:Secured:layout.html.twig\" %}

{% block title \"Hello \" ~ name %}

{% block content %}
    <h1 class=\"title\">Hello {{ name }} secured for Admins only!</h1>
{% endblock %}

{% set code = code(_self) %}
", "AcmeDemoBundle:Secured:helloadmin.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Secured/helloadmin.html.twig");
    }
}
