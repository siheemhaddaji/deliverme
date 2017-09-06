<?php

/* @DelivermeMenu/Client/new.html.twig */
class __TwigTemplate_2d4dc6a2390906f8813e7d01cb8be059f24a59469bf940eebe66bb4c0fcdc904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "@DelivermeMenu/Client/new.html.twig", 1);
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
        $__internal_4b8733ca3c2a8c07dcc7e9a285b708def8e0a9f861c008d99385b05d955bd228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8733ca3c2a8c07dcc7e9a285b708def8e0a9f861c008d99385b05d955bd228->enter($__internal_4b8733ca3c2a8c07dcc7e9a285b708def8e0a9f861c008d99385b05d955bd228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8733ca3c2a8c07dcc7e9a285b708def8e0a9f861c008d99385b05d955bd228->leave($__internal_4b8733ca3c2a8c07dcc7e9a285b708def8e0a9f861c008d99385b05d955bd228_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d08c076e8f1eced45b4766a5f84060caa83ab4b90c3bc1757c7460f95ffa94e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08c076e8f1eced45b4766a5f84060caa83ab4b90c3bc1757c7460f95ffa94e3->enter($__internal_d08c076e8f1eced45b4766a5f84060caa83ab4b90c3bc1757c7460f95ffa94e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client");
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
        
        $__internal_d08c076e8f1eced45b4766a5f84060caa83ab4b90c3bc1757c7460f95ffa94e3->leave($__internal_d08c076e8f1eced45b4766a5f84060caa83ab4b90c3bc1757c7460f95ffa94e3_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Client/new.html.twig";
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
                             
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('client') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

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
", "@DelivermeMenu/Client/new.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Client\\new.html.twig");
    }
}
