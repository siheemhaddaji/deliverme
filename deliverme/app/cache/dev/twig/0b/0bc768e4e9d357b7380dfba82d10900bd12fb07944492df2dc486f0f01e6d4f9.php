<?php

/* DelivermeMenuBundle:DeliveryMan:new.html.twig */
class __TwigTemplate_bc9f3751c926d60b1dcb982b8533f1226e34f304fa0af819083895f0e1bd9f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:DeliveryMan:new.html.twig", 1);
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
        $__internal_7ed2cd72f7f45bc9ecee2e8a7b73cf8c8e3a5b4a440e5f56d6a8d1cd63c1f609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed2cd72f7f45bc9ecee2e8a7b73cf8c8e3a5b4a440e5f56d6a8d1cd63c1f609->enter($__internal_7ed2cd72f7f45bc9ecee2e8a7b73cf8c8e3a5b4a440e5f56d6a8d1cd63c1f609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:DeliveryMan:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed2cd72f7f45bc9ecee2e8a7b73cf8c8e3a5b4a440e5f56d6a8d1cd63c1f609->leave($__internal_7ed2cd72f7f45bc9ecee2e8a7b73cf8c8e3a5b4a440e5f56d6a8d1cd63c1f609_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_779200b985def0510619cfd0a95daf37ba13ba63e26b361b8f06e8cd0f808b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779200b985def0510619cfd0a95daf37ba13ba63e26b361b8f06e8cd0f808b89->enter($__internal_779200b985def0510619cfd0a95daf37ba13ba63e26b361b8f06e8cd0f808b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_779200b985def0510619cfd0a95daf37ba13ba63e26b361b8f06e8cd0f808b89->leave($__internal_779200b985def0510619cfd0a95daf37ba13ba63e26b361b8f06e8cd0f808b89_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:DeliveryMan:new.html.twig";
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
", "DelivermeMenuBundle:DeliveryMan:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/DeliveryMan/new.html.twig");
    }
}
