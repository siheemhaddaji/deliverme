<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_60cbc74240b53213821f4123dd5710939ed15b1b087e8a1092d1ae32cdfb9531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_0a6da3571355767cff5ccf21ba25540328e60e3f2c8b6328134ae7c692bd31a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6da3571355767cff5ccf21ba25540328e60e3f2c8b6328134ae7c692bd31a7->enter($__internal_0a6da3571355767cff5ccf21ba25540328e60e3f2c8b6328134ae7c692bd31a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6da3571355767cff5ccf21ba25540328e60e3f2c8b6328134ae7c692bd31a7->leave($__internal_0a6da3571355767cff5ccf21ba25540328e60e3f2c8b6328134ae7c692bd31a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc8dc79548147712eee6a7ba4629fba77cede11e8b54cd51d28230bb51cc0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8dc79548147712eee6a7ba4629fba77cede11e8b54cd51d28230bb51cc0510->enter($__internal_dc8dc79548147712eee6a7ba4629fba77cede11e8b54cd51d28230bb51cc0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dc8dc79548147712eee6a7ba4629fba77cede11e8b54cd51d28230bb51cc0510->leave($__internal_dc8dc79548147712eee6a7ba4629fba77cede11e8b54cd51d28230bb51cc0510_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
