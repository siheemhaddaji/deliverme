<?php

/* @DelivermeMenu/ClientAdress/edit.html.twig */
class __TwigTemplate_b9b502d294d54f7ef255f6829852211dd95c3d3a7beb0c601284caadcd7dae69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/ClientAdress/edit.html.twig", 1);
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
        $__internal_ba7b96818389783c3e871a509803cc8b5dde89433a6c0fee1cb08520ed6acdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7b96818389783c3e871a509803cc8b5dde89433a6c0fee1cb08520ed6acdd4->enter($__internal_ba7b96818389783c3e871a509803cc8b5dde89433a6c0fee1cb08520ed6acdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/ClientAdress/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7b96818389783c3e871a509803cc8b5dde89433a6c0fee1cb08520ed6acdd4->leave($__internal_ba7b96818389783c3e871a509803cc8b5dde89433a6c0fee1cb08520ed6acdd4_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_891f91409975da6b88582bb47c9c97ab7d2bae767d377a84321c9650ed663b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891f91409975da6b88582bb47c9c97ab7d2bae767d377a84321c9650ed663b5f->enter($__internal_891f91409975da6b88582bb47c9c97ab7d2bae767d377a84321c9650ed663b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_891f91409975da6b88582bb47c9c97ab7d2bae767d377a84321c9650ed663b5f->leave($__internal_891f91409975da6b88582bb47c9c97ab7d2bae767d377a84321c9650ed663b5f_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/ClientAdress/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  69 => 25,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('clientadress') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('clientadress') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@DelivermeMenu/ClientAdress/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\ClientAdress\\edit.html.twig");
    }
}
