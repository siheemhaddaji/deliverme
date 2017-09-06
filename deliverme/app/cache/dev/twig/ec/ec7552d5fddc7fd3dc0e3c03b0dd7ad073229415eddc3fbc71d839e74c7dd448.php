<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2a269bff42ab8fe72b767107ef5a582b17f66ac1557c101291ed4fd977f904cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7006eb2e27b75919bd701379d99c1b4922987ea4650ff35ff87cf91368604dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7006eb2e27b75919bd701379d99c1b4922987ea4650ff35ff87cf91368604dfc->enter($__internal_7006eb2e27b75919bd701379d99c1b4922987ea4650ff35ff87cf91368604dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7006eb2e27b75919bd701379d99c1b4922987ea4650ff35ff87cf91368604dfc->leave($__internal_7006eb2e27b75919bd701379d99c1b4922987ea4650ff35ff87cf91368604dfc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d12dfe6091167bf47c7fc3154eee0cb58be60e873ab1bdbe7bb51376bcfd96ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12dfe6091167bf47c7fc3154eee0cb58be60e873ab1bdbe7bb51376bcfd96ac->enter($__internal_d12dfe6091167bf47c7fc3154eee0cb58be60e873ab1bdbe7bb51376bcfd96ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d12dfe6091167bf47c7fc3154eee0cb58be60e873ab1bdbe7bb51376bcfd96ac->leave($__internal_d12dfe6091167bf47c7fc3154eee0cb58be60e873ab1bdbe7bb51376bcfd96ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
