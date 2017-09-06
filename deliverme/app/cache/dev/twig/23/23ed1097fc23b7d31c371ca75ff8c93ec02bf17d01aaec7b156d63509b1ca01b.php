<?php

/* DelivermeMenuBundle:PacketDetails:edit.html.twig */
class __TwigTemplate_793026dccd10e8ec8a2ca533183c732fac246c02ea9da951cd8ef379ec50d9fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:PacketDetails:edit.html.twig", 1);
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
        $__internal_ae8c4e10a5f33af955b83d8d895067106e9ac817bc74d68dad1f9d006d4b70e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8c4e10a5f33af955b83d8d895067106e9ac817bc74d68dad1f9d006d4b70e1->enter($__internal_ae8c4e10a5f33af955b83d8d895067106e9ac817bc74d68dad1f9d006d4b70e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:PacketDetails:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8c4e10a5f33af955b83d8d895067106e9ac817bc74d68dad1f9d006d4b70e1->leave($__internal_ae8c4e10a5f33af955b83d8d895067106e9ac817bc74d68dad1f9d006d4b70e1_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_17df05252962762d10b040cef8cc128a667d95618db791cf961a9c3fb73ddf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17df05252962762d10b040cef8cc128a667d95618db791cf961a9c3fb73ddf61->enter($__internal_17df05252962762d10b040cef8cc128a667d95618db791cf961a9c3fb73ddf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packetdetails");
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
        
        $__internal_17df05252962762d10b040cef8cc128a667d95618db791cf961a9c3fb73ddf61->leave($__internal_17df05252962762d10b040cef8cc128a667d95618db791cf961a9c3fb73ddf61_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:PacketDetails:edit.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('packetdetails') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:PacketDetails:edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/PacketDetails/edit.html.twig");
    }
}
