<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_deaeb1cc1f2bd7f4ba119e486223d3a83cecd1d294c3593233d2468f207d7598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:hello.html.twig", 1);
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
        $__internal_7314e9ad81d0b217ffbf674b7953505c86630d736b8591c4231f2a4ee8106b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314e9ad81d0b217ffbf674b7953505c86630d736b8591c4231f2a4ee8106b44->enter($__internal_7314e9ad81d0b217ffbf674b7953505c86630d736b8591c4231f2a4ee8106b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7314e9ad81d0b217ffbf674b7953505c86630d736b8591c4231f2a4ee8106b44->leave($__internal_7314e9ad81d0b217ffbf674b7953505c86630d736b8591c4231f2a4ee8106b44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30920aff7feee7ce9844d0afb5348a00a2bbfb50bae8737e675d6ff1c02b0106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30920aff7feee7ce9844d0afb5348a00a2bbfb50bae8737e675d6ff1c02b0106->enter($__internal_30920aff7feee7ce9844d0afb5348a00a2bbfb50bae8737e675d6ff1c02b0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_30920aff7feee7ce9844d0afb5348a00a2bbfb50bae8737e675d6ff1c02b0106->leave($__internal_30920aff7feee7ce9844d0afb5348a00a2bbfb50bae8737e675d6ff1c02b0106_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d46db5a523ddd982642ed0efd47606b16072b4a0da989f42a2569cc8544c272f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46db5a523ddd982642ed0efd47606b16072b4a0da989f42a2569cc8544c272f->enter($__internal_d46db5a523ddd982642ed0efd47606b16072b4a0da989f42a2569cc8544c272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_d46db5a523ddd982642ed0efd47606b16072b4a0da989f42a2569cc8544c272f->leave($__internal_d46db5a523ddd982642ed0efd47606b16072b4a0da989f42a2569cc8544c272f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
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
", "AcmeDemoBundle:Secured:hello.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Secured/hello.html.twig");
    }
}
