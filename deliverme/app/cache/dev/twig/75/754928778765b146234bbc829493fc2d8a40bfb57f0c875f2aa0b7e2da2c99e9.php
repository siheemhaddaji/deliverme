<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9b425eaf3fef45acf760a3f9035372a467c9dd114896e455a94205f9805ead93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_56b02dff802ba5b4e6db3be525416aa0057777dd258a8e240aad4cbe3acc85c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b02dff802ba5b4e6db3be525416aa0057777dd258a8e240aad4cbe3acc85c9->enter($__internal_56b02dff802ba5b4e6db3be525416aa0057777dd258a8e240aad4cbe3acc85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b02dff802ba5b4e6db3be525416aa0057777dd258a8e240aad4cbe3acc85c9->leave($__internal_56b02dff802ba5b4e6db3be525416aa0057777dd258a8e240aad4cbe3acc85c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d1d99ee0ed0ebaed0c7c7fc809db8462aace75f258029571f4ec6b15243ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1d99ee0ed0ebaed0c7c7fc809db8462aace75f258029571f4ec6b15243ce54->enter($__internal_3d1d99ee0ed0ebaed0c7c7fc809db8462aace75f258029571f4ec6b15243ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3d1d99ee0ed0ebaed0c7c7fc809db8462aace75f258029571f4ec6b15243ce54->leave($__internal_3d1d99ee0ed0ebaed0c7c7fc809db8462aace75f258029571f4ec6b15243ce54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
