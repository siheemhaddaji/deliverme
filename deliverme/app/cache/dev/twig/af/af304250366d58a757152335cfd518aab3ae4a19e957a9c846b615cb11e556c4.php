<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c29461c1a01634a03cf35f26d84a41e68fef93a4cf565d1a56a98e247d0c4a7d extends Twig_Template
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
        $__internal_bfbab2fda0a8aea27c413b6676b4822623c7c164e180cc8083d8900fbd3727b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbab2fda0a8aea27c413b6676b4822623c7c164e180cc8083d8900fbd3727b3->enter($__internal_bfbab2fda0a8aea27c413b6676b4822623c7c164e180cc8083d8900fbd3727b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfbab2fda0a8aea27c413b6676b4822623c7c164e180cc8083d8900fbd3727b3->leave($__internal_bfbab2fda0a8aea27c413b6676b4822623c7c164e180cc8083d8900fbd3727b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abde22194e049c905a3571a0b19dc5eaea43839a660692842e30c19ebf233c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde22194e049c905a3571a0b19dc5eaea43839a660692842e30c19ebf233c82->enter($__internal_abde22194e049c905a3571a0b19dc5eaea43839a660692842e30c19ebf233c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abde22194e049c905a3571a0b19dc5eaea43839a660692842e30c19ebf233c82->leave($__internal_abde22194e049c905a3571a0b19dc5eaea43839a660692842e30c19ebf233c82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c16422a1bd933ed91be77b6500301de1af5dfdd68dd959a64502bb7558adec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c16422a1bd933ed91be77b6500301de1af5dfdd68dd959a64502bb7558adec0->enter($__internal_9c16422a1bd933ed91be77b6500301de1af5dfdd68dd959a64502bb7558adec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c16422a1bd933ed91be77b6500301de1af5dfdd68dd959a64502bb7558adec0->leave($__internal_9c16422a1bd933ed91be77b6500301de1af5dfdd68dd959a64502bb7558adec0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73299efd8ea0d9899689bfec20ce1362a5fccb2cb26d22fec2dd075a29940dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73299efd8ea0d9899689bfec20ce1362a5fccb2cb26d22fec2dd075a29940dd8->enter($__internal_73299efd8ea0d9899689bfec20ce1362a5fccb2cb26d22fec2dd075a29940dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73299efd8ea0d9899689bfec20ce1362a5fccb2cb26d22fec2dd075a29940dd8->leave($__internal_73299efd8ea0d9899689bfec20ce1362a5fccb2cb26d22fec2dd075a29940dd8_prof);

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
