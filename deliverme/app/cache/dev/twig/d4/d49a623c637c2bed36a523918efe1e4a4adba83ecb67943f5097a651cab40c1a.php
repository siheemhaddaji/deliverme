<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c70082ae93330c30d70bd36348030a363478f5112eeb26c5922f3643201e47bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7a1ada75abd0ae4213afa9cbfa45df98da22cf4afbbdc98b93b919cdd5dbcc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1ada75abd0ae4213afa9cbfa45df98da22cf4afbbdc98b93b919cdd5dbcc66->enter($__internal_7a1ada75abd0ae4213afa9cbfa45df98da22cf4afbbdc98b93b919cdd5dbcc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1ada75abd0ae4213afa9cbfa45df98da22cf4afbbdc98b93b919cdd5dbcc66->leave($__internal_7a1ada75abd0ae4213afa9cbfa45df98da22cf4afbbdc98b93b919cdd5dbcc66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18fc5155cdbe29cd827151dcb579749f806918be11b6f7fe3ad9fbc1e5e971b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fc5155cdbe29cd827151dcb579749f806918be11b6f7fe3ad9fbc1e5e971b1->enter($__internal_18fc5155cdbe29cd827151dcb579749f806918be11b6f7fe3ad9fbc1e5e971b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_18fc5155cdbe29cd827151dcb579749f806918be11b6f7fe3ad9fbc1e5e971b1->leave($__internal_18fc5155cdbe29cd827151dcb579749f806918be11b6f7fe3ad9fbc1e5e971b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
