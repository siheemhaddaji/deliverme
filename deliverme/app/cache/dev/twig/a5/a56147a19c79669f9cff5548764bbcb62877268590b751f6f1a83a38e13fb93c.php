<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_dfcbfd04e152eebf02dbad78d955bb9dc3583d7141feeda59f5e181ccb38c5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f11999e1690b50d53b2a4a6188706bc1deda198e2220008742101c797af8ccac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11999e1690b50d53b2a4a6188706bc1deda198e2220008742101c797af8ccac->enter($__internal_f11999e1690b50d53b2a4a6188706bc1deda198e2220008742101c797af8ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11999e1690b50d53b2a4a6188706bc1deda198e2220008742101c797af8ccac->leave($__internal_f11999e1690b50d53b2a4a6188706bc1deda198e2220008742101c797af8ccac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a05b09d5a0723822a806bc69dd3322666be320f0e0d533fcb64dd33a9b79b1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05b09d5a0723822a806bc69dd3322666be320f0e0d533fcb64dd33a9b79b1ba->enter($__internal_a05b09d5a0723822a806bc69dd3322666be320f0e0d533fcb64dd33a9b79b1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a05b09d5a0723822a806bc69dd3322666be320f0e0d533fcb64dd33a9b79b1ba->leave($__internal_a05b09d5a0723822a806bc69dd3322666be320f0e0d533fcb64dd33a9b79b1ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
