<?php

/* @DelivermeMenu/PacketDetails/new.html.twig */
class __TwigTemplate_ff6ad65d212db399d74e5a51081141e838d178e46e5f22b87c5388774117b4ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/PacketDetails/new.html.twig", 1);
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
        $__internal_01c7df566bc4e2cd8c4fc279339f8a3e15d4e7e2954559bd67e9ddb7b5567af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c7df566bc4e2cd8c4fc279339f8a3e15d4e7e2954559bd67e9ddb7b5567af9->enter($__internal_01c7df566bc4e2cd8c4fc279339f8a3e15d4e7e2954559bd67e9ddb7b5567af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/PacketDetails/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c7df566bc4e2cd8c4fc279339f8a3e15d4e7e2954559bd67e9ddb7b5567af9->leave($__internal_01c7df566bc4e2cd8c4fc279339f8a3e15d4e7e2954559bd67e9ddb7b5567af9_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a4af00685efd1266d797d725d1426733983ace0f83c4323ceb2ce3bace561198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4af00685efd1266d797d725d1426733983ace0f83c4323ceb2ce3bace561198->enter($__internal_a4af00685efd1266d797d725d1426733983ace0f83c4323ceb2ce3bace561198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packetdetails");
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
        
        $__internal_a4af00685efd1266d797d725d1426733983ace0f83c4323ceb2ce3bace561198->leave($__internal_a4af00685efd1266d797d725d1426733983ace0f83c4323ceb2ce3bace561198_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/PacketDetails/new.html.twig";
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
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('packetdetails') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "@DelivermeMenu/PacketDetails/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\PacketDetails\\new.html.twig");
    }
}
