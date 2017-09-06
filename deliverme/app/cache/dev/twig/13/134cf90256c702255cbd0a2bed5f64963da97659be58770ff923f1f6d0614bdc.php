<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1e023fe2086357e78b4fd88f7f5b262cc21f267be4da1d39540e63796f76f345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_2f47bf8931177b24fb1578e7e89e0baf82b5f7be77f7a47aabfa1a93aa3676bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f47bf8931177b24fb1578e7e89e0baf82b5f7be77f7a47aabfa1a93aa3676bf->enter($__internal_2f47bf8931177b24fb1578e7e89e0baf82b5f7be77f7a47aabfa1a93aa3676bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f47bf8931177b24fb1578e7e89e0baf82b5f7be77f7a47aabfa1a93aa3676bf->leave($__internal_2f47bf8931177b24fb1578e7e89e0baf82b5f7be77f7a47aabfa1a93aa3676bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de5a2c6a6b74f26c84713c638c3fac77cff43df57df80c2fc2480060af23e3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5a2c6a6b74f26c84713c638c3fac77cff43df57df80c2fc2480060af23e3b8->enter($__internal_de5a2c6a6b74f26c84713c638c3fac77cff43df57df80c2fc2480060af23e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de5a2c6a6b74f26c84713c638c3fac77cff43df57df80c2fc2480060af23e3b8->leave($__internal_de5a2c6a6b74f26c84713c638c3fac77cff43df57df80c2fc2480060af23e3b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d3d880a62830328c2df2213c35b791c010dd7d644103db1e972d6a42b8b267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3d880a62830328c2df2213c35b791c010dd7d644103db1e972d6a42b8b267->enter($__internal_35d3d880a62830328c2df2213c35b791c010dd7d644103db1e972d6a42b8b267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35d3d880a62830328c2df2213c35b791c010dd7d644103db1e972d6a42b8b267->leave($__internal_35d3d880a62830328c2df2213c35b791c010dd7d644103db1e972d6a42b8b267_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
