<?php

/* @DelivermeMenu/Areas/index.html.twig */
class __TwigTemplate_0b956f0bf0a050e99ba0d1babf6a85734b4372cb86151c311b884736d69ae415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Areas/index.html.twig", 1);
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
        $__internal_67f691be917727cf6309d473ffdef6875552024111fdc39b40f46318e9eb4a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f691be917727cf6309d473ffdef6875552024111fdc39b40f46318e9eb4a82->enter($__internal_67f691be917727cf6309d473ffdef6875552024111fdc39b40f46318e9eb4a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Areas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f691be917727cf6309d473ffdef6875552024111fdc39b40f46318e9eb4a82->leave($__internal_67f691be917727cf6309d473ffdef6875552024111fdc39b40f46318e9eb4a82_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f46c226167b1a1e39361427633c2293268bc840cb682286c611b1416df189b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46c226167b1a1e39361427633c2293268bc840cb682286c611b1416df189b76->enter($__internal_f46c226167b1a1e39361427633c2293268bc840cb682286c611b1416df189b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "              <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             Menu
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes_new");
        echo "\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
  
        <thead>
            <tr>
                <th>Id</th>
                <th>Zipcode</th>
                <th>Minimunprice</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "zipCode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "minimunPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["entity"], "datacreated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["entity"], "dataupdated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 49
        echo "        </tbody>
    </table>

    
    ";
        
        $__internal_f46c226167b1a1e39361427633c2293268bc840cb682286c611b1416df189b76->leave($__internal_f46c226167b1a1e39361427633c2293268bc840cb682286c611b1416df189b76_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Areas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 49,  112 => 43,  106 => 40,  97 => 36,  91 => 35,  87 => 34,  83 => 33,  77 => 32,  74 => 31,  70 => 30,  50 => 13,  40 => 5,  34 => 4,  11 => 1,);
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


\t{% block contenu %}
              <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             Menu
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes_new') }}\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
  
        <thead>
            <tr>
                <th>Id</th>
                <th>Zipcode</th>
                <th>Minimunprice</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('areas_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.zipCode }}</td>
                <td>{{ entity.minimunPrice }}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('areas_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('areas_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
    {% endblock %}
", "@DelivermeMenu/Areas/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Areas\\index.html.twig");
    }
}
