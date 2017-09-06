<?php

/* @DelivermeMenu/Areas/show.html.twig */
class __TwigTemplate_a9a3a9cac9bb29d8bffa30f5e2f41dc0b9456c9b1dbb539ad614c4b9d0cae0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Areas/show.html.twig", 1);
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
        $__internal_8b9e14660663865dc93c95f5569dc96dac7086c3d59b957777715a46efeb9461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9e14660663865dc93c95f5569dc96dac7086c3d59b957777715a46efeb9461->enter($__internal_8b9e14660663865dc93c95f5569dc96dac7086c3d59b957777715a46efeb9461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Areas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9e14660663865dc93c95f5569dc96dac7086c3d59b957777715a46efeb9461->leave($__internal_8b9e14660663865dc93c95f5569dc96dac7086c3d59b957777715a46efeb9461_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fb37446466f8eace9f7e6ef47c1ee8b05da9a6dc24b93312f4f84c4b3802c343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb37446466f8eace9f7e6ef47c1ee8b05da9a6dc24b93312f4f84c4b3802c343->enter($__internal_fb37446466f8eace9f7e6ef47c1ee8b05da9a6dc24b93312f4f84c4b3802c343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <th>Zipcode</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Minimunprice</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "minimunPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_created</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datacreated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data_updated</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dataupdated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_fb37446466f8eace9f7e6ef47c1ee8b05da9a6dc24b93312f4f84c4b3802c343->leave($__internal_fb37446466f8eace9f7e6ef47c1ee8b05da9a6dc24b93312f4f84c4b3802c343_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Areas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  108 => 49,  100 => 44,  90 => 37,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                <th>Zipcode</th>
                <td>{{ entity.zipCode }}</td>
            </tr>
            <tr>
                <th>Minimunprice</th>
                <td>{{ entity.minimunPrice }}</td>
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
        <a href=\"{{ path('areas') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('areas_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@DelivermeMenu/Areas/show.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Areas\\show.html.twig");
    }
}
