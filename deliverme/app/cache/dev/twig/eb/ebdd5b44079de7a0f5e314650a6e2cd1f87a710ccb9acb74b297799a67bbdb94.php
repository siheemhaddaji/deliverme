<?php

/* @DelivermeMenu/Areas/new.html.twig */
class __TwigTemplate_c55099ddecc3d74f72883edb92f36c4af7a25e134b3e5b6257f0e5c87024ef2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Areas/new.html.twig", 1);
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
        $__internal_4d32e41eebb27ddd3e69754a2fd7c5c4d08035fab647a135b5260765cf54e6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d32e41eebb27ddd3e69754a2fd7c5c4d08035fab647a135b5260765cf54e6ba->enter($__internal_4d32e41eebb27ddd3e69754a2fd7c5c4d08035fab647a135b5260765cf54e6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Areas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d32e41eebb27ddd3e69754a2fd7c5c4d08035fab647a135b5260765cf54e6ba->leave($__internal_4d32e41eebb27ddd3e69754a2fd7c5c4d08035fab647a135b5260765cf54e6ba_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e4c56e980f1debd4b1740ed3107a6d74ac1cf90e204bf505902bed33931e3722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c56e980f1debd4b1740ed3107a6d74ac1cf90e204bf505902bed33931e3722->enter($__internal_e4c56e980f1debd4b1740ed3107a6d74ac1cf90e204bf505902bed33931e3722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_e4c56e980f1debd4b1740ed3107a6d74ac1cf90e204bf505902bed33931e3722->leave($__internal_e4c56e980f1debd4b1740ed3107a6d74ac1cf90e204bf505902bed33931e3722_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Areas/new.html.twig";
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
", "@DelivermeMenu/Areas/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Areas\\new.html.twig");
    }
}
