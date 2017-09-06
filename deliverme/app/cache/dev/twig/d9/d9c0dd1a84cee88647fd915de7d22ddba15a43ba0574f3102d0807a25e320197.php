<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc85ac11ded641e6d6cd5fe24a6214500b073062e19fe72cc1d4e93c4841066d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c23225e50bfca236b0cb91dd5bae2765eec2928d00278a07625bfae8bc7132ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23225e50bfca236b0cb91dd5bae2765eec2928d00278a07625bfae8bc7132ff->enter($__internal_c23225e50bfca236b0cb91dd5bae2765eec2928d00278a07625bfae8bc7132ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c23225e50bfca236b0cb91dd5bae2765eec2928d00278a07625bfae8bc7132ff->leave($__internal_c23225e50bfca236b0cb91dd5bae2765eec2928d00278a07625bfae8bc7132ff_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74dbe738fe620a71b378e93f6e0f1dde7b6dfd27cc58874048fcf607dec24bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dbe738fe620a71b378e93f6e0f1dde7b6dfd27cc58874048fcf607dec24bfa->enter($__internal_74dbe738fe620a71b378e93f6e0f1dde7b6dfd27cc58874048fcf607dec24bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74dbe738fe620a71b378e93f6e0f1dde7b6dfd27cc58874048fcf607dec24bfa->leave($__internal_74dbe738fe620a71b378e93f6e0f1dde7b6dfd27cc58874048fcf607dec24bfa_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_148160ac13dfb0ad986acc3650e6fd018f0728621da6b4ca0be58385ee34e5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148160ac13dfb0ad986acc3650e6fd018f0728621da6b4ca0be58385ee34e5f5->enter($__internal_148160ac13dfb0ad986acc3650e6fd018f0728621da6b4ca0be58385ee34e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_148160ac13dfb0ad986acc3650e6fd018f0728621da6b4ca0be58385ee34e5f5->leave($__internal_148160ac13dfb0ad986acc3650e6fd018f0728621da6b4ca0be58385ee34e5f5_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_277d8b6701b5bed875633dbc588d6daf0ba15466fb3afdf29450294e004c8810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277d8b6701b5bed875633dbc588d6daf0ba15466fb3afdf29450294e004c8810->enter($__internal_277d8b6701b5bed875633dbc588d6daf0ba15466fb3afdf29450294e004c8810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_277d8b6701b5bed875633dbc588d6daf0ba15466fb3afdf29450294e004c8810->leave($__internal_277d8b6701b5bed875633dbc588d6daf0ba15466fb3afdf29450294e004c8810_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
