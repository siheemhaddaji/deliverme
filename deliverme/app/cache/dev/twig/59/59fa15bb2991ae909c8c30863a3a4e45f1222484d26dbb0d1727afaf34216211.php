<?php

/* @DelivermeMenu/DeliveryMan/edit.html.twig */
class __TwigTemplate_b696a778cfed8d79b6c1841d6ac39d0d49d5ddc76fd3525406d7f089126519eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/DeliveryMan/edit.html.twig", 1);
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
        $__internal_07be8182f98cf85c9863b9fcb582508c8e544ebda1a62faf12309b38a619a6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07be8182f98cf85c9863b9fcb582508c8e544ebda1a62faf12309b38a619a6f9->enter($__internal_07be8182f98cf85c9863b9fcb582508c8e544ebda1a62faf12309b38a619a6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/DeliveryMan/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07be8182f98cf85c9863b9fcb582508c8e544ebda1a62faf12309b38a619a6f9->leave($__internal_07be8182f98cf85c9863b9fcb582508c8e544ebda1a62faf12309b38a619a6f9_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b470e86328af9b88b0b336b9b07781b09aeb69d9237721bcdbde66d222a5c5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b470e86328af9b88b0b336b9b07781b09aeb69d9237721bcdbde66d222a5c5dc->enter($__internal_b470e86328af9b88b0b336b9b07781b09aeb69d9237721bcdbde66d222a5c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman");
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
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b470e86328af9b88b0b336b9b07781b09aeb69d9237721bcdbde66d222a5c5dc->leave($__internal_b470e86328af9b88b0b336b9b07781b09aeb69d9237721bcdbde66d222a5c5dc_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/DeliveryMan/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  68 => 24,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('deliveryman') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('deliveryman') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@DelivermeMenu/DeliveryMan/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\DeliveryMan\\edit.html.twig");
    }
}
