<?php

/* @Frontend/menue.html.twig */
class __TwigTemplate_95c09dfe47c5f97f2284afc48da1c1ab23839fa467806a7d651d547272a80cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Frontend/menue.html.twig", 1);
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
        $__internal_355cd30f79ceee2a3600583df04792e8e75c810aad2b49fa360307313f6071fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355cd30f79ceee2a3600583df04792e8e75c810aad2b49fa360307313f6071fc->enter($__internal_355cd30f79ceee2a3600583df04792e8e75c810aad2b49fa360307313f6071fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/menue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355cd30f79ceee2a3600583df04792e8e75c810aad2b49fa360307313f6071fc->leave($__internal_355cd30f79ceee2a3600583df04792e8e75c810aad2b49fa360307313f6071fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_525dc33e877dac14bc88b6e118180671c008fb896b2765ce67baad812c59c56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525dc33e877dac14bc88b6e118180671c008fb896b2765ce67baad812c59c56d->enter($__internal_525dc33e877dac14bc88b6e118180671c008fb896b2765ce67baad812c59c56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menue";
        
        $__internal_525dc33e877dac14bc88b6e118180671c008fb896b2765ce67baad812c59c56d->leave($__internal_525dc33e877dac14bc88b6e118180671c008fb896b2765ce67baad812c59c56d_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a3c8c7ec69ced6f78aa5ad9da32e67a13144da7a92bd4fa15a5a2fa8138453c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c8c7ec69ced6f78aa5ad9da32e67a13144da7a92bd4fa15a5a2fa8138453c5->enter($__internal_a3c8c7ec69ced6f78aa5ad9da32e67a13144da7a92bd4fa15a5a2fa8138453c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_a3c8c7ec69ced6f78aa5ad9da32e67a13144da7a92bd4fa15a5a2fa8138453c5->leave($__internal_a3c8c7ec69ced6f78aa5ad9da32e67a13144da7a92bd4fa15a5a2fa8138453c5_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/menue.html.twig";
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
                                {% endblock %}", "@Frontend/menue.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\menue.html.twig");
    }
}
