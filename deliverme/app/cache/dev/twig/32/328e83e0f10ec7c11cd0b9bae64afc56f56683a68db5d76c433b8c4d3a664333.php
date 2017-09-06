<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_6cc9506f5042d0ce59ae728ec8c251284ed98a8211b7f47d0d07de98738eaad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c4f7861cb537dd482dc0f71d0455d17d0433dd91ae3972415102c24bff8e7b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f7861cb537dd482dc0f71d0455d17d0433dd91ae3972415102c24bff8e7b05->enter($__internal_c4f7861cb537dd482dc0f71d0455d17d0433dd91ae3972415102c24bff8e7b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f7861cb537dd482dc0f71d0455d17d0433dd91ae3972415102c24bff8e7b05->leave($__internal_c4f7861cb537dd482dc0f71d0455d17d0433dd91ae3972415102c24bff8e7b05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_140de4277c791f9696d3b3d5e040123e0fd22b84e2f87d3cde1e12229a9f2c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140de4277c791f9696d3b3d5e040123e0fd22b84e2f87d3cde1e12229a9f2c8a->enter($__internal_140de4277c791f9696d3b3d5e040123e0fd22b84e2f87d3cde1e12229a9f2c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_140de4277c791f9696d3b3d5e040123e0fd22b84e2f87d3cde1e12229a9f2c8a->leave($__internal_140de4277c791f9696d3b3d5e040123e0fd22b84e2f87d3cde1e12229a9f2c8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
