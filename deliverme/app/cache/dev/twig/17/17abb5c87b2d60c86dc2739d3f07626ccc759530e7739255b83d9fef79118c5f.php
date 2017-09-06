<?php

/* DelivermeMenuBundle:ClientAdress:new.html.twig */
class __TwigTemplate_4f2b35e9e35b240cce94d712853524b7386ae29a8a871ea5687d082da667be22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:ClientAdress:new.html.twig", 1);
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
        $__internal_604a88d6c94260c5b5fa6ee5fac068b1f9184c679302b2f7da19f8b5cf36c7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604a88d6c94260c5b5fa6ee5fac068b1f9184c679302b2f7da19f8b5cf36c7f3->enter($__internal_604a88d6c94260c5b5fa6ee5fac068b1f9184c679302b2f7da19f8b5cf36c7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:ClientAdress:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604a88d6c94260c5b5fa6ee5fac068b1f9184c679302b2f7da19f8b5cf36c7f3->leave($__internal_604a88d6c94260c5b5fa6ee5fac068b1f9184c679302b2f7da19f8b5cf36c7f3_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ebf8ba8c5a9cabeb7087688a265cc42c13f809ca3f0ac72a8ec4c08e08c8c0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf8ba8c5a9cabeb7087688a265cc42c13f809ca3f0ac72a8ec4c08e08c8c0d1->enter($__internal_ebf8ba8c5a9cabeb7087688a265cc42c13f809ca3f0ac72a8ec4c08e08c8c0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientadress");
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
        
        $__internal_ebf8ba8c5a9cabeb7087688a265cc42c13f809ca3f0ac72a8ec4c08e08c8c0d1->leave($__internal_ebf8ba8c5a9cabeb7087688a265cc42c13f809ca3f0ac72a8ec4c08e08c8c0d1_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:ClientAdress:new.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('clientadress') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "DelivermeMenuBundle:ClientAdress:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/ClientAdress/new.html.twig");
    }
}
