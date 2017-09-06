<?php

/* @DelivermeMenu/PacketDetails/index.html.twig */
class __TwigTemplate_6834ef77bcba44c02b351b2fab2e413da99f6abfe14832fb05d68c502bbcc428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/PacketDetails/index.html.twig", 1);
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
        $__internal_354bcf362c9a9872d4e99c5bb0932bab535c8a2a8f13c0cc9fd8849cf467498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354bcf362c9a9872d4e99c5bb0932bab535c8a2a8f13c0cc9fd8849cf467498c->enter($__internal_354bcf362c9a9872d4e99c5bb0932bab535c8a2a8f13c0cc9fd8849cf467498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/PacketDetails/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_354bcf362c9a9872d4e99c5bb0932bab535c8a2a8f13c0cc9fd8849cf467498c->leave($__internal_354bcf362c9a9872d4e99c5bb0932bab535c8a2a8f13c0cc9fd8849cf467498c_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a89034110d687b8d466a1ffd0821a188784f465870c60bd565e5e817849f6bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89034110d687b8d466a1ffd0821a188784f465870c60bd565e5e817849f6bd1->enter($__internal_a89034110d687b8d466a1ffd0821a188784f465870c60bd565e5e817849f6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "            <section class=\"wrapper\">
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
                <th>Amount</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packetdetails_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amount", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packetdetails_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packetdetails_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
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
          </div>

    ";
        
        $__internal_a89034110d687b8d466a1ffd0821a188784f465870c60bd565e5e817849f6bd1->leave($__internal_a89034110d687b8d466a1ffd0821a188784f465870c60bd565e5e817849f6bd1_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/PacketDetails/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  112 => 43,  106 => 40,  97 => 36,  91 => 35,  87 => 34,  83 => 33,  77 => 32,  74 => 31,  70 => 30,  50 => 13,  40 => 5,  34 => 4,  11 => 1,);
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
                <th>Amount</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('packetdetails_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.price }}</td>
                <td>{{ entity.amount }}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('packetdetails_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('packetdetails_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
    </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
          </div>

    {% endblock %}
", "@DelivermeMenu/PacketDetails/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\PacketDetails\\index.html.twig");
    }
}
