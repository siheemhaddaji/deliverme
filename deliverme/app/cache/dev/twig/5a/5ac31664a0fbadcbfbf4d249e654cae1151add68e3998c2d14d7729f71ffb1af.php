<?php

/* @DelivermeMenu/Dishes/new.html.twig */
class __TwigTemplate_3ad8ec3aed866063e13e5f692eb4428e3c763d7303e06b08fc5dad8a1c13ec93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Dishes/new.html.twig", 1);
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
        $__internal_651249358b95f9b1a49999a6f1b54bd02e7049a2eb1a32e7daaafefcc8e62ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651249358b95f9b1a49999a6f1b54bd02e7049a2eb1a32e7daaafefcc8e62ffc->enter($__internal_651249358b95f9b1a49999a6f1b54bd02e7049a2eb1a32e7daaafefcc8e62ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Dishes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651249358b95f9b1a49999a6f1b54bd02e7049a2eb1a32e7daaafefcc8e62ffc->leave($__internal_651249358b95f9b1a49999a6f1b54bd02e7049a2eb1a32e7daaafefcc8e62ffc_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8bb401745ba4fa88b4e03ece782150ace1f628992faedbbd233c6cd0a58c203a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb401745ba4fa88b4e03ece782150ace1f628992faedbbd233c6cd0a58c203a->enter($__internal_8bb401745ba4fa88b4e03ece782150ace1f628992faedbbd233c6cd0a58c203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_8bb401745ba4fa88b4e03ece782150ace1f628992faedbbd233c6cd0a58c203a->leave($__internal_8bb401745ba4fa88b4e03ece782150ace1f628992faedbbd233c6cd0a58c203a_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Dishes/new.html.twig";
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
", "@DelivermeMenu/Dishes/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Dishes\\new.html.twig");
    }
}
