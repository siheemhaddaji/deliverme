<?php

/* @DelivermeMenu/Client/index.html.twig */
class __TwigTemplate_b3b9b42d9cdc2e372ee0386836a2841a4ad87e448d6e78b6e0233d52bf82add2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Client/index.html.twig", 1);
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
        $__internal_e020cd7480f58ddbf9286a8273eed58f7ce7210d5baa3c26056905333183637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e020cd7480f58ddbf9286a8273eed58f7ce7210d5baa3c26056905333183637b->enter($__internal_e020cd7480f58ddbf9286a8273eed58f7ce7210d5baa3c26056905333183637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e020cd7480f58ddbf9286a8273eed58f7ce7210d5baa3c26056905333183637b->leave($__internal_e020cd7480f58ddbf9286a8273eed58f7ce7210d5baa3c26056905333183637b_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_39679836d9d13a8b3072f5962b5695058bf1d161cfb397a4ba3d8018ff0eaf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39679836d9d13a8b3072f5962b5695058bf1d161cfb397a4ba3d8018ff0eaf78->enter($__internal_39679836d9d13a8b3072f5962b5695058bf1d161cfb397a4ba3d8018ff0eaf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
  
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        
        $__internal_39679836d9d13a8b3072f5962b5695058bf1d161cfb397a4ba3d8018ff0eaf78->leave($__internal_39679836d9d13a8b3072f5962b5695058bf1d161cfb397a4ba3d8018ff0eaf78_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Client/index.html.twig";
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
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('client_new') }}\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
  
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('client_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.firstName }}</td>
                <td>{{ entity.lastName }}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('client_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('client_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
    {% endblock %}
", "@DelivermeMenu/Client/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Client\\index.html.twig");
    }
}
