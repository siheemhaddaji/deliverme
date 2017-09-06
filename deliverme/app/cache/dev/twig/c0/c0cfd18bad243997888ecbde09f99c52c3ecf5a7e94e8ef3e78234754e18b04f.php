<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_5bea2fe92922f6bcc65f076bab752a3aec9dc3fb2bda9895ffaf8637530cd022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:hello.html.twig", 1);
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
        $__internal_f0135d33c2875caab4bb08d72de28e35a45a35cdabf49e5c0ca6a7967ccffae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0135d33c2875caab4bb08d72de28e35a45a35cdabf49e5c0ca6a7967ccffae0->enter($__internal_f0135d33c2875caab4bb08d72de28e35a45a35cdabf49e5c0ca6a7967ccffae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0135d33c2875caab4bb08d72de28e35a45a35cdabf49e5c0ca6a7967ccffae0->leave($__internal_f0135d33c2875caab4bb08d72de28e35a45a35cdabf49e5c0ca6a7967ccffae0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74aed8d700c67200425ecc0c38b4e9116ae973e70838573ac7f1fbbcde1d719e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74aed8d700c67200425ecc0c38b4e9116ae973e70838573ac7f1fbbcde1d719e->enter($__internal_74aed8d700c67200425ecc0c38b4e9116ae973e70838573ac7f1fbbcde1d719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_74aed8d700c67200425ecc0c38b4e9116ae973e70838573ac7f1fbbcde1d719e->leave($__internal_74aed8d700c67200425ecc0c38b4e9116ae973e70838573ac7f1fbbcde1d719e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_51c18ef71529376cf28b05f86843e51f98d6a0a4fb512bb5e8662bd065ac8659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c18ef71529376cf28b05f86843e51f98d6a0a4fb512bb5e8662bd065ac8659->enter($__internal_51c18ef71529376cf28b05f86843e51f98d6a0a4fb512bb5e8662bd065ac8659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_51c18ef71529376cf28b05f86843e51f98d6a0a4fb512bb5e8662bd065ac8659->leave($__internal_51c18ef71529376cf28b05f86843e51f98d6a0a4fb512bb5e8662bd065ac8659_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
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
", "AcmeDemoBundle:Demo:hello.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Demo/hello.html.twig");
    }
}
