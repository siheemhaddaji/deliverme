<?php

/* DelivermeMenuBundle:DishesType:index.html.twig */
class __TwigTemplate_925a2d7f48b0cb273880dd7bebffe825695f3b109c2bec1c8c49c9b7f0ee76a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:DishesType:index.html.twig", 1);
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
        $__internal_459d1d97122ec49144aa05b49a47b13b571adcbeb88b5fd133c4f0ddcfce41c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459d1d97122ec49144aa05b49a47b13b571adcbeb88b5fd133c4f0ddcfce41c5->enter($__internal_459d1d97122ec49144aa05b49a47b13b571adcbeb88b5fd133c4f0ddcfce41c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:DishesType:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459d1d97122ec49144aa05b49a47b13b571adcbeb88b5fd133c4f0ddcfce41c5->leave($__internal_459d1d97122ec49144aa05b49a47b13b571adcbeb88b5fd133c4f0ddcfce41c5_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4195a3abcc05be1485e65a27d9c892e0e809a753adba91b067d0e06b28a4cfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4195a3abcc05be1485e65a27d9c892e0e809a753adba91b067d0e06b28a4cfab->enter($__internal_4195a3abcc05be1485e65a27d9c892e0e809a753adba91b067d0e06b28a4cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "
    <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             categories
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype_new");
        echo "\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
    <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">

        <thead>
            <tr>
           
                <th>Libellé</th>
                <th>Statut</th>
                <th>Rang</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ranking", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["entity"], "datacreated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["entity"], "dataupdated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

     
    ";
        
        $__internal_4195a3abcc05be1485e65a27d9c892e0e809a753adba91b067d0e06b28a4cfab->leave($__internal_4195a3abcc05be1485e65a27d9c892e0e809a753adba91b067d0e06b28a4cfab_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:DishesType:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  118 => 45,  112 => 42,  103 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  79 => 33,  76 => 32,  72 => 31,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                             categories
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishestype_new') }}\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
    <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">

        <thead>
            <tr>
           
                <th>Libellé</th>
                <th>Statut</th>
                <th>Rang</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('dishestype_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.name }}</td>
                <td>{{ entity.status }}</td>
                <td>{{ entity.ranking }}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('dishestype_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('dishestype_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

     
    {% endblock %}
", "DelivermeMenuBundle:DishesType:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/DishesType/index.html.twig");
    }
}
