<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_799632feaadb6018c62f586f394b9df7bdbaea9b5e26d8ecbdef331117982706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_818d4d0fe6a78e5247b05d540c32667aca3c8e860bc44937bbc558beb90a65ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d4d0fe6a78e5247b05d540c32667aca3c8e860bc44937bbc558beb90a65ea->enter($__internal_818d4d0fe6a78e5247b05d540c32667aca3c8e860bc44937bbc558beb90a65ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818d4d0fe6a78e5247b05d540c32667aca3c8e860bc44937bbc558beb90a65ea->leave($__internal_818d4d0fe6a78e5247b05d540c32667aca3c8e860bc44937bbc558beb90a65ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20cfc2d9e2846f3238fa94b06889361d0e49d0e8dd618bd4b0eb1c9b84abee3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cfc2d9e2846f3238fa94b06889361d0e49d0e8dd618bd4b0eb1c9b84abee3b->enter($__internal_20cfc2d9e2846f3238fa94b06889361d0e49d0e8dd618bd4b0eb1c9b84abee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_20cfc2d9e2846f3238fa94b06889361d0e49d0e8dd618bd4b0eb1c9b84abee3b->leave($__internal_20cfc2d9e2846f3238fa94b06889361d0e49d0e8dd618bd4b0eb1c9b84abee3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
