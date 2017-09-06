<?php

/* @AcmeDemo/Secured/login.html.twig */
class __TwigTemplate_420014a7ec64077fcb3aa57cf658e71c578ed1aa638e576203fa00ba4ef5cced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Secured/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e4b00ca5459a60ba5a29975e08f782f7c7b0647e677ae592e23b10f5bb21ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4b00ca5459a60ba5a29975e08f782f7c7b0647e677ae592e23b10f5bb21ae8->enter($__internal_8e4b00ca5459a60ba5a29975e08f782f7c7b0647e677ae592e23b10f5bb21ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/login.html.twig"));

        // line 35
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4b00ca5459a60ba5a29975e08f782f7c7b0647e677ae592e23b10f5bb21ae8->leave($__internal_8e4b00ca5459a60ba5a29975e08f782f7c7b0647e677ae592e23b10f5bb21ae8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_01f9eb5901eb4df8f519b8f54e4e2223dfb2da4636990ee79598fceeaadc9541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f9eb5901eb4df8f519b8f54e4e2223dfb2da4636990ee79598fceeaadc9541->enter($__internal_01f9eb5901eb4df8f519b8f54e4e2223dfb2da4636990ee79598fceeaadc9541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
        
        $__internal_01f9eb5901eb4df8f519b8f54e4e2223dfb2da4636990ee79598fceeaadc9541->leave($__internal_01f9eb5901eb4df8f519b8f54e4e2223dfb2da4636990ee79598fceeaadc9541_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  62 => 14,  59 => 13,  53 => 11,  51 => 10,  43 => 4,  37 => 3,  30 => 1,  28 => 35,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AcmeDemoBundle::layout.html.twig' %}

{% block content %}
    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    {% if error %}
        <div class=\"error\">{{ error.message }}</div>
    {% endif %}

    <form action=\"{{ path(\"_security_check\") }}\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
{% endblock %}

{% set code = code(_self) %}
", "@AcmeDemo/Secured/login.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Secured\\login.html.twig");
    }
}
