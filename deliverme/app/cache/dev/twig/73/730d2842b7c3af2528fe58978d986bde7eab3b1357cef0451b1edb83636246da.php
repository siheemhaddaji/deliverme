<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c47268639ac72dc73dce56fd791a395cc59b13f019061e69c3f1e5c79e95ebc8 extends Twig_Template
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
        $__internal_35c15428cea48d36e38a570746924a282ca54e980343f414a266c68f21efd8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c15428cea48d36e38a570746924a282ca54e980343f414a266c68f21efd8b1->enter($__internal_35c15428cea48d36e38a570746924a282ca54e980343f414a266c68f21efd8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35c15428cea48d36e38a570746924a282ca54e980343f414a266c68f21efd8b1->leave($__internal_35c15428cea48d36e38a570746924a282ca54e980343f414a266c68f21efd8b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_052e7814d3a8e5802d85950ed10fe4dc2c4b147bb928aaffb47f961185486632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052e7814d3a8e5802d85950ed10fe4dc2c4b147bb928aaffb47f961185486632->enter($__internal_052e7814d3a8e5802d85950ed10fe4dc2c4b147bb928aaffb47f961185486632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_052e7814d3a8e5802d85950ed10fe4dc2c4b147bb928aaffb47f961185486632->leave($__internal_052e7814d3a8e5802d85950ed10fe4dc2c4b147bb928aaffb47f961185486632_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
