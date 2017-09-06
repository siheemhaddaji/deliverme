<?php

/* @DelivermeMenu/ClientAdress/new.html.twig */
class __TwigTemplate_bf02a128745aedee88d4ce011a6cd289746b41f413d1951b89c964366acc7b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/ClientAdress/new.html.twig", 1);
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
        $__internal_f1a99bdd250b83dab113912bd5e95f11c85f98e2eb84c4fc6182e28a55c6a72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a99bdd250b83dab113912bd5e95f11c85f98e2eb84c4fc6182e28a55c6a72d->enter($__internal_f1a99bdd250b83dab113912bd5e95f11c85f98e2eb84c4fc6182e28a55c6a72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/ClientAdress/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a99bdd250b83dab113912bd5e95f11c85f98e2eb84c4fc6182e28a55c6a72d->leave($__internal_f1a99bdd250b83dab113912bd5e95f11c85f98e2eb84c4fc6182e28a55c6a72d_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_22532c35f3a737fb2c4ef558371474abf99f4fa7a9207aa14862cbe910538885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22532c35f3a737fb2c4ef558371474abf99f4fa7a9207aa14862cbe910538885->enter($__internal_22532c35f3a737fb2c4ef558371474abf99f4fa7a9207aa14862cbe910538885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_22532c35f3a737fb2c4ef558371474abf99f4fa7a9207aa14862cbe910538885->leave($__internal_22532c35f3a737fb2c4ef558371474abf99f4fa7a9207aa14862cbe910538885_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/ClientAdress/new.html.twig";
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
", "@DelivermeMenu/ClientAdress/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\ClientAdress\\new.html.twig");
    }
}
