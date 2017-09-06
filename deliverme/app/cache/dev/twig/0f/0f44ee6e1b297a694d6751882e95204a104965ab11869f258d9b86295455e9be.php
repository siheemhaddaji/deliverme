<?php

/* @AcmeDemo/Demo/index.html.twig */
class __TwigTemplate_4623dcdbf2715a09af8d0263f110a6d4a1ea0f8aee32b71364d7e55ca19eeae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70d9e5bd81af2e213386957f8e351a7c6436034c2d00426acedea91e60a86697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d9e5bd81af2e213386957f8e351a7c6436034c2d00426acedea91e60a86697->enter($__internal_70d9e5bd81af2e213386957f8e351a7c6436034c2d00426acedea91e60a86697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d9e5bd81af2e213386957f8e351a7c6436034c2d00426acedea91e60a86697->leave($__internal_70d9e5bd81af2e213386957f8e351a7c6436034c2d00426acedea91e60a86697_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df69aa513bc728c96140838e980c0a4bd985c1fb3289dd0b4b99f728cd1648ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df69aa513bc728c96140838e980c0a4bd985c1fb3289dd0b4b99f728cd1648ce->enter($__internal_df69aa513bc728c96140838e980c0a4bd985c1fb3289dd0b4b99f728cd1648ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_df69aa513bc728c96140838e980c0a4bd985c1fb3289dd0b4b99f728cd1648ce->leave($__internal_df69aa513bc728c96140838e980c0a4bd985c1fb3289dd0b4b99f728cd1648ce_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_40a6bec50b67de3bf2acb9f121c71422fab2e673695ed9bb67c7ceb130e3f5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a6bec50b67de3bf2acb9f121c71422fab2e673695ed9bb67c7ceb130e3f5b7->enter($__internal_40a6bec50b67de3bf2acb9f121c71422fab2e673695ed9bb67c7ceb130e3f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_40a6bec50b67de3bf2acb9f121c71422fab2e673695ed9bb67c7ceb130e3f5b7->leave($__internal_40a6bec50b67de3bf2acb9f121c71422fab2e673695ed9bb67c7ceb130e3f5b7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_2dd6ec7102deb49a06e8dd8fd729849be1f554a414db97dbb84c5a01b86bec82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd6ec7102deb49a06e8dd8fd729849be1f554a414db97dbb84c5a01b86bec82->enter($__internal_2dd6ec7102deb49a06e8dd8fd729849be1f554a414db97dbb84c5a01b86bec82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
        
        $__internal_2dd6ec7102deb49a06e8dd8fd729849be1f554a414db97dbb84c5a01b86bec82->leave($__internal_2dd6ec7102deb49a06e8dd8fd729849be1f554a414db97dbb84c5a01b86bec82_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title \"Symfony - Demos\" %}

{% block content_header '' %}

{% block content %}
    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"{{ path('_demo_hello', {'name': 'World'}) }}\">Hello World</a></li>
        <li><a href=\"{{ path('_demo_secured_hello', {'name': 'World'}) }}\">Access the secured area</a> <a href=\"{{ path('_demo_login') }}\">Go to the login page</a></li>
        {# <li><a href=\"{{ path('_demo_contact') }}\">Send a Message</a></li> #}
    </ul>
{% endblock %}
", "@AcmeDemo/Demo/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle\\Resources\\views\\Demo\\index.html.twig");
    }
}
