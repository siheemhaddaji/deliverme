<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7b9c536a156b897c6c945e9cf26c3c2c41f43eacf17b12d65a2f76f331285818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ba86475ed441fd12c7322f1665cf79f1f27bcb8df5de8044b657840c2563f83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba86475ed441fd12c7322f1665cf79f1f27bcb8df5de8044b657840c2563f83f->enter($__internal_ba86475ed441fd12c7322f1665cf79f1f27bcb8df5de8044b657840c2563f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba86475ed441fd12c7322f1665cf79f1f27bcb8df5de8044b657840c2563f83f->leave($__internal_ba86475ed441fd12c7322f1665cf79f1f27bcb8df5de8044b657840c2563f83f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95e63ec520e367bf553a919657749eb1b2be19c835489b2e708a835eee853164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e63ec520e367bf553a919657749eb1b2be19c835489b2e708a835eee853164->enter($__internal_95e63ec520e367bf553a919657749eb1b2be19c835489b2e708a835eee853164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_95e63ec520e367bf553a919657749eb1b2be19c835489b2e708a835eee853164->leave($__internal_95e63ec520e367bf553a919657749eb1b2be19c835489b2e708a835eee853164_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
