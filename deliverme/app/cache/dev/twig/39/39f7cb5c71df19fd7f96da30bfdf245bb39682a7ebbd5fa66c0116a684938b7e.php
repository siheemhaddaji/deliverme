<?php

/* @DelivermeMenu/DeliveryMan/index.html.twig */
class __TwigTemplate_55e5b189206763cb6ce964b352a03394a9451e5f207ec00d4d98fe2f59302fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/DeliveryMan/index.html.twig", 1);
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
        $__internal_05397187fd64da28d734e3ee75d0914146c332d6f7d23208f187174996921757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05397187fd64da28d734e3ee75d0914146c332d6f7d23208f187174996921757->enter($__internal_05397187fd64da28d734e3ee75d0914146c332d6f7d23208f187174996921757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/DeliveryMan/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05397187fd64da28d734e3ee75d0914146c332d6f7d23208f187174996921757->leave($__internal_05397187fd64da28d734e3ee75d0914146c332d6f7d23208f187174996921757_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_12b7b2fcc4486088d47b1df78e9cd442cd54f8ffa8032dd65e1e98ffa0007889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b7b2fcc4486088d47b1df78e9cd442cd54f8ffa8032dd65e1e98ffa0007889->enter($__internal_12b7b2fcc4486088d47b1df78e9cd442cd54f8ffa8032dd65e1e98ffa0007889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "      

            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             Menu
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_new");
        echo "\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
        <thead>
            <tr>
                 <td> <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath", array())), "html", null, true);
        echo "\"  width=\"100px\" alt=\"img04\"></td>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Phonenumber</th>
                <th>Typeofstay</th>
                <th>Permitsofstay</th>
                <th>Driverslicensenumber</th>
                <th>Copyofdrivinglicense</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "            <tr>
                
              <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
              <td> <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["entity"], "webPath", array())), "html", null, true);
            echo "\"  width=\"100px\" alt=\"img04\"></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "birthDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "photo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeOfStay", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "permitsOfStay", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "driversLicenseNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "copyOfDrivingLicense", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if ($this->getAttribute($context["entity"], "datacreated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "dataupdated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 67
        echo "        </tbody>
    </table>
          </div>

    ";
        
        $__internal_12b7b2fcc4486088d47b1df78e9cd442cd54f8ffa8032dd65e1e98ffa0007889->leave($__internal_12b7b2fcc4486088d47b1df78e9cd442cd54f8ffa8032dd65e1e98ffa0007889_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/DeliveryMan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 67,  158 => 60,  152 => 57,  143 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  113 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  89 => 41,  85 => 39,  81 => 38,  63 => 23,  53 => 16,  40 => 5,  34 => 4,  11 => 1,);
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
                              
                                <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('deliveryman_new') }}\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
        <thead>
            <tr>
                 <td> <img src=\"{{ asset(entity.webPath) }}\"  width=\"100px\" alt=\"img04\"></td>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Phonenumber</th>
                <th>Typeofstay</th>
                <th>Permitsofstay</th>
                <th>Driverslicensenumber</th>
                <th>Copyofdrivinglicense</th>
                <th>Data_created</th>
                <th>Data_updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                
              <td><a href=\"{{ path('deliveryman_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
              <td> <img src=\"{{ asset(entity.webPath) }}\"  width=\"100px\" alt=\"img04\"></td>
                <td>{{ entity.firstName }}</td>
                <td>{{ entity.lastName }}</td>
                <td>{% if entity.birthDate %}{{ entity.birthDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ entity.phoneNumber }}</td>
                <td>{{ entity.photo }}</td>
                <td>{{ entity.typeOfStay }}</td>
                <td>{{ entity.permitsOfStay }}</td>
                <td>{{ entity.driversLicenseNumber }}</td>
                <td>{{ entity.copyOfDrivingLicense }}</td>
                <td>{% if entity.datacreated %}{{ entity.datacreated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.dataupdated %}{{ entity.dataupdated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('deliveryman_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('deliveryman_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
         
        {% endfor %}
        </tbody>
    </table>
          </div>

    {% endblock %}
", "@DelivermeMenu/DeliveryMan/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\DeliveryMan\\index.html.twig");
    }
}
