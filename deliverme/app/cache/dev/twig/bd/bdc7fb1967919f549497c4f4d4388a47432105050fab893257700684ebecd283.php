<?php

/* @AcmeDemo/Secured/helloadmin.html.twig */
class __TwigTemplate_4cfac3eab5461784e16edd5de8054bbcecbb78e6f74bb1bc517c9b633e98ca6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "@AcmeDemo/Secured/helloadmin.html.twig", 1);
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
        $__internal_ff1a8c1aca1c04ec0adc22f9b75b35da8e502fd41a6efc2228dc838a9c12e356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1a8c1aca1c04ec0adc22f9b75b35da8e502fd41a6efc2228dc838a9c12e356->enter($__internal_ff1a8c1aca1c04ec0adc22f9b75b35da8e502fd41a6efc2228dc838a9c12e356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff1a8c1aca1c04ec0adc22f9b75b35da8e502fd41a6efc2228dc838a9c12e356->leave($__internal_ff1a8c1aca1c04ec0adc22f9b75b35da8e502fd41a6efc2228dc838a9c12e356_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c4d98dda23446b7400aa2bcfc6672409969640df5c5e65bfa024ab711a83e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4d98dda23446b7400aa2bcfc6672409969640df5c5e65bfa024ab711a83e2a->enter($__internal_6c4d98dda23446b7400aa2bcfc6672409969640df5c5e65bfa024ab711a83e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_6c4d98dda23446b7400aa2bcfc6672409969640df5c5e65bfa024ab711a83e2a->leave($__internal_6c4d98dda23446b7400aa2bcfc6672409969640df5c5e65bfa024ab711a83e2a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_00297962714342bd1fd0082678651a923577208138bf8ceccac0b05a3c109dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00297962714342bd1fd0082678651a923577208138bf8ceccac0b05a3c109dbb->enter($__internal_00297962714342bd1fd0082678651a923577208138bf8ceccac0b05a3c109dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_00297962714342bd1fd0082678651a923577208138bf8ceccac0b05a3c109dbb->leave($__internal_00297962714342bd1fd0082678651a923577208138bf8ceccac0b05a3c109dbb_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/helloadmin.html.twig";
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
", "@AcmeDemo/Secured/helloadmin.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Secured\\helloadmin.html.twig");
    }
}
