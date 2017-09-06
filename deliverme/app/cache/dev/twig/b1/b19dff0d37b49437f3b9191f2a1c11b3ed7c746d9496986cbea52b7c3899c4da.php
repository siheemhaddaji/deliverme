<?php

/* @AcmeDemo/Demo/contact.html.twig */
class __TwigTemplate_b448519cae6d68a4c0dfc0d802f16afc6cba884c71312905dfa6d0d64606c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/contact.html.twig", 1);
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
        $__internal_625448e3da20eaa60f591bb424b7645ebbbdad7db22b3884ca5b118ddb1cfa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625448e3da20eaa60f591bb424b7645ebbbdad7db22b3884ca5b118ddb1cfa0e->enter($__internal_625448e3da20eaa60f591bb424b7645ebbbdad7db22b3884ca5b118ddb1cfa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_625448e3da20eaa60f591bb424b7645ebbbdad7db22b3884ca5b118ddb1cfa0e->leave($__internal_625448e3da20eaa60f591bb424b7645ebbbdad7db22b3884ca5b118ddb1cfa0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba43750b9e1f16a85d6912d14d2a314109efe529e0357c3bea3f61082e3a28a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba43750b9e1f16a85d6912d14d2a314109efe529e0357c3bea3f61082e3a28a4->enter($__internal_ba43750b9e1f16a85d6912d14d2a314109efe529e0357c3bea3f61082e3a28a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_ba43750b9e1f16a85d6912d14d2a314109efe529e0357c3bea3f61082e3a28a4->leave($__internal_ba43750b9e1f16a85d6912d14d2a314109efe529e0357c3bea3f61082e3a28a4_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef38d0804fb9980947366558c94df101ae798b91f8bfffeaafe0413011632fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef38d0804fb9980947366558c94df101ae798b91f8bfffeaafe0413011632fe1->enter($__internal_ef38d0804fb9980947366558c94df101ae798b91f8bfffeaafe0413011632fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ef38d0804fb9980947366558c94df101ae798b91f8bfffeaafe0413011632fe1->leave($__internal_ef38d0804fb9980947366558c94df101ae798b91f8bfffeaafe0413011632fe1_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/contact.html.twig";
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
", "@AcmeDemo/Demo/contact.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Demo\\contact.html.twig");
    }
}
