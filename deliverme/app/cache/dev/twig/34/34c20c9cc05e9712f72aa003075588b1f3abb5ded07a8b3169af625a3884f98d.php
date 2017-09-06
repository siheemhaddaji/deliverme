<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_76a03446a8adf5c720dd2edccb3b27afc12995ecf9a6c2247add341d4bb0253f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02b4ccc17336ee8892f93d7318ed81fab79032b246b15258cd0eb9f72fadee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02b4ccc17336ee8892f93d7318ed81fab79032b246b15258cd0eb9f72fadee4->enter($__internal_e02b4ccc17336ee8892f93d7318ed81fab79032b246b15258cd0eb9f72fadee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02b4ccc17336ee8892f93d7318ed81fab79032b246b15258cd0eb9f72fadee4->leave($__internal_e02b4ccc17336ee8892f93d7318ed81fab79032b246b15258cd0eb9f72fadee4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd1a56120cd7599be7b62e8314d90585300e698220ba5500a77c9fa1a1763bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1a56120cd7599be7b62e8314d90585300e698220ba5500a77c9fa1a1763bb6->enter($__internal_dd1a56120cd7599be7b62e8314d90585300e698220ba5500a77c9fa1a1763bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_dd1a56120cd7599be7b62e8314d90585300e698220ba5500a77c9fa1a1763bb6->leave($__internal_dd1a56120cd7599be7b62e8314d90585300e698220ba5500a77c9fa1a1763bb6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f74136084b75b0964bd5da6f49b920d9a27145616099ee1c7385c722b40a30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f74136084b75b0964bd5da6f49b920d9a27145616099ee1c7385c722b40a30a->enter($__internal_2f74136084b75b0964bd5da6f49b920d9a27145616099ee1c7385c722b40a30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_2f74136084b75b0964bd5da6f49b920d9a27145616099ee1c7385c722b40a30a->leave($__internal_2f74136084b75b0964bd5da6f49b920d9a27145616099ee1c7385c722b40a30a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f021725962dac1c1423f4741b20830a93dfd10e8ce4499f16c3b1768ac07b18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f021725962dac1c1423f4741b20830a93dfd10e8ce4499f16c3b1768ac07b18e->enter($__internal_f021725962dac1c1423f4741b20830a93dfd10e8ce4499f16c3b1768ac07b18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_f021725962dac1c1423f4741b20830a93dfd10e8ce4499f16c3b1768ac07b18e->leave($__internal_f021725962dac1c1423f4741b20830a93dfd10e8ce4499f16c3b1768ac07b18e_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_202de8b795636e06bb80cb91ff2c986a75eb0e9f659e9dbcd5e4308aaff8ee2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202de8b795636e06bb80cb91ff2c986a75eb0e9f659e9dbcd5e4308aaff8ee2c->enter($__internal_202de8b795636e06bb80cb91ff2c986a75eb0e9f659e9dbcd5e4308aaff8ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_202de8b795636e06bb80cb91ff2c986a75eb0e9f659e9dbcd5e4308aaff8ee2c->leave($__internal_202de8b795636e06bb80cb91ff2c986a75eb0e9f659e9dbcd5e4308aaff8ee2c_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_477aba78795d2e9b952b2781d11a6c4d2fec57e8231c6a79df9905dae034229e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477aba78795d2e9b952b2781d11a6c4d2fec57e8231c6a79df9905dae034229e->enter($__internal_477aba78795d2e9b952b2781d11a6c4d2fec57e8231c6a79df9905dae034229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_477aba78795d2e9b952b2781d11a6c4d2fec57e8231c6a79df9905dae034229e->leave($__internal_477aba78795d2e9b952b2781d11a6c4d2fec57e8231c6a79df9905dae034229e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc67f9ded23f9b128e81a6bf8a8a296f64f926e3daa1381bfb49ebc24cee7e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc67f9ded23f9b128e81a6bf8a8a296f64f926e3daa1381bfb49ebc24cee7e65->enter($__internal_cc67f9ded23f9b128e81a6bf8a8a296f64f926e3daa1381bfb49ebc24cee7e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cc67f9ded23f9b128e81a6bf8a8a296f64f926e3daa1381bfb49ebc24cee7e65->leave($__internal_cc67f9ded23f9b128e81a6bf8a8a296f64f926e3daa1381bfb49ebc24cee7e65_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
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
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/acmedemo/css/demo.css') }}\" />
{% endblock %}

{% block title 'Demo Bundle' %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"flash-message\">
            <em>Notice</em>: {{ flashMessage }}
        </div>
    {% endfor %}

    {% block content_header %}
        <ul id=\"menu\">
            {% block content_header_more %}
                <li><a href=\"{{ path('_demo') }}\">Demo Home</a></li>
            {% endblock %}
        </ul>

        <div style=\"clear: both\"></div>
    {% endblock %}

    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>

    {% if code is defined %}
        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">{{ code|raw }}</div>
        </div>
    {% endif %}
{% endblock %}
", "AcmeDemoBundle::layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/layout.html.twig");
    }
}
