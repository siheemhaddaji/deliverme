<?php

/* DelivermeMenuBundle:DishesType:edit.html.twig */
class __TwigTemplate_003cfdcdcb0efe3b0a18e6eb25b452a468821197d6e92cbe1bb37ee5c8f1fa40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:DishesType:edit.html.twig", 1);
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
        $__internal_6ae227c38661c8c85986c9312b722f49cc3ea4b954ba3ff44ff5daf0e74205c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae227c38661c8c85986c9312b722f49cc3ea4b954ba3ff44ff5daf0e74205c2->enter($__internal_6ae227c38661c8c85986c9312b722f49cc3ea4b954ba3ff44ff5daf0e74205c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:DishesType:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae227c38661c8c85986c9312b722f49cc3ea4b954ba3ff44ff5daf0e74205c2->leave($__internal_6ae227c38661c8c85986c9312b722f49cc3ea4b954ba3ff44ff5daf0e74205c2_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4177ef6c2f39a70a04f201e85f2d08888474784f61303d6487ab7362f7960d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4177ef6c2f39a70a04f201e85f2d08888474784f61303d6487ab7362f7960d67->enter($__internal_4177ef6c2f39a70a04f201e85f2d08888474784f61303d6487ab7362f7960d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
                                </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_4177ef6c2f39a70a04f201e85f2d08888474784f61303d6487ab7362f7960d67->leave($__internal_4177ef6c2f39a70a04f201e85f2d08888474784f61303d6487ab7362f7960d67_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:DishesType:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  69 => 25,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('dishestype') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:DishesType:edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/DishesType/edit.html.twig");
    }
}
