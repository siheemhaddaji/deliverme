<?php

/* DelivermeMenuBundle:DeliveryMan:show.html.twig */
class __TwigTemplate_8ae95dd015a821bae25254f59c5b9b6281e34e9c2bc90957684d0f1919df7b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:DeliveryMan:show.html.twig", 1);
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
        $__internal_07ab397b625b8ad5c83cc48efd548620d57e9dbfb47fb2357212c5d7e0dc3474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ab397b625b8ad5c83cc48efd548620d57e9dbfb47fb2357212c5d7e0dc3474->enter($__internal_07ab397b625b8ad5c83cc48efd548620d57e9dbfb47fb2357212c5d7e0dc3474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:DeliveryMan:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ab397b625b8ad5c83cc48efd548620d57e9dbfb47fb2357212c5d7e0dc3474->leave($__internal_07ab397b625b8ad5c83cc48efd548620d57e9dbfb47fb2357212c5d7e0dc3474_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_799e3bd895d09595749e401dc59770a85d64262df95e5b2c9d1178575019cafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e3bd895d09595749e401dc59770a85d64262df95e5b2c9d1178575019cafd->enter($__internal_799e3bd895d09595749e401dc59770a85d64262df95e5b2c9d1178575019cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
    <table >
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeofstay</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeOfStay", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Permitsofstay</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "permitsOfStay", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Driverslicensenumber</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "driversLicenseNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Copyofdrivinglicense</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "copyOfDrivingLicense", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_created</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_updated</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_799e3bd895d09595749e401dc59770a85d64262df95e5b2c9d1178575019cafd->leave($__internal_799e3bd895d09595749e401dc59770a85d64262df95e5b2c9d1178575019cafd_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:DeliveryMan:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  157 => 77,  149 => 72,  139 => 65,  132 => 61,  125 => 57,  118 => 53,  111 => 49,  104 => 45,  97 => 41,  90 => 37,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
    <table >
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ entity.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ entity.lastName }}</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>{{ entity.birthDate|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ entity.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ entity.photo }}</td>
            </tr>
            <tr>
                <th>Typeofstay</th>
                <td>{{ entity.typeOfStay }}</td>
            </tr>
            <tr>
                <th>Permitsofstay</th>
                <td>{{ entity.permitsOfStay }}</td>
            </tr>
            <tr>
                <th>Driverslicensenumber</th>
                <td>{{ entity.driversLicenseNumber }}</td>
            </tr>
            <tr>
                <th>Copyofdrivinglicense</th>
                <td>{{ entity.copyOfDrivingLicense }}</td>
            </tr>
            <tr>
                <th>Data_created</th>
                <td>{{ entity.datacreated|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Data_updated</th>
                <td>{{ entity.dataupdated|date('Y-m-d H:i:s') }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('deliveryman') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('deliveryman_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:DeliveryMan:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/DeliveryMan/show.html.twig");
    }
}
