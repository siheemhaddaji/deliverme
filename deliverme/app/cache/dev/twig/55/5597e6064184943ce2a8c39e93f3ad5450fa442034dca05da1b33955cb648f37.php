<?php

/* @DelivermeMenu/DeliveryMan/new.html.twig */
class __TwigTemplate_bc3079d71cb4f8e053c5cb6c61c228f089e015e25671a71261440611ce2eca22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/DeliveryMan/new.html.twig", 1);
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
        $__internal_50cf35d1ac2b4d2e82b1d1bb801331371c4f9fca1e08e5ba3a37cd1dbbf60428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cf35d1ac2b4d2e82b1d1bb801331371c4f9fca1e08e5ba3a37cd1dbbf60428->enter($__internal_50cf35d1ac2b4d2e82b1d1bb801331371c4f9fca1e08e5ba3a37cd1dbbf60428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/DeliveryMan/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50cf35d1ac2b4d2e82b1d1bb801331371c4f9fca1e08e5ba3a37cd1dbbf60428->leave($__internal_50cf35d1ac2b4d2e82b1d1bb801331371c4f9fca1e08e5ba3a37cd1dbbf60428_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6d69e867062d87ea10df5502ee96cb669f6f5719d595ac4f94076891c74b4d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d69e867062d87ea10df5502ee96cb669f6f5719d595ac4f94076891c74b4d37->enter($__internal_6d69e867062d87ea10df5502ee96cb669f6f5719d595ac4f94076891c74b4d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter un livreur
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman_new");
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
        
        $__internal_6d69e867062d87ea10df5502ee96cb669f6f5719d595ac4f94076891c74b4d37->leave($__internal_6d69e867062d87ea10df5502ee96cb669f6f5719d595ac4f94076891c74b4d37_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/DeliveryMan/new.html.twig";
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
                              Ajouter un livreur
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('deliveryman_new') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "@DelivermeMenu/DeliveryMan/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\DeliveryMan\\new.html.twig");
    }
}
