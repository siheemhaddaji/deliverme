<?php

/* DelivermeMenuBundle:PacketDetails:new.html.twig */
class __TwigTemplate_14963b4e98d94eb43688756d3bf8421013a51d9e744aff74c4680fbf66df01c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:PacketDetails:new.html.twig", 1);
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
        $__internal_8d157b15713de7964b1da093d10ce71e7f653a8bab1299d0620ba80b291e8afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d157b15713de7964b1da093d10ce71e7f653a8bab1299d0620ba80b291e8afe->enter($__internal_8d157b15713de7964b1da093d10ce71e7f653a8bab1299d0620ba80b291e8afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:PacketDetails:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d157b15713de7964b1da093d10ce71e7f653a8bab1299d0620ba80b291e8afe->leave($__internal_8d157b15713de7964b1da093d10ce71e7f653a8bab1299d0620ba80b291e8afe_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_627489ec148fa52618d001495169f201ab1a73918e5e265b5321372df5bffc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627489ec148fa52618d001495169f201ab1a73918e5e265b5321372df5bffc57->enter($__internal_627489ec148fa52618d001495169f201ab1a73918e5e265b5321372df5bffc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_627489ec148fa52618d001495169f201ab1a73918e5e265b5321372df5bffc57->leave($__internal_627489ec148fa52618d001495169f201ab1a73918e5e265b5321372df5bffc57_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:PacketDetails:new.html.twig";
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
", "DelivermeMenuBundle:PacketDetails:new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/PacketDetails/new.html.twig");
    }
}
