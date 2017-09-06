<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6309356ecec3ed26b55df1e9f1c37baed7409399a94c5d785ab11ef7e6661aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0496c824071cfd48039195d0fd691661b642bf4a503825368339f80b7b54fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0496c824071cfd48039195d0fd691661b642bf4a503825368339f80b7b54fe8->enter($__internal_d0496c824071cfd48039195d0fd691661b642bf4a503825368339f80b7b54fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0496c824071cfd48039195d0fd691661b642bf4a503825368339f80b7b54fe8->leave($__internal_d0496c824071cfd48039195d0fd691661b642bf4a503825368339f80b7b54fe8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f010e8275243bc361a1deb124f5c493067cb38972bb0dce3792518755452910e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f010e8275243bc361a1deb124f5c493067cb38972bb0dce3792518755452910e->enter($__internal_f010e8275243bc361a1deb124f5c493067cb38972bb0dce3792518755452910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f010e8275243bc361a1deb124f5c493067cb38972bb0dce3792518755452910e->leave($__internal_f010e8275243bc361a1deb124f5c493067cb38972bb0dce3792518755452910e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce265049be41af076649b1f4fd8dab4f62f44986ea8c56402a431582086719b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce265049be41af076649b1f4fd8dab4f62f44986ea8c56402a431582086719b5->enter($__internal_ce265049be41af076649b1f4fd8dab4f62f44986ea8c56402a431582086719b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce265049be41af076649b1f4fd8dab4f62f44986ea8c56402a431582086719b5->leave($__internal_ce265049be41af076649b1f4fd8dab4f62f44986ea8c56402a431582086719b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_350e5b834c42ab14da2410c0d2aa3e99c2a98f079bf04eb37d9a8cca39b22598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350e5b834c42ab14da2410c0d2aa3e99c2a98f079bf04eb37d9a8cca39b22598->enter($__internal_350e5b834c42ab14da2410c0d2aa3e99c2a98f079bf04eb37d9a8cca39b22598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_350e5b834c42ab14da2410c0d2aa3e99c2a98f079bf04eb37d9a8cca39b22598->leave($__internal_350e5b834c42ab14da2410c0d2aa3e99c2a98f079bf04eb37d9a8cca39b22598_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
