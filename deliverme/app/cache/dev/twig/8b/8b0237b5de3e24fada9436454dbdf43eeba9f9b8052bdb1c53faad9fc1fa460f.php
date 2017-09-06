<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_52256ac773c6323b7a04b457d26585f97686eded73a35f9b3390868c8eb5bb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e986e18d57e58717857a2ef99fb1362b9600d419d9dc69ca19211c722f836fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e986e18d57e58717857a2ef99fb1362b9600d419d9dc69ca19211c722f836fad->enter($__internal_e986e18d57e58717857a2ef99fb1362b9600d419d9dc69ca19211c722f836fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e986e18d57e58717857a2ef99fb1362b9600d419d9dc69ca19211c722f836fad->leave($__internal_e986e18d57e58717857a2ef99fb1362b9600d419d9dc69ca19211c722f836fad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7cf7bd5034cfd4f0dd2efb743369d532e0e9a2e1389a3021c01b59b70021847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cf7bd5034cfd4f0dd2efb743369d532e0e9a2e1389a3021c01b59b70021847->enter($__internal_c7cf7bd5034cfd4f0dd2efb743369d532e0e9a2e1389a3021c01b59b70021847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c7cf7bd5034cfd4f0dd2efb743369d532e0e9a2e1389a3021c01b59b70021847->leave($__internal_c7cf7bd5034cfd4f0dd2efb743369d532e0e9a2e1389a3021c01b59b70021847_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
