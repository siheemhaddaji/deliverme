<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_92ff61ba031de3238c8d038c1a37802f1c18947934c8402f1cdc3de9d8b3df17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3ea18c14a8d2442eaa569f1662aefc38439d224de0c2aa06ca18b43ff3c72734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea18c14a8d2442eaa569f1662aefc38439d224de0c2aa06ca18b43ff3c72734->enter($__internal_3ea18c14a8d2442eaa569f1662aefc38439d224de0c2aa06ca18b43ff3c72734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ea18c14a8d2442eaa569f1662aefc38439d224de0c2aa06ca18b43ff3c72734->leave($__internal_3ea18c14a8d2442eaa569f1662aefc38439d224de0c2aa06ca18b43ff3c72734_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac77dacdcb3c241fe307ed7514a80cf6a9972f82620a97bc926aea56d71ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac77dacdcb3c241fe307ed7514a80cf6a9972f82620a97bc926aea56d71ffee->enter($__internal_cac77dacdcb3c241fe307ed7514a80cf6a9972f82620a97bc926aea56d71ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_cac77dacdcb3c241fe307ed7514a80cf6a9972f82620a97bc926aea56d71ffee->leave($__internal_cac77dacdcb3c241fe307ed7514a80cf6a9972f82620a97bc926aea56d71ffee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
