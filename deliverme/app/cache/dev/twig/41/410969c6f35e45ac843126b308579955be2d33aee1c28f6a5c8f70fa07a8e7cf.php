<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c62977d98153190fe52452abbc5a108cd212d9f5917047b98bad84e2c25d1c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_439c5bdf9085ca51f791517226ce97c64e87d221c7a71f0a6cba6d41de26c6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439c5bdf9085ca51f791517226ce97c64e87d221c7a71f0a6cba6d41de26c6b8->enter($__internal_439c5bdf9085ca51f791517226ce97c64e87d221c7a71f0a6cba6d41de26c6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439c5bdf9085ca51f791517226ce97c64e87d221c7a71f0a6cba6d41de26c6b8->leave($__internal_439c5bdf9085ca51f791517226ce97c64e87d221c7a71f0a6cba6d41de26c6b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6de16645885247b39a630a82996a68aa667fc4678c2af2c0ea9575f9f31b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6de16645885247b39a630a82996a68aa667fc4678c2af2c0ea9575f9f31b2b->enter($__internal_ff6de16645885247b39a630a82996a68aa667fc4678c2af2c0ea9575f9f31b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff6de16645885247b39a630a82996a68aa667fc4678c2af2c0ea9575f9f31b2b->leave($__internal_ff6de16645885247b39a630a82996a68aa667fc4678c2af2c0ea9575f9f31b2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaec69beb41838b7e8d54d39aa4ee8ee1d9c2f0631f7bb454f1a7420ddd03dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaec69beb41838b7e8d54d39aa4ee8ee1d9c2f0631f7bb454f1a7420ddd03dd4->enter($__internal_eaec69beb41838b7e8d54d39aa4ee8ee1d9c2f0631f7bb454f1a7420ddd03dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eaec69beb41838b7e8d54d39aa4ee8ee1d9c2f0631f7bb454f1a7420ddd03dd4->leave($__internal_eaec69beb41838b7e8d54d39aa4ee8ee1d9c2f0631f7bb454f1a7420ddd03dd4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
