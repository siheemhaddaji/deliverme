<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e5eb513764e0abf35fa0c58d3365ef9fc1c1398a3a6a414d9094eaaf23cdabdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8ab34b09869e81403bf06d1b30f04f39a1d6cdc69dd014b4be745c69c7e671c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab34b09869e81403bf06d1b30f04f39a1d6cdc69dd014b4be745c69c7e671c8->enter($__internal_8ab34b09869e81403bf06d1b30f04f39a1d6cdc69dd014b4be745c69c7e671c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab34b09869e81403bf06d1b30f04f39a1d6cdc69dd014b4be745c69c7e671c8->leave($__internal_8ab34b09869e81403bf06d1b30f04f39a1d6cdc69dd014b4be745c69c7e671c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5de2064e4d4859fd9d1734619bfaad261acfb36ba781f94f21310b51f61e157c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de2064e4d4859fd9d1734619bfaad261acfb36ba781f94f21310b51f61e157c->enter($__internal_5de2064e4d4859fd9d1734619bfaad261acfb36ba781f94f21310b51f61e157c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5de2064e4d4859fd9d1734619bfaad261acfb36ba781f94f21310b51f61e157c->leave($__internal_5de2064e4d4859fd9d1734619bfaad261acfb36ba781f94f21310b51f61e157c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3a572c18e6eb78e3aa5115ef8042dc2696b1421bab5e5b46f73ad861ca16f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a572c18e6eb78e3aa5115ef8042dc2696b1421bab5e5b46f73ad861ca16f99->enter($__internal_d3a572c18e6eb78e3aa5115ef8042dc2696b1421bab5e5b46f73ad861ca16f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3a572c18e6eb78e3aa5115ef8042dc2696b1421bab5e5b46f73ad861ca16f99->leave($__internal_d3a572c18e6eb78e3aa5115ef8042dc2696b1421bab5e5b46f73ad861ca16f99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a741cb40726560eed190df2ff7c86655c00451e1f357433d513660c01dc98ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a741cb40726560eed190df2ff7c86655c00451e1f357433d513660c01dc98ede->enter($__internal_a741cb40726560eed190df2ff7c86655c00451e1f357433d513660c01dc98ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a741cb40726560eed190df2ff7c86655c00451e1f357433d513660c01dc98ede->leave($__internal_a741cb40726560eed190df2ff7c86655c00451e1f357433d513660c01dc98ede_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
