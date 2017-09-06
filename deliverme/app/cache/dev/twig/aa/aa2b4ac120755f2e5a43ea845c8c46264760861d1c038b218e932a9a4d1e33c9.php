<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_15abca3629d3186c4423e38b1d39299cbfacf8ffb78ca7aefd0e1c9c3e8b54bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2be7edbb1edab06ffde97df2056bd1947aa556b59eda33a2a316d893b92c47c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be7edbb1edab06ffde97df2056bd1947aa556b59eda33a2a316d893b92c47c2->enter($__internal_2be7edbb1edab06ffde97df2056bd1947aa556b59eda33a2a316d893b92c47c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be7edbb1edab06ffde97df2056bd1947aa556b59eda33a2a316d893b92c47c2->leave($__internal_2be7edbb1edab06ffde97df2056bd1947aa556b59eda33a2a316d893b92c47c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50de072175f70f8683e89ea3503e95fc7a97a660802aefdab66fbb79ee5c06d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de072175f70f8683e89ea3503e95fc7a97a660802aefdab66fbb79ee5c06d0->enter($__internal_50de072175f70f8683e89ea3503e95fc7a97a660802aefdab66fbb79ee5c06d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_50de072175f70f8683e89ea3503e95fc7a97a660802aefdab66fbb79ee5c06d0->leave($__internal_50de072175f70f8683e89ea3503e95fc7a97a660802aefdab66fbb79ee5c06d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
