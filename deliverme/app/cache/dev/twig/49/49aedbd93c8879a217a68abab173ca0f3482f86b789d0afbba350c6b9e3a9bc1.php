<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c8adf2223f4f9ee63aeea38f44f3a6c3016b59cc471987e5574ddeaca10c61e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_9d4aec7642fe896a7d8108284a9d9bb61abfc266acabd4e1ce11565036219f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4aec7642fe896a7d8108284a9d9bb61abfc266acabd4e1ce11565036219f66->enter($__internal_9d4aec7642fe896a7d8108284a9d9bb61abfc266acabd4e1ce11565036219f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4aec7642fe896a7d8108284a9d9bb61abfc266acabd4e1ce11565036219f66->leave($__internal_9d4aec7642fe896a7d8108284a9d9bb61abfc266acabd4e1ce11565036219f66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13c23e1368a8c9b8a1f44cf7f81e297a0b7602e10f478499dda77cc288368f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c23e1368a8c9b8a1f44cf7f81e297a0b7602e10f478499dda77cc288368f5d->enter($__internal_13c23e1368a8c9b8a1f44cf7f81e297a0b7602e10f478499dda77cc288368f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_13c23e1368a8c9b8a1f44cf7f81e297a0b7602e10f478499dda77cc288368f5d->leave($__internal_13c23e1368a8c9b8a1f44cf7f81e297a0b7602e10f478499dda77cc288368f5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
