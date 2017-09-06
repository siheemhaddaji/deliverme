<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_09a4bc04fb26bf5cfc60d48158008165852a1b82b6ae1c3b72e2169a16d717ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_235a2c60439d189cf76865b69eaedb4619a8fd5991c4dab310c907968ff088dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235a2c60439d189cf76865b69eaedb4619a8fd5991c4dab310c907968ff088dd->enter($__internal_235a2c60439d189cf76865b69eaedb4619a8fd5991c4dab310c907968ff088dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235a2c60439d189cf76865b69eaedb4619a8fd5991c4dab310c907968ff088dd->leave($__internal_235a2c60439d189cf76865b69eaedb4619a8fd5991c4dab310c907968ff088dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab6c0ebc91141eef98728e9b39f43f959e55c5e0ff029e07354e691c0a6fdbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6c0ebc91141eef98728e9b39f43f959e55c5e0ff029e07354e691c0a6fdbe8->enter($__internal_ab6c0ebc91141eef98728e9b39f43f959e55c5e0ff029e07354e691c0a6fdbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ab6c0ebc91141eef98728e9b39f43f959e55c5e0ff029e07354e691c0a6fdbe8->leave($__internal_ab6c0ebc91141eef98728e9b39f43f959e55c5e0ff029e07354e691c0a6fdbe8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
