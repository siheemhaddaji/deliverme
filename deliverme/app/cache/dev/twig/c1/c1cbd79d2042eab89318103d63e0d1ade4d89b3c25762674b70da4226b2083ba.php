<?php

/* DelivermeMenuBundle:ClientAdress:edit.html.twig */
class __TwigTemplate_8e03ed8cef353bd990e7d89edbf3140f71520692c5f8c77e11d4851128461797 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:ClientAdress:edit.html.twig", 1);
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
        $__internal_87828cfec582d67f3ee48e56afc0bbeb650f23e05962396aed36cf4bf8b791a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87828cfec582d67f3ee48e56afc0bbeb650f23e05962396aed36cf4bf8b791a9->enter($__internal_87828cfec582d67f3ee48e56afc0bbeb650f23e05962396aed36cf4bf8b791a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:ClientAdress:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87828cfec582d67f3ee48e56afc0bbeb650f23e05962396aed36cf4bf8b791a9->leave($__internal_87828cfec582d67f3ee48e56afc0bbeb650f23e05962396aed36cf4bf8b791a9_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_79c66d799b4273fce906a58571348a8c135a33ba2368d51ad426ddac22cf8423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c66d799b4273fce906a58571348a8c135a33ba2368d51ad426ddac22cf8423->enter($__internal_79c66d799b4273fce906a58571348a8c135a33ba2368d51ad426ddac22cf8423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
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
        
        $__internal_79c66d799b4273fce906a58571348a8c135a33ba2368d51ad426ddac22cf8423->leave($__internal_79c66d799b4273fce906a58571348a8c135a33ba2368d51ad426ddac22cf8423_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:ClientAdress:edit.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('clientadress') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">

    {{ form(edit_form) }}
                                </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('clientadress') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "DelivermeMenuBundle:ClientAdress:edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/ClientAdress/edit.html.twig");
    }
}
