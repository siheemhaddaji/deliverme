<?php

/* @AcmeDemo/Secured/layout.html.twig */
class __TwigTemplate_d2819db797d1d24dcb7e6cc5561e43437ee964c7e759fb376a6a73b76dc418c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Secured/layout.html.twig", 1);
        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e7c3863979f98c0359264b709c9f91e640c0de664ad2046871a1e5fd54291de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7c3863979f98c0359264b709c9f91e640c0de664ad2046871a1e5fd54291de->enter($__internal_9e7c3863979f98c0359264b709c9f91e640c0de664ad2046871a1e5fd54291de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e7c3863979f98c0359264b709c9f91e640c0de664ad2046871a1e5fd54291de->leave($__internal_9e7c3863979f98c0359264b709c9f91e640c0de664ad2046871a1e5fd54291de_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_16ed56c79c81de5468992d79b7fa1c9b286de4d198179543baf31d0f84358d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ed56c79c81de5468992d79b7fa1c9b286de4d198179543baf31d0f84358d37->enter($__internal_16ed56c79c81de5468992d79b7fa1c9b286de4d198179543baf31d0f84358d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_16ed56c79c81de5468992d79b7fa1c9b286de4d198179543baf31d0f84358d37->leave($__internal_16ed56c79c81de5468992d79b7fa1c9b286de4d198179543baf31d0f84358d37_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block content_header_more %}
    {{ parent() }}
    <li>logged in as <strong>{{ app.user ? app.user.username : 'Anonymous' }}</strong> - <a href=\"{{ path('_demo_logout') }}\">Logout</a></li>
{% endblock %}
", "@AcmeDemo/Secured/layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Secured\\layout.html.twig");
    }
}
