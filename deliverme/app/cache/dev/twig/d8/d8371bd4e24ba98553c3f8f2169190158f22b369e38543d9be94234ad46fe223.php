<?php

/* @AcmeDemo/layout.html.twig */
class __TwigTemplate_926f525c691cea720455264209819348271d1eb299a09fd5aca0b0f90a35496d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@AcmeDemo/layout.html.twig", 1);
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
        $__internal_b246eb5b8c10d483e338cff790ccff65be38b48baed6fb420c406b8a7fbf7a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b246eb5b8c10d483e338cff790ccff65be38b48baed6fb420c406b8a7fbf7a36->enter($__internal_b246eb5b8c10d483e338cff790ccff65be38b48baed6fb420c406b8a7fbf7a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b246eb5b8c10d483e338cff790ccff65be38b48baed6fb420c406b8a7fbf7a36->leave($__internal_b246eb5b8c10d483e338cff790ccff65be38b48baed6fb420c406b8a7fbf7a36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05e00e5d44e1275a24fbed50a508ff0c4bec1df20d350b8f7e88438f6780ca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e00e5d44e1275a24fbed50a508ff0c4bec1df20d350b8f7e88438f6780ca29->enter($__internal_05e00e5d44e1275a24fbed50a508ff0c4bec1df20d350b8f7e88438f6780ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_05e00e5d44e1275a24fbed50a508ff0c4bec1df20d350b8f7e88438f6780ca29->leave($__internal_05e00e5d44e1275a24fbed50a508ff0c4bec1df20d350b8f7e88438f6780ca29_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0754a895dac36605fb7b19fef3f852032eb186c5254e9e21793857d8be297964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0754a895dac36605fb7b19fef3f852032eb186c5254e9e21793857d8be297964->enter($__internal_0754a895dac36605fb7b19fef3f852032eb186c5254e9e21793857d8be297964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_0754a895dac36605fb7b19fef3f852032eb186c5254e9e21793857d8be297964->leave($__internal_0754a895dac36605fb7b19fef3f852032eb186c5254e9e21793857d8be297964_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9834430576b2bc5fa2278c887cf496bf42631135874261edaf5ddc72296cce9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9834430576b2bc5fa2278c887cf496bf42631135874261edaf5ddc72296cce9c->enter($__internal_9834430576b2bc5fa2278c887cf496bf42631135874261edaf5ddc72296cce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9834430576b2bc5fa2278c887cf496bf42631135874261edaf5ddc72296cce9c->leave($__internal_9834430576b2bc5fa2278c887cf496bf42631135874261edaf5ddc72296cce9c_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_0468374fcdc7762590f084c2957944f6b07274513daba680bea5a9cbadbe2ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0468374fcdc7762590f084c2957944f6b07274513daba680bea5a9cbadbe2ac5->enter($__internal_0468374fcdc7762590f084c2957944f6b07274513daba680bea5a9cbadbe2ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_0468374fcdc7762590f084c2957944f6b07274513daba680bea5a9cbadbe2ac5->leave($__internal_0468374fcdc7762590f084c2957944f6b07274513daba680bea5a9cbadbe2ac5_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_a51276ad6b398b93941b51d7698f19e601a52aadfacf3aac6dfc361051b89e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51276ad6b398b93941b51d7698f19e601a52aadfacf3aac6dfc361051b89e7e->enter($__internal_a51276ad6b398b93941b51d7698f19e601a52aadfacf3aac6dfc361051b89e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_a51276ad6b398b93941b51d7698f19e601a52aadfacf3aac6dfc361051b89e7e->leave($__internal_a51276ad6b398b93941b51d7698f19e601a52aadfacf3aac6dfc361051b89e7e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_465eef134955db385b7cdd83191d3060de2a5c3ed052aa93cecd0cf6bb418a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465eef134955db385b7cdd83191d3060de2a5c3ed052aa93cecd0cf6bb418a68->enter($__internal_465eef134955db385b7cdd83191d3060de2a5c3ed052aa93cecd0cf6bb418a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_465eef134955db385b7cdd83191d3060de2a5c3ed052aa93cecd0cf6bb418a68->leave($__internal_465eef134955db385b7cdd83191d3060de2a5c3ed052aa93cecd0cf6bb418a68_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/layout.html.twig";
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
", "@AcmeDemo/layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\layout.html.twig");
    }
}
