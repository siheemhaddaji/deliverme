<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_49e031b14a4ad844bff6cddc8c811850984954282c10e32b856f60a888d8b9e6 extends Twig_Template
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
        $__internal_143fecd1fbae13115c604fe95b900e5ab29826c116f0e721ada6cfa3f175fb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143fecd1fbae13115c604fe95b900e5ab29826c116f0e721ada6cfa3f175fb6d->enter($__internal_143fecd1fbae13115c604fe95b900e5ab29826c116f0e721ada6cfa3f175fb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_143fecd1fbae13115c604fe95b900e5ab29826c116f0e721ada6cfa3f175fb6d->leave($__internal_143fecd1fbae13115c604fe95b900e5ab29826c116f0e721ada6cfa3f175fb6d_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_696e1153d4125d1848df5dba9f6988bfb28fe92e9946262514012391a22d6a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696e1153d4125d1848df5dba9f6988bfb28fe92e9946262514012391a22d6a3c->enter($__internal_696e1153d4125d1848df5dba9f6988bfb28fe92e9946262514012391a22d6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_696e1153d4125d1848df5dba9f6988bfb28fe92e9946262514012391a22d6a3c->leave($__internal_696e1153d4125d1848df5dba9f6988bfb28fe92e9946262514012391a22d6a3c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ecd774abbcf791948479c241c1ae6c543060c910e07f8e18d219efe3a1f79f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecd774abbcf791948479c241c1ae6c543060c910e07f8e18d219efe3a1f79f4->enter($__internal_8ecd774abbcf791948479c241c1ae6c543060c910e07f8e18d219efe3a1f79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ecd774abbcf791948479c241c1ae6c543060c910e07f8e18d219efe3a1f79f4->leave($__internal_8ecd774abbcf791948479c241c1ae6c543060c910e07f8e18d219efe3a1f79f4_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0ff104a2751211cb2c0ece2ea990c35619cf17f8d07af9b6af008e40758926b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff104a2751211cb2c0ece2ea990c35619cf17f8d07af9b6af008e40758926b4->enter($__internal_0ff104a2751211cb2c0ece2ea990c35619cf17f8d07af9b6af008e40758926b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0ff104a2751211cb2c0ece2ea990c35619cf17f8d07af9b6af008e40758926b4->leave($__internal_0ff104a2751211cb2c0ece2ea990c35619cf17f8d07af9b6af008e40758926b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
