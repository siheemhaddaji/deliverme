<?php

/* @DelivermeMenu/Dishes/edit.html.twig */
class __TwigTemplate_4482433f11a987597dc412d753a4294cd0ed4d8121d9e075426b86ee527aaee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Dishes/edit.html.twig", 1);
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
        $__internal_773de0c5a045a7fd32c8c8f531978fad8bedfff86cebcd5577ccf3e83fd07e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773de0c5a045a7fd32c8c8f531978fad8bedfff86cebcd5577ccf3e83fd07e58->enter($__internal_773de0c5a045a7fd32c8c8f531978fad8bedfff86cebcd5577ccf3e83fd07e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Dishes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773de0c5a045a7fd32c8c8f531978fad8bedfff86cebcd5577ccf3e83fd07e58->leave($__internal_773de0c5a045a7fd32c8c8f531978fad8bedfff86cebcd5577ccf3e83fd07e58_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6b4629bebef258aba06fcdcd3aba2a91d324ca664f26d9ce3e202ae249db2516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4629bebef258aba06fcdcd3aba2a91d324ca664f26d9ce3e202ae249db2516->enter($__internal_6b4629bebef258aba06fcdcd3aba2a91d324ca664f26d9ce3e202ae249db2516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

           </div>
                            </div>
                          </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
";
        
        $__internal_6b4629bebef258aba06fcdcd3aba2a91d324ca664f26d9ce3e202ae249db2516->leave($__internal_6b4629bebef258aba06fcdcd3aba2a91d324ca664f26d9ce3e202ae249db2516_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Dishes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                            </div>
                          </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
{% endblock %}
", "@DelivermeMenu/Dishes/edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Dishes\\edit.html.twig");
    }
}
