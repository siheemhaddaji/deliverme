<?php

/* FrontendBundle::menue.html.twig */
class __TwigTemplate_dcc3a7031807ee20788f1fe89092b5f5cc38358516bad29c707739ee1a2f2731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrontendBundle::menue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ac4077d2c4ad562ab921f314d4c1b169888155f532f29d88e5e9240a0ee16b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac4077d2c4ad562ab921f314d4c1b169888155f532f29d88e5e9240a0ee16b4->enter($__internal_5ac4077d2c4ad562ab921f314d4c1b169888155f532f29d88e5e9240a0ee16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::menue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac4077d2c4ad562ab921f314d4c1b169888155f532f29d88e5e9240a0ee16b4->leave($__internal_5ac4077d2c4ad562ab921f314d4c1b169888155f532f29d88e5e9240a0ee16b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2b924c4c1731aa6f9694a20def760d13f9e9f8f0d4d5cbbb0dde0a23454fdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b924c4c1731aa6f9694a20def760d13f9e9f8f0d4d5cbbb0dde0a23454fdec->enter($__internal_e2b924c4c1731aa6f9694a20def760d13f9e9f8f0d4d5cbbb0dde0a23454fdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menue";
        
        $__internal_e2b924c4c1731aa6f9694a20def760d13f9e9f8f0d4d5cbbb0dde0a23454fdec->leave($__internal_e2b924c4c1731aa6f9694a20def760d13f9e9f8f0d4d5cbbb0dde0a23454fdec_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_08ac551fd8f01589f373f497f6fac091066180ff9a7e0f4d1e74ebafa393be56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ac551fd8f01589f373f497f6fac091066180ff9a7e0f4d1e74ebafa393be56->enter($__internal_08ac551fd8f01589f373f497f6fac091066180ff9a7e0f4d1e74ebafa393be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "\t\t\t\t<div class=\"content_overlay\"></div>
\t\t\t\t<div class=\"content_inner\">
\t\t\t\t\t<div class=\"row contentscroll\">
\t<div class=\"container col-md-12\">
         <!-- <div class=\"col-md-6 empty\">&nbsp;</div>-->
                          <div class=\"col-md-12 content_text\">
                          <h1>Menu with images (Small) <a href=\"sample.pdf\" class=\"link\"> <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/front/assets/img/pdf-icon.png"), "html", null, true);
        echo "\" title=\"PDF Menu to Print\" alt=\"PDF Menu to Print\"></a></h1><p class=\"pad_top13\">Menu's and few food photos can be added on the left column, offering American cuisine and warm hospitality in a rustic historically preserved building.</p> <br />
                          <div class=\"pad_top30 home3\">
           <div class=\"col-md-12\">
               ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) ? $context["dishes"] : $this->getContext($context, "dishes")));
        foreach ($context['_seq'] as $context["_key"] => $context["dishe"]) {
            // line 15
            echo "            <div class=\"row\">
            <div class=\"menu_content clearfix\">
\t\t\t\t<div class=\"col-md-2   col-xs-2 menu_small\">
                                    <div class=\"row\">
                                        <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["dishe"], "WebPath", array())), "html", null, true);
            echo "\"  class=\"img-responsive img_border\" alt=\"\" />
                                    </div>
                                </div>
\t\t\t\t<div class=\"col-md-10  col-xs-10  text-left\">
\t\t\t\t<div class=\"title-splider\">
\t\t\t\t\t<h4 class=\"clearfix\"><span class=\"left border_bottom\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["dishe"], "name", array()), "html", null, true);
            echo "</span><span class=\"right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dishe"], "price", array()), "html", null, true);
            echo " CHF</span></h4>
\t\t\t\t</div>
                \t<p>";
            // line 26
            echo $this->getAttribute($context["dishe"], "ingredients", array());
            echo " </p>
\t\t\t\t</div>
            </div>
\t\t\t</div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dishe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
            </div>
            </div>
           </div>
    </div>
                </div>
                                ";
        
        $__internal_08ac551fd8f01589f373f497f6fac091066180ff9a7e0f4d1e74ebafa393be56->leave($__internal_08ac551fd8f01589f373f497f6fac091066180ff9a7e0f4d1e74ebafa393be56_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::menue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  92 => 26,  85 => 24,  77 => 19,  71 => 15,  67 => 14,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %} 

{% block title %}Menue{% endblock %}
                            {% block contenu %}
\t\t\t\t<div class=\"content_overlay\"></div>
\t\t\t\t<div class=\"content_inner\">
\t\t\t\t\t<div class=\"row contentscroll\">
\t<div class=\"container col-md-12\">
         <!-- <div class=\"col-md-6 empty\">&nbsp;</div>-->
                          <div class=\"col-md-12 content_text\">
                          <h1>Menu with images (Small) <a href=\"sample.pdf\" class=\"link\"> <img src=\"{{ asset('bundles/delivermemenu/front/assets/img/pdf-icon.png')}}\" title=\"PDF Menu to Print\" alt=\"PDF Menu to Print\"></a></h1><p class=\"pad_top13\">Menu's and few food photos can be added on the left column, offering American cuisine and warm hospitality in a rustic historically preserved building.</p> <br />
                          <div class=\"pad_top30 home3\">
           <div class=\"col-md-12\">
               {% for dishe in dishes%}
            <div class=\"row\">
            <div class=\"menu_content clearfix\">
\t\t\t\t<div class=\"col-md-2   col-xs-2 menu_small\">
                                    <div class=\"row\">
                                        <img src=\"{{asset(dishe.WebPath)}}\"  class=\"img-responsive img_border\" alt=\"\" />
                                    </div>
                                </div>
\t\t\t\t<div class=\"col-md-10  col-xs-10  text-left\">
\t\t\t\t<div class=\"title-splider\">
\t\t\t\t\t<h4 class=\"clearfix\"><span class=\"left border_bottom\">{{dishe.name}}</span><span class=\"right\">{{dishe.price}} CHF</span></h4>
\t\t\t\t</div>
                \t<p>{{dishe.ingredients|raw}} </p>
\t\t\t\t</div>
            </div>
\t\t\t</div>
               {% endfor %}
            </div>
            </div>
            </div>
           </div>
    </div>
                </div>
                                {% endblock %}", "FrontendBundle::menue.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\menue.html.twig");
    }
}
