<?php

/* @DelivermeMenu/DishesType/new.html.twig */
class __TwigTemplate_2763a917322fbcd720cfef19361f393808ff1cd9259aa5a01e916ec33fc06a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/DishesType/new.html.twig", 1);
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
        $__internal_35233f52fb7a9143947eed50c888e2341acbba40a1cb480d0f98f599b4cb15fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35233f52fb7a9143947eed50c888e2341acbba40a1cb480d0f98f599b4cb15fd->enter($__internal_35233f52fb7a9143947eed50c888e2341acbba40a1cb480d0f98f599b4cb15fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/DishesType/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35233f52fb7a9143947eed50c888e2341acbba40a1cb480d0f98f599b4cb15fd->leave($__internal_35233f52fb7a9143947eed50c888e2341acbba40a1cb480d0f98f599b4cb15fd_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_55a2901edc5fce20c61cbc865adb49ea86da1aefba7f150f9964729ab4c16d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a2901edc5fce20c61cbc865adb49ea86da1aefba7f150f9964729ab4c16d1a->enter($__internal_55a2901edc5fce20c61cbc865adb49ea86da1aefba7f150f9964729ab4c16d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter un plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishestype");
        echo "\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                                </div>
                            </div>
                          </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
";
        
        $__internal_55a2901edc5fce20c61cbc865adb49ea86da1aefba7f150f9964729ab4c16d1a->leave($__internal_55a2901edc5fce20c61cbc865adb49ea86da1aefba7f150f9964729ab4c16d1a_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/DishesType/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  51 => 14,  40 => 5,  34 => 4,  11 => 1,);
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
                              Ajouter un plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishestype') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    {{ form(form) }}
                                </div>
                            </div>
                          </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
{% endblock %}
", "@DelivermeMenu/DishesType/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\DishesType\\new.html.twig");
    }
}
