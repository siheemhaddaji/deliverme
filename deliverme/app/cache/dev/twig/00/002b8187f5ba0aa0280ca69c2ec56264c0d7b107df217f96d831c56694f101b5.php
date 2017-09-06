<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7b478c3796b2e9bd1b03c28540050c0d83a29592608082a836eb7d2fb2b7b1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d25c9c678e75f2c32f1588a0fed993b49e01adb41d415608f4cf217746c2a3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25c9c678e75f2c32f1588a0fed993b49e01adb41d415608f4cf217746c2a3b6->enter($__internal_d25c9c678e75f2c32f1588a0fed993b49e01adb41d415608f4cf217746c2a3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d25c9c678e75f2c32f1588a0fed993b49e01adb41d415608f4cf217746c2a3b6->leave($__internal_d25c9c678e75f2c32f1588a0fed993b49e01adb41d415608f4cf217746c2a3b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_060cb35ef2f10807647518eb4dc896684070de0c473d3ddf973343d0c7f6cddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060cb35ef2f10807647518eb4dc896684070de0c473d3ddf973343d0c7f6cddb->enter($__internal_060cb35ef2f10807647518eb4dc896684070de0c473d3ddf973343d0c7f6cddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_060cb35ef2f10807647518eb4dc896684070de0c473d3ddf973343d0c7f6cddb->leave($__internal_060cb35ef2f10807647518eb4dc896684070de0c473d3ddf973343d0c7f6cddb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
