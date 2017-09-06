<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_cf9d4df178646f93aba0fb70b4621b7633432ecd7c831e2b11e5be70cbcc72f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d95512cfabf8e04a4b0ee2ba3b0be2cbafc05650554350f128d3039c42d6b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d95512cfabf8e04a4b0ee2ba3b0be2cbafc05650554350f128d3039c42d6b52->enter($__internal_0d95512cfabf8e04a4b0ee2ba3b0be2cbafc05650554350f128d3039c42d6b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d95512cfabf8e04a4b0ee2ba3b0be2cbafc05650554350f128d3039c42d6b52->leave($__internal_0d95512cfabf8e04a4b0ee2ba3b0be2cbafc05650554350f128d3039c42d6b52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b18206888526a0af5960d27625c7ec2b9585011418eae48c7a2bcfdd920431ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18206888526a0af5960d27625c7ec2b9585011418eae48c7a2bcfdd920431ff->enter($__internal_b18206888526a0af5960d27625c7ec2b9585011418eae48c7a2bcfdd920431ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_b18206888526a0af5960d27625c7ec2b9585011418eae48c7a2bcfdd920431ff->leave($__internal_b18206888526a0af5960d27625c7ec2b9585011418eae48c7a2bcfdd920431ff_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fed6e3e2b29957ad6fdc9fc22f22ecc65294113a700e06f139dab56ebb7eadad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed6e3e2b29957ad6fdc9fc22f22ecc65294113a700e06f139dab56ebb7eadad->enter($__internal_fed6e3e2b29957ad6fdc9fc22f22ecc65294113a700e06f139dab56ebb7eadad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
        
        $__internal_fed6e3e2b29957ad6fdc9fc22f22ecc65294113a700e06f139dab56ebb7eadad->leave($__internal_fed6e3e2b29957ad6fdc9fc22f22ecc65294113a700e06f139dab56ebb7eadad_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  67 => 10,  63 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AcmeDemoBundle::layout.html.twig\" %}

{% block title \"Symfony - Contact form\" %}

{% block content %}
    <form action=\"{{ path('_demo_contact') }}\" method=\"POST\" id=\"contact_form\">
        {{ form_errors(form) }}

        {{ form_row(form.email) }}
        {{ form_row(form.message) }}

        {{ form_rest(form) }}
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
{% endblock %}
", "AcmeDemoBundle:Demo:contact.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Demo/contact.html.twig");
    }
}
