<?php

/* @DelivermeMenu/Packet/edit.html.twig */
class __TwigTemplate_afc5f64cbe211c0785d251ef761d28e2b8cfd7cbf2b935978791537d1eda5ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Packet/edit.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab627644edead4c4672575d3d78fa9ee072489583d2f0ba19e6582143eb00708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab627644edead4c4672575d3d78fa9ee072489583d2f0ba19e6582143eb00708->enter($__internal_ab627644edead4c4672575d3d78fa9ee072489583d2f0ba19e6582143eb00708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Packet/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab627644edead4c4672575d3d78fa9ee072489583d2f0ba19e6582143eb00708->leave($__internal_ab627644edead4c4672575d3d78fa9ee072489583d2f0ba19e6582143eb00708_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8a8a620e5ca048de4fb841502976d5b9bd1856fdd52cb7a648f8a6cba201c1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8a620e5ca048de4fb841502976d5b9bd1856fdd52cb7a648f8a6cba201c1e2->enter($__internal_8a8a620e5ca048de4fb841502976d5b9bd1856fdd52cb7a648f8a6cba201c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter une plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes");
        echo "\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
                                </div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_8a8a620e5ca048de4fb841502976d5b9bd1856fdd52cb7a648f8a6cba201c1e2->leave($__internal_8a8a620e5ca048de4fb841502976d5b9bd1856fdd52cb7a648f8a6cba201c1e2_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Packet/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  68 => 24,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::backend.html.twig' %}

{% block contenu %}
            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter une plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('packet') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@DelivermeMenu/Packet/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Packet\\edit.html.twig");
    }
}
