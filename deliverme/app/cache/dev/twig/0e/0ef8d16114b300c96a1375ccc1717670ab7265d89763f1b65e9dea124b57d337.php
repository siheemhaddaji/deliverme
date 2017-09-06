<?php

/* DelivermeMenuBundle:DishesType:show.html.twig */
class __TwigTemplate_c8c08471cfff413e2d33bfc624f61b4f47f70c16d4ac1eb22da59139d03ee326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:DishesType:show.html.twig", 1);
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
        $__internal_41501de32ac892452b653f4ffa3bdbfa061522bdb7c198c8e8aec0d928a9f29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41501de32ac892452b653f4ffa3bdbfa061522bdb7c198c8e8aec0d928a9f29a->enter($__internal_41501de32ac892452b653f4ffa3bdbfa061522bdb7c198c8e8aec0d928a9f29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:DishesType:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41501de32ac892452b653f4ffa3bdbfa061522bdb7c198c8e8aec0d928a9f29a->leave($__internal_41501de32ac892452b653f4ffa3bdbfa061522bdb7c198c8e8aec0d928a9f29a_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6ac175666d73c59c1aa2c41c5bb21b5620dc77d3fa23fc0dd7a53184286292e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac175666d73c59c1aa2c41c5bb21b5620dc77d3fa23fc0dd7a53184286292e9->enter($__internal_6ac175666d73c59c1aa2c41c5bb21b5620dc77d3fa23fc0dd7a53184286292e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <th>Name</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ranking", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_6ac175666d73c59c1aa2c41c5bb21b5620dc77d3fa23fc0dd7a53184286292e9->leave($__internal_6ac175666d73c59c1aa2c41c5bb21b5620dc77d3fa23fc0dd7a53184286292e9_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:DishesType:show.html.twig";
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
                <th>Name</th>
                <td>{{ entity.name }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ entity.status }}</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>{{ entity.ranking }}</td>
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
        <a href=\"{{ path('dishestype') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('dishestype_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:DishesType:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/DishesType/show.html.twig");
    }
}