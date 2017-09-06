<?php

/* DelivermeMenuBundle:Dishes:index.html.twig */
class __TwigTemplate_6f537ccb68472c7fda7b055ea0ad9f54e486c27e21e8774c06e7450e3224ec8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Dishes:index.html.twig", 1);
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
        $__internal_4121874cbcf381cf4d597825992333004c5170fbe06ae1bc9baad7483e0e326e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4121874cbcf381cf4d597825992333004c5170fbe06ae1bc9baad7483e0e326e->enter($__internal_4121874cbcf381cf4d597825992333004c5170fbe06ae1bc9baad7483e0e326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Dishes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4121874cbcf381cf4d597825992333004c5170fbe06ae1bc9baad7483e0e326e->leave($__internal_4121874cbcf381cf4d597825992333004c5170fbe06ae1bc9baad7483e0e326e_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5bd54cea1018030e16209480861c2919a198011e43c84f78dfc9806cb4e70010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd54cea1018030e16209480861c2919a198011e43c84f78dfc9806cb4e70010->enter($__internal_5bd54cea1018030e16209480861c2919a198011e43c84f78dfc9806cb4e70010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes_new");
        echo "\"><i class=\"fa fa-plus\" ></i> Ajouter</a>

                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Libellé</th>
                <th>Prix</th>
              
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
                <td> <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["entity"], "webPath", array())), "html", null, true);
            echo "\"  width=\"100px\" alt=\"img04\"></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
            echo " CHF</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datacreated", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataupdated", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                <td>
                
                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> show</a>
                   
                        <a class=\"btn btn-warning btn-xs\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i> edit</a>
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
          </div>

    ";
        
        $__internal_5bd54cea1018030e16209480861c2919a198011e43c84f78dfc9806cb4e70010->leave($__internal_5bd54cea1018030e16209480861c2919a198011e43c84f78dfc9806cb4e70010_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Dishes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  105 => 42,  100 => 40,  94 => 37,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  75 => 32,  71 => 31,  53 => 16,  40 => 5,  34 => 4,  11 => 1,);
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
                <th>Photo</th>
                <th>Libellé</th>
                <th>Prix</th>
              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td> <img src=\"{{ asset(entity.webPath) }}\"  width=\"100px\" alt=\"img04\"></td>
                <td>{{ entity.name }}</td>
                <td>{{ entity.price }} CHF</td>
                <td>{{ entity.datacreated |date(\"m/d/Y\")}}</td>
                <td>{{ entity.dataupdated|date(\"m/d/Y\") }}</td>
                <td>
                
                        <a class=\"btn btn-info btn-xs\" href=\"{{ path('dishes_show', { 'id': entity.id }) }}\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> show</a>
                   
                        <a class=\"btn btn-warning btn-xs\" href=\"{{ path('dishes_edit', { 'id': entity.id }) }}\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i> edit</a>
                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
          </div>

    {% endblock %}
", "DelivermeMenuBundle:Dishes:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Dishes\\index.html.twig");
    }
}
