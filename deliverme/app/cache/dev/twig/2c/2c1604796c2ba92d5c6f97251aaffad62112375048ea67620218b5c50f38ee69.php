<?php

/* DelivermeMenuBundle:Packet:index.html.twig */
class __TwigTemplate_a496bc7043d22e2ae0934ac0abd4f63948dcf8881fb42d1e142b1e4df3769d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Packet:index.html.twig", 1);
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
        $__internal_90e893a1a4004c59ddd14c06d9f4c45c9cc4481d93e49289aebeeab478a22409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e893a1a4004c59ddd14c06d9f4c45c9cc4481d93e49289aebeeab478a22409->enter($__internal_90e893a1a4004c59ddd14c06d9f4c45c9cc4481d93e49289aebeeab478a22409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Packet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e893a1a4004c59ddd14c06d9f4c45c9cc4481d93e49289aebeeab478a22409->leave($__internal_90e893a1a4004c59ddd14c06d9f4c45c9cc4481d93e49289aebeeab478a22409_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_03ab82a0b595f5d1135934fe7cdceb32444b5cf5c59796f4bee27049f4fa7e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ab82a0b595f5d1135934fe7cdceb32444b5cf5c59796f4bee27049f4fa7e6e->enter($__internal_03ab82a0b595f5d1135934fe7cdceb32444b5cf5c59796f4bee27049f4fa7e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <th>Price</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["entity"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["entity"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["entity"], "datacreated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["entity"], "dataupdated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 53
        echo "     
        </tbody>
    </table>
          </div>

    ";
        
        $__internal_03ab82a0b595f5d1135934fe7cdceb32444b5cf5c59796f4bee27049f4fa7e6e->leave($__internal_03ab82a0b595f5d1135934fe7cdceb32444b5cf5c59796f4bee27049f4fa7e6e_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Packet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  123 => 47,  117 => 44,  108 => 40,  102 => 39,  96 => 38,  90 => 37,  86 => 36,  80 => 35,  77 => 34,  73 => 33,  50 => 13,  40 => 5,  34 => 4,  11 => 1,);
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
                <th>Price</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('packet_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.price }}</td>
                <td>{% if entity.startDate %}{{ entity.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.endDate %}{{ entity.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('packet_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('packet_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
     
        </tbody>
    </table>
          </div>

    {% endblock %}
", "DelivermeMenuBundle:Packet:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Packet/index.html.twig");
    }
}
