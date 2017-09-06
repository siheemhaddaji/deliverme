<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e151db16657186385ad090d4ae0df8dc66af8f69119c29c700b787523eaa7c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4bba73518eec118996bc6e32ef415d2814df7734d36509d433ceacd9fd95b8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bba73518eec118996bc6e32ef415d2814df7734d36509d433ceacd9fd95b8b4->enter($__internal_4bba73518eec118996bc6e32ef415d2814df7734d36509d433ceacd9fd95b8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bba73518eec118996bc6e32ef415d2814df7734d36509d433ceacd9fd95b8b4->leave($__internal_4bba73518eec118996bc6e32ef415d2814df7734d36509d433ceacd9fd95b8b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8252e6f3e57f8cc0eb039d410d61d02f43880987860e3d61d9cb4be02729faa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8252e6f3e57f8cc0eb039d410d61d02f43880987860e3d61d9cb4be02729faa7->enter($__internal_8252e6f3e57f8cc0eb039d410d61d02f43880987860e3d61d9cb4be02729faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8252e6f3e57f8cc0eb039d410d61d02f43880987860e3d61d9cb4be02729faa7->leave($__internal_8252e6f3e57f8cc0eb039d410d61d02f43880987860e3d61d9cb4be02729faa7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7ef1b5c6df76e509452fb55ea1d44f4ec508d48998b0640bc66f7eb7f726be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ef1b5c6df76e509452fb55ea1d44f4ec508d48998b0640bc66f7eb7f726be6->enter($__internal_e7ef1b5c6df76e509452fb55ea1d44f4ec508d48998b0640bc66f7eb7f726be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7ef1b5c6df76e509452fb55ea1d44f4ec508d48998b0640bc66f7eb7f726be6->leave($__internal_e7ef1b5c6df76e509452fb55ea1d44f4ec508d48998b0640bc66f7eb7f726be6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99af04e0391d17b959b57674f793d38b3537263c325d353d233bbb0a2e4c1633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99af04e0391d17b959b57674f793d38b3537263c325d353d233bbb0a2e4c1633->enter($__internal_99af04e0391d17b959b57674f793d38b3537263c325d353d233bbb0a2e4c1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99af04e0391d17b959b57674f793d38b3537263c325d353d233bbb0a2e4c1633->leave($__internal_99af04e0391d17b959b57674f793d38b3537263c325d353d233bbb0a2e4c1633_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
