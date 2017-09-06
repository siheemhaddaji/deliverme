<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5edb0ef26b3c465286b2db814b638384aeac288afa81a99a6a0f8dcfaa6adc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_2c48fee3fa135952a982e4b49f07b47938ce4b3212716e762fd257074e9d4ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c48fee3fa135952a982e4b49f07b47938ce4b3212716e762fd257074e9d4ef4->enter($__internal_2c48fee3fa135952a982e4b49f07b47938ce4b3212716e762fd257074e9d4ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c48fee3fa135952a982e4b49f07b47938ce4b3212716e762fd257074e9d4ef4->leave($__internal_2c48fee3fa135952a982e4b49f07b47938ce4b3212716e762fd257074e9d4ef4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6f1184c10e9c3a09a4023a2a23b177ea5aafee81e31466f7bd1079eed5858f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f1184c10e9c3a09a4023a2a23b177ea5aafee81e31466f7bd1079eed5858f8->enter($__internal_f6f1184c10e9c3a09a4023a2a23b177ea5aafee81e31466f7bd1079eed5858f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f6f1184c10e9c3a09a4023a2a23b177ea5aafee81e31466f7bd1079eed5858f8->leave($__internal_f6f1184c10e9c3a09a4023a2a23b177ea5aafee81e31466f7bd1079eed5858f8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
