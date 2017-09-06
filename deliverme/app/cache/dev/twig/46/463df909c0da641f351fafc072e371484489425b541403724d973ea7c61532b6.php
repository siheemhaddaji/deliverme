<?php

/* @DelivermeMenu/DishesType/edit.html.twig */
class __TwigTemplate_07dce26813254da197a70425bb10fc620273d549636b1cc4b5d6830875e20e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/DishesType/edit.html.twig", 1);
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
        $__internal_ac9cbb90e80a4bdaca00e412ecdb7e7df995bc699dcb74b94bda292e6198cd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9cbb90e80a4bdaca00e412ecdb7e7df995bc699dcb74b94bda292e6198cd45->enter($__internal_ac9cbb90e80a4bdaca00e412ecdb7e7df995bc699dcb74b94bda292e6198cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/DishesType/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac9cbb90e80a4bdaca00e412ecdb7e7df995bc699dcb74b94bda292e6198cd45->leave($__internal_ac9cbb90e80a4bdaca00e412ecdb7e7df995bc699dcb74b94bda292e6198cd45_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_265d557dc96da4c3ed6787e6d641d84a324affa948c930c8885f78bbea92f6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265d557dc96da4c3ed6787e6d641d84a324affa948c930c8885f78bbea92f6ee->enter($__internal_265d557dc96da4c3ed6787e6d641d84a324affa948c930c8885f78bbea92f6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype");
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
        
        $__internal_265d557dc96da4c3ed6787e6d641d84a324affa948c930c8885f78bbea92f6ee->leave($__internal_265d557dc96da4c3ed6787e6d641d84a324affa948c930c8885f78bbea92f6ee_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/DishesType/edit.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('dishestype') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@DelivermeMenu/DishesType/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\DishesType\\edit.html.twig");
    }
}
