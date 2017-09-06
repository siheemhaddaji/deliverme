<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_282890c256ff84983a9a05398b489e2fd4c5089a0fa3553784be52124a9a56e2 extends Twig_Template
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
        $__internal_c61d9b297002fd92d4fa6fcd7a910cbe002c02d3c3e6c144a5289824b66ee469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61d9b297002fd92d4fa6fcd7a910cbe002c02d3c3e6c144a5289824b66ee469->enter($__internal_c61d9b297002fd92d4fa6fcd7a910cbe002c02d3c3e6c144a5289824b66ee469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c61d9b297002fd92d4fa6fcd7a910cbe002c02d3c3e6c144a5289824b66ee469->leave($__internal_c61d9b297002fd92d4fa6fcd7a910cbe002c02d3c3e6c144a5289824b66ee469_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b2437b30039b8ea441031e4ccf00ba8d54e1d0261883e863c786ddd6914fcf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2437b30039b8ea441031e4ccf00ba8d54e1d0261883e863c786ddd6914fcf23->enter($__internal_b2437b30039b8ea441031e4ccf00ba8d54e1d0261883e863c786ddd6914fcf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b2437b30039b8ea441031e4ccf00ba8d54e1d0261883e863c786ddd6914fcf23->leave($__internal_b2437b30039b8ea441031e4ccf00ba8d54e1d0261883e863c786ddd6914fcf23_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0daa59182a02c2274dfdb01e158b534cb665c8a9d2f38f8d61c27eff76166e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0daa59182a02c2274dfdb01e158b534cb665c8a9d2f38f8d61c27eff76166e8a->enter($__internal_0daa59182a02c2274dfdb01e158b534cb665c8a9d2f38f8d61c27eff76166e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0daa59182a02c2274dfdb01e158b534cb665c8a9d2f38f8d61c27eff76166e8a->leave($__internal_0daa59182a02c2274dfdb01e158b534cb665c8a9d2f38f8d61c27eff76166e8a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_44668afe0fa77120deddd56bb4ddd4c36bd24cadcd99ee95e9034b2c81f0c703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44668afe0fa77120deddd56bb4ddd4c36bd24cadcd99ee95e9034b2c81f0c703->enter($__internal_44668afe0fa77120deddd56bb4ddd4c36bd24cadcd99ee95e9034b2c81f0c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_44668afe0fa77120deddd56bb4ddd4c36bd24cadcd99ee95e9034b2c81f0c703->leave($__internal_44668afe0fa77120deddd56bb4ddd4c36bd24cadcd99ee95e9034b2c81f0c703_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
