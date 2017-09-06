<?php

/* DelivermeMenuBundle:Dishes:new.html.twig */
class __TwigTemplate_0532c758ba5f1ac9dc458029277a79512777cf6328ff3bcd40ed51d42bfcd9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Dishes:new.html.twig", 1);
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
        $__internal_34bb710834ac0482aa849365c9feac4fba35375208f1c7df3cc84dc6a7763814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bb710834ac0482aa849365c9feac4fba35375208f1c7df3cc84dc6a7763814->enter($__internal_34bb710834ac0482aa849365c9feac4fba35375208f1c7df3cc84dc6a7763814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Dishes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bb710834ac0482aa849365c9feac4fba35375208f1c7df3cc84dc6a7763814->leave($__internal_34bb710834ac0482aa849365c9feac4fba35375208f1c7df3cc84dc6a7763814_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9a13a443b346bc3661f3c674582ea5d3a958f61679224ec45fca2de6a0cf0552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a13a443b346bc3661f3c674582ea5d3a958f61679224ec45fca2de6a0cf0552->enter($__internal_9a13a443b346bc3661f3c674582ea5d3a958f61679224ec45fca2de6a0cf0552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes");
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
        
        $__internal_9a13a443b346bc3661f3c674582ea5d3a958f61679224ec45fca2de6a0cf0552->leave($__internal_9a13a443b346bc3661f3c674582ea5d3a958f61679224ec45fca2de6a0cf0552_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Dishes:new.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "DelivermeMenuBundle:Dishes:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Dishes/new.html.twig");
    }
}
