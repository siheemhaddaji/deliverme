<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_18694ae88c2d87ed9661a313324eec7324b93dc53cb13b35abe5790b7f74d26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_7f2c611a8b0a7dcbbaac19a12cc7d053f6f7a330fdf721486f3fed4a047b2808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2c611a8b0a7dcbbaac19a12cc7d053f6f7a330fdf721486f3fed4a047b2808->enter($__internal_7f2c611a8b0a7dcbbaac19a12cc7d053f6f7a330fdf721486f3fed4a047b2808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2c611a8b0a7dcbbaac19a12cc7d053f6f7a330fdf721486f3fed4a047b2808->leave($__internal_7f2c611a8b0a7dcbbaac19a12cc7d053f6f7a330fdf721486f3fed4a047b2808_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67028e3791a817138c9356d4e95e6dafa7472ff1065a9104de78713ac9322a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67028e3791a817138c9356d4e95e6dafa7472ff1065a9104de78713ac9322a92->enter($__internal_67028e3791a817138c9356d4e95e6dafa7472ff1065a9104de78713ac9322a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_67028e3791a817138c9356d4e95e6dafa7472ff1065a9104de78713ac9322a92->leave($__internal_67028e3791a817138c9356d4e95e6dafa7472ff1065a9104de78713ac9322a92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
