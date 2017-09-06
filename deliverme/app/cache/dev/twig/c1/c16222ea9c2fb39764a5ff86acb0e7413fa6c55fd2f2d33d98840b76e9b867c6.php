<?php

/* DelivermeMenuBundle:Areas:new.html.twig */
class __TwigTemplate_992b850ff5b22644c2ff7c103fbae78cc3d36bc859ab636b297de67e7265cda1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Areas:new.html.twig", 1);
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
        $__internal_cc18e7fdb6194a7d21d91eb211369a6022a78c51060b6e542b6542ce00e2d3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc18e7fdb6194a7d21d91eb211369a6022a78c51060b6e542b6542ce00e2d3e4->enter($__internal_cc18e7fdb6194a7d21d91eb211369a6022a78c51060b6e542b6542ce00e2d3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Areas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc18e7fdb6194a7d21d91eb211369a6022a78c51060b6e542b6542ce00e2d3e4->leave($__internal_cc18e7fdb6194a7d21d91eb211369a6022a78c51060b6e542b6542ce00e2d3e4_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_31edef8f4285949b6ee636a7368aca95fc3109db9d5ac76fea84b0120de7450f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31edef8f4285949b6ee636a7368aca95fc3109db9d5ac76fea84b0120de7450f->enter($__internal_31edef8f4285949b6ee636a7368aca95fc3109db9d5ac76fea84b0120de7450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas");
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
        
        $__internal_31edef8f4285949b6ee636a7368aca95fc3109db9d5ac76fea84b0120de7450f->leave($__internal_31edef8f4285949b6ee636a7368aca95fc3109db9d5ac76fea84b0120de7450f_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Areas:new.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('areas') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "DelivermeMenuBundle:Areas:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Areas/new.html.twig");
    }
}
