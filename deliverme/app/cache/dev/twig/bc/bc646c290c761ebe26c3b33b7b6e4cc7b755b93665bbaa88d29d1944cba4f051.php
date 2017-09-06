<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d00f975f5ebd45fdd5780a03fa7de4d40bc2f1ec1a08bef09266f70035378157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a68604c2fed39ff96ad000fb1eab9237363f4fe275d19ca0f24fc9a5de1f6d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68604c2fed39ff96ad000fb1eab9237363f4fe275d19ca0f24fc9a5de1f6d96->enter($__internal_a68604c2fed39ff96ad000fb1eab9237363f4fe275d19ca0f24fc9a5de1f6d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68604c2fed39ff96ad000fb1eab9237363f4fe275d19ca0f24fc9a5de1f6d96->leave($__internal_a68604c2fed39ff96ad000fb1eab9237363f4fe275d19ca0f24fc9a5de1f6d96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e97bb703f4a007cef978403226ce7c0927dd11e561dbdfce06ba0d72bf837bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e97bb703f4a007cef978403226ce7c0927dd11e561dbdfce06ba0d72bf837bc->enter($__internal_3e97bb703f4a007cef978403226ce7c0927dd11e561dbdfce06ba0d72bf837bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3e97bb703f4a007cef978403226ce7c0927dd11e561dbdfce06ba0d72bf837bc->leave($__internal_3e97bb703f4a007cef978403226ce7c0927dd11e561dbdfce06ba0d72bf837bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
