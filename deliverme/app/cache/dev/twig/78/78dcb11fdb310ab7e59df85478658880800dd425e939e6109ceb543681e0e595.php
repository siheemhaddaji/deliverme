<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4b71714ef2a97058d4ecf0d84a8ad7031d9c4dbfb2127d255c1492db9c744c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4b33088481dac3415d32603513e4f88b311585679f5648b69b67785a141039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4b33088481dac3415d32603513e4f88b311585679f5648b69b67785a141039->enter($__internal_9e4b33088481dac3415d32603513e4f88b311585679f5648b69b67785a141039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e4b33088481dac3415d32603513e4f88b311585679f5648b69b67785a141039->leave($__internal_9e4b33088481dac3415d32603513e4f88b311585679f5648b69b67785a141039_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f652bc91a69ef53c4be0a98ebeb0affc6caf5fe05e3904346163ff525c3a016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f652bc91a69ef53c4be0a98ebeb0affc6caf5fe05e3904346163ff525c3a016->enter($__internal_1f652bc91a69ef53c4be0a98ebeb0affc6caf5fe05e3904346163ff525c3a016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1f652bc91a69ef53c4be0a98ebeb0affc6caf5fe05e3904346163ff525c3a016->leave($__internal_1f652bc91a69ef53c4be0a98ebeb0affc6caf5fe05e3904346163ff525c3a016_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
