<?php

/* @DelivermeMenu/Packet/new.html.twig */
class __TwigTemplate_30f67e7b3f3d181a758d865952c0282e87973bc3875986142d260b60c25bfa0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Packet/new.html.twig", 1);
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
        $__internal_bea724b55fcff0119d53ac8600135b5bfcf9ba36e5da40bee191397f8ff6e541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea724b55fcff0119d53ac8600135b5bfcf9ba36e5da40bee191397f8ff6e541->enter($__internal_bea724b55fcff0119d53ac8600135b5bfcf9ba36e5da40bee191397f8ff6e541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Packet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea724b55fcff0119d53ac8600135b5bfcf9ba36e5da40bee191397f8ff6e541->leave($__internal_bea724b55fcff0119d53ac8600135b5bfcf9ba36e5da40bee191397f8ff6e541_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b94a349354c0b520b9002dc955e1f6a35ae0768d4534fdd19f4576c35d7d9071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94a349354c0b520b9002dc955e1f6a35ae0768d4534fdd19f4576c35d7d9071->enter($__internal_b94a349354c0b520b9002dc955e1f6a35ae0768d4534fdd19f4576c35d7d9071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet");
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
        
        $__internal_b94a349354c0b520b9002dc955e1f6a35ae0768d4534fdd19f4576c35d7d9071->leave($__internal_b94a349354c0b520b9002dc955e1f6a35ae0768d4534fdd19f4576c35d7d9071_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Packet/new.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('packet') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "@DelivermeMenu/Packet/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Packet\\new.html.twig");
    }
}
