<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c241a53c123772a8233301c35ee15bf811ed1182bf099209a652047b5205464 extends Twig_Template
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
        $__internal_e5fc5492a9ebedbcee237586c516629ad8c5cc85990e5cb4b02d94f4db6d3cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fc5492a9ebedbcee237586c516629ad8c5cc85990e5cb4b02d94f4db6d3cd5->enter($__internal_e5fc5492a9ebedbcee237586c516629ad8c5cc85990e5cb4b02d94f4db6d3cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fc5492a9ebedbcee237586c516629ad8c5cc85990e5cb4b02d94f4db6d3cd5->leave($__internal_e5fc5492a9ebedbcee237586c516629ad8c5cc85990e5cb4b02d94f4db6d3cd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2def4b4ff76dae3d59d2dfd9855c0bc65f94f18078672683a935cd79abd3e638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2def4b4ff76dae3d59d2dfd9855c0bc65f94f18078672683a935cd79abd3e638->enter($__internal_2def4b4ff76dae3d59d2dfd9855c0bc65f94f18078672683a935cd79abd3e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2def4b4ff76dae3d59d2dfd9855c0bc65f94f18078672683a935cd79abd3e638->leave($__internal_2def4b4ff76dae3d59d2dfd9855c0bc65f94f18078672683a935cd79abd3e638_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_47208eda11798392c7d5087366858f48400d2564d7d059f2eab6fac50a6f661b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47208eda11798392c7d5087366858f48400d2564d7d059f2eab6fac50a6f661b->enter($__internal_47208eda11798392c7d5087366858f48400d2564d7d059f2eab6fac50a6f661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47208eda11798392c7d5087366858f48400d2564d7d059f2eab6fac50a6f661b->leave($__internal_47208eda11798392c7d5087366858f48400d2564d7d059f2eab6fac50a6f661b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90476d7272de11a84201f6792312464be3ac26bebd799d4bfac9c940ae165d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90476d7272de11a84201f6792312464be3ac26bebd799d4bfac9c940ae165d20->enter($__internal_90476d7272de11a84201f6792312464be3ac26bebd799d4bfac9c940ae165d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_90476d7272de11a84201f6792312464be3ac26bebd799d4bfac9c940ae165d20->leave($__internal_90476d7272de11a84201f6792312464be3ac26bebd799d4bfac9c940ae165d20_prof);

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
