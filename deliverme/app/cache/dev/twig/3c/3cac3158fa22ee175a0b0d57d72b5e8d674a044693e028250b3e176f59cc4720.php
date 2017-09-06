<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62cca2a1cd89873f30d57a18f3c6cff0f897f3b1b3444c7d20f1b226915caae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_279320267dfe02e650f358b737e8ae3611d606492f88b7967a2c4ca41233d3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279320267dfe02e650f358b737e8ae3611d606492f88b7967a2c4ca41233d3b2->enter($__internal_279320267dfe02e650f358b737e8ae3611d606492f88b7967a2c4ca41233d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279320267dfe02e650f358b737e8ae3611d606492f88b7967a2c4ca41233d3b2->leave($__internal_279320267dfe02e650f358b737e8ae3611d606492f88b7967a2c4ca41233d3b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_380f756e56601ff736d5f2ec8bbdd63ec5d11c6d5bfbb1d77481ce125b93a15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380f756e56601ff736d5f2ec8bbdd63ec5d11c6d5bfbb1d77481ce125b93a15e->enter($__internal_380f756e56601ff736d5f2ec8bbdd63ec5d11c6d5bfbb1d77481ce125b93a15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_380f756e56601ff736d5f2ec8bbdd63ec5d11c6d5bfbb1d77481ce125b93a15e->leave($__internal_380f756e56601ff736d5f2ec8bbdd63ec5d11c6d5bfbb1d77481ce125b93a15e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf76f02b1ff7bda20a5fe9a9a4edc5c6fffd7358fb87f7a441a415d5a12680cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf76f02b1ff7bda20a5fe9a9a4edc5c6fffd7358fb87f7a441a415d5a12680cb->enter($__internal_bf76f02b1ff7bda20a5fe9a9a4edc5c6fffd7358fb87f7a441a415d5a12680cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf76f02b1ff7bda20a5fe9a9a4edc5c6fffd7358fb87f7a441a415d5a12680cb->leave($__internal_bf76f02b1ff7bda20a5fe9a9a4edc5c6fffd7358fb87f7a441a415d5a12680cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6888e520de994b2e5b6c4e6bd3d3a93d926586950af49dc7205efa46e9fa90cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6888e520de994b2e5b6c4e6bd3d3a93d926586950af49dc7205efa46e9fa90cb->enter($__internal_6888e520de994b2e5b6c4e6bd3d3a93d926586950af49dc7205efa46e9fa90cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6888e520de994b2e5b6c4e6bd3d3a93d926586950af49dc7205efa46e9fa90cb->leave($__internal_6888e520de994b2e5b6c4e6bd3d3a93d926586950af49dc7205efa46e9fa90cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
