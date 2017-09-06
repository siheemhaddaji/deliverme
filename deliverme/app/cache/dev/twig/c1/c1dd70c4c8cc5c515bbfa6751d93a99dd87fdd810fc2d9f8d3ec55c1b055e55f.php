<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_19f97d7d263cf149cc4eece2efb843304c5344d01185013e741cd332a6ceaeae extends Twig_Template
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
        $__internal_ecc44ea70c605749ee431cfae2d8f341f603dc6d9b2afc772951dc45f5cc35b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc44ea70c605749ee431cfae2d8f341f603dc6d9b2afc772951dc45f5cc35b2->enter($__internal_ecc44ea70c605749ee431cfae2d8f341f603dc6d9b2afc772951dc45f5cc35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ecc44ea70c605749ee431cfae2d8f341f603dc6d9b2afc772951dc45f5cc35b2->leave($__internal_ecc44ea70c605749ee431cfae2d8f341f603dc6d9b2afc772951dc45f5cc35b2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed04329f35f34088a7420762040b7d4bfdea16b8b7d98ba46b0ea75c61980bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04329f35f34088a7420762040b7d4bfdea16b8b7d98ba46b0ea75c61980bba->enter($__internal_ed04329f35f34088a7420762040b7d4bfdea16b8b7d98ba46b0ea75c61980bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed04329f35f34088a7420762040b7d4bfdea16b8b7d98ba46b0ea75c61980bba->leave($__internal_ed04329f35f34088a7420762040b7d4bfdea16b8b7d98ba46b0ea75c61980bba_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e30d4cdd8b1d0207afdcd760a9f68bb27e557de9df4ad791d56ebdeacbc61178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30d4cdd8b1d0207afdcd760a9f68bb27e557de9df4ad791d56ebdeacbc61178->enter($__internal_e30d4cdd8b1d0207afdcd760a9f68bb27e557de9df4ad791d56ebdeacbc61178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e30d4cdd8b1d0207afdcd760a9f68bb27e557de9df4ad791d56ebdeacbc61178->leave($__internal_e30d4cdd8b1d0207afdcd760a9f68bb27e557de9df4ad791d56ebdeacbc61178_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_42888e6ec10aaa16f1a32e326711bff22ddb57a3c635e1a5b0762d847b4597eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42888e6ec10aaa16f1a32e326711bff22ddb57a3c635e1a5b0762d847b4597eb->enter($__internal_42888e6ec10aaa16f1a32e326711bff22ddb57a3c635e1a5b0762d847b4597eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_42888e6ec10aaa16f1a32e326711bff22ddb57a3c635e1a5b0762d847b4597eb->leave($__internal_42888e6ec10aaa16f1a32e326711bff22ddb57a3c635e1a5b0762d847b4597eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
