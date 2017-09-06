<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_517e297d0b7c5400ed31a8ae67d024d8a3a46cba31dd681ac8a7fdfa381730f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8a83f277fadb6943504dc49f23cb195a1746825dbf2243d616eb57b477b15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8a83f277fadb6943504dc49f23cb195a1746825dbf2243d616eb57b477b15b->enter($__internal_3f8a83f277fadb6943504dc49f23cb195a1746825dbf2243d616eb57b477b15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8a83f277fadb6943504dc49f23cb195a1746825dbf2243d616eb57b477b15b->leave($__internal_3f8a83f277fadb6943504dc49f23cb195a1746825dbf2243d616eb57b477b15b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b131cb9dbd7face873c1872b6f2823a88be6d81b801372a95b2f286f509b9093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b131cb9dbd7face873c1872b6f2823a88be6d81b801372a95b2f286f509b9093->enter($__internal_b131cb9dbd7face873c1872b6f2823a88be6d81b801372a95b2f286f509b9093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b131cb9dbd7face873c1872b6f2823a88be6d81b801372a95b2f286f509b9093->leave($__internal_b131cb9dbd7face873c1872b6f2823a88be6d81b801372a95b2f286f509b9093_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e0f57f219d6c25a41fbe655ab6f35942954d9f909f8192d15adfa13abc5c19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0f57f219d6c25a41fbe655ab6f35942954d9f909f8192d15adfa13abc5c19d->enter($__internal_4e0f57f219d6c25a41fbe655ab6f35942954d9f909f8192d15adfa13abc5c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4e0f57f219d6c25a41fbe655ab6f35942954d9f909f8192d15adfa13abc5c19d->leave($__internal_4e0f57f219d6c25a41fbe655ab6f35942954d9f909f8192d15adfa13abc5c19d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1b7009f00cf9a7b9145eb1f6428097f547d18873df34ee9d12a4b9a3748305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1b7009f00cf9a7b9145eb1f6428097f547d18873df34ee9d12a4b9a3748305->enter($__internal_8e1b7009f00cf9a7b9145eb1f6428097f547d18873df34ee9d12a4b9a3748305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8e1b7009f00cf9a7b9145eb1f6428097f547d18873df34ee9d12a4b9a3748305->leave($__internal_8e1b7009f00cf9a7b9145eb1f6428097f547d18873df34ee9d12a4b9a3748305_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_de10832bc97ac296fa5085d8117e32e27051bf9cd052c7b5d84c69ec3da9ef61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de10832bc97ac296fa5085d8117e32e27051bf9cd052c7b5d84c69ec3da9ef61->enter($__internal_de10832bc97ac296fa5085d8117e32e27051bf9cd052c7b5d84c69ec3da9ef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_de10832bc97ac296fa5085d8117e32e27051bf9cd052c7b5d84c69ec3da9ef61->leave($__internal_de10832bc97ac296fa5085d8117e32e27051bf9cd052c7b5d84c69ec3da9ef61_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
