<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_31d4b3174f1a1aaeade8cb0fa1002b697dfbdb1928bd7940ba9b01af2c89a827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:login.html.twig", 1);
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
        $__internal_f63db9b26a1a598c2ef5738f4f11d36b9d2e5d256ec43c818b8b362ed16f62cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63db9b26a1a598c2ef5738f4f11d36b9d2e5d256ec43c818b8b362ed16f62cc->enter($__internal_f63db9b26a1a598c2ef5738f4f11d36b9d2e5d256ec43c818b8b362ed16f62cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:login.html.twig"));

        // line 35
        $context["code"] = $this->env->getExtension('Acme\DemoBundle\Twig\Extension\DemoExtension')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f63db9b26a1a598c2ef5738f4f11d36b9d2e5d256ec43c818b8b362ed16f62cc->leave($__internal_f63db9b26a1a598c2ef5738f4f11d36b9d2e5d256ec43c818b8b362ed16f62cc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_df87d42e72f8934d4fc4348dd9766673ea5e4a57486e7ea61239f3203c6a14dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df87d42e72f8934d4fc4348dd9766673ea5e4a57486e7ea61239f3203c6a14dd->enter($__internal_df87d42e72f8934d4fc4348dd9766673ea5e4a57486e7ea61239f3203c6a14dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_df87d42e72f8934d4fc4348dd9766673ea5e4a57486e7ea61239f3203c6a14dd->leave($__internal_df87d42e72f8934d4fc4348dd9766673ea5e4a57486e7ea61239f3203c6a14dd_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
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
", "AcmeDemoBundle:Secured:login.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Secured/login.html.twig");
    }
}
