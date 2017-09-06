<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_31a59058731c327a2371b4a2121a0517a919891ab1833d4c54abf9f36a914948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e3c378e8caa9881591e58897985dbd869b3aaaad7d9dd37e2a750b8d299e252a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c378e8caa9881591e58897985dbd869b3aaaad7d9dd37e2a750b8d299e252a->enter($__internal_e3c378e8caa9881591e58897985dbd869b3aaaad7d9dd37e2a750b8d299e252a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c378e8caa9881591e58897985dbd869b3aaaad7d9dd37e2a750b8d299e252a->leave($__internal_e3c378e8caa9881591e58897985dbd869b3aaaad7d9dd37e2a750b8d299e252a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ba4edfa76cdcaebb7ef7923e8c4e2d9a10773a44675f7a4eb2616e312e16fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba4edfa76cdcaebb7ef7923e8c4e2d9a10773a44675f7a4eb2616e312e16fc8->enter($__internal_0ba4edfa76cdcaebb7ef7923e8c4e2d9a10773a44675f7a4eb2616e312e16fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0ba4edfa76cdcaebb7ef7923e8c4e2d9a10773a44675f7a4eb2616e312e16fc8->leave($__internal_0ba4edfa76cdcaebb7ef7923e8c4e2d9a10773a44675f7a4eb2616e312e16fc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
