<?php

/* DelivermeMenuBundle:ClientAdress:show.html.twig */
class __TwigTemplate_37e1a5efb5ace9a357cf8423da0b2e138d6f45c4658913770a07629c06752630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:ClientAdress:show.html.twig", 1);
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
        $__internal_13f10bc3af68e1e274b340f8e38eccceb863d5d98cb3f2ccb91990f72b6f1985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f10bc3af68e1e274b340f8e38eccceb863d5d98cb3f2ccb91990f72b6f1985->enter($__internal_13f10bc3af68e1e274b340f8e38eccceb863d5d98cb3f2ccb91990f72b6f1985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:ClientAdress:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f10bc3af68e1e274b340f8e38eccceb863d5d98cb3f2ccb91990f72b6f1985->leave($__internal_13f10bc3af68e1e274b340f8e38eccceb863d5d98cb3f2ccb91990f72b6f1985_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4e43140e65120165a58047541d7e8a376f97e6e1b3cfcb11650ef670c940073b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e43140e65120165a58047541d7e8a376f97e6e1b3cfcb11650ef670c940073b->enter($__internal_4e43140e65120165a58047541d7e8a376f97e6e1b3cfcb11650ef670c940073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <th>Adress</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_created</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_updated</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_4e43140e65120165a58047541d7e8a376f97e6e1b3cfcb11650ef670c940073b->leave($__internal_4e43140e65120165a58047541d7e8a376f97e6e1b3cfcb11650ef670c940073b_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:ClientAdress:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  115 => 53,  107 => 48,  97 => 41,  90 => 37,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                <th>Adress</th>
                <td>{{ entity.adress }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ entity.zipCode }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ entity.title }}</td>
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
        <a href=\"{{ path('clientadress') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('clientadress_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:ClientAdress:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/ClientAdress/show.html.twig");
    }
}
