<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_7105b823ed7c208050de0ef4376295fd7217021e42d85636f4ca06a0f868e69b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_12bf3fa429f693b9e45d76d1a44a86d5c36ea9d1016b2e7df35f20acb3bc9e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf3fa429f693b9e45d76d1a44a86d5c36ea9d1016b2e7df35f20acb3bc9e1b->enter($__internal_12bf3fa429f693b9e45d76d1a44a86d5c36ea9d1016b2e7df35f20acb3bc9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12bf3fa429f693b9e45d76d1a44a86d5c36ea9d1016b2e7df35f20acb3bc9e1b->leave($__internal_12bf3fa429f693b9e45d76d1a44a86d5c36ea9d1016b2e7df35f20acb3bc9e1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0d78a28a0a40cab3740732c6da03a6a4327e8698f710c277fb3245b5a75cf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d78a28a0a40cab3740732c6da03a6a4327e8698f710c277fb3245b5a75cf8d->enter($__internal_a0d78a28a0a40cab3740732c6da03a6a4327e8698f710c277fb3245b5a75cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a0d78a28a0a40cab3740732c6da03a6a4327e8698f710c277fb3245b5a75cf8d->leave($__internal_a0d78a28a0a40cab3740732c6da03a6a4327e8698f710c277fb3245b5a75cf8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
