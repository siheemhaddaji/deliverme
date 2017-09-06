<?php

/* ::layout.html.twig */
class __TwigTemplate_ce0aba0bfcff3b12b6df636743d0e13e574d769a15467d490e1fa60119ccd2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9f9e408ad8575fa3b0d951079b8734a1c42b7cd944cc210c111d3fba757af82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f9e408ad8575fa3b0d951079b8734a1c42b7cd944cc210c111d3fba757af82->enter($__internal_d9f9e408ad8575fa3b0d951079b8734a1c42b7cd944cc210c111d3fba757af82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"description\" content=\"The Spice Lounge\" />
<meta name=\"keywords\" content=\"The Spice Lounge\" />
<meta name=\"author\" content=\"The Spice Lounge\" />

<!-- Loading Google Web fonts-->


";
        // line 17
        $this->loadTemplate(":include:css.html.twig", "::layout.html.twig", 17)->display($context);
        echo " 
";
        // line 18
        $this->loadTemplate(":include:js.html.twig", "::layout.html.twig", 18)->display($context);
        echo " 


\t
</head>
<body>
<!--PRELOADER-->
\t<section id=\"jSplash\">
\t\t<div id=\"circle\"></div>
\t</section>

<!--Nice Scroll-->           <!--Used For Mobile Resolution-->
<div id=\"menutop\"></div>
<!--Nice Scroll--> 


<!--Wrapper 
=============================-->
<div id=\"wrapper\">
<div id=\"mask\">

<!--Header 
=============================-->

<div id=\"header\" class=\"header\">
<div class=\"menu-inner\">
<div class=\"container\">
 
   <div class=\"row\">
\t\t\t\t<div class=\"header-table col-md-12 header-menu\">
        \t\t\t<!--  Logo section -->
                \t<div class=\"brand\"><a href=\"winery.htm\"  class=\"nav-link\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/front/assets/img/winery-logo.png"), "html", null, true);
        echo "\"></a></div>
                    <!--  // Logo section -->

\t\t<!-- Sub Page Menu section -->
                                <nav class=\"main-nav\">
                                    <a href=\"#\" class=\"nav-toggle\"></a>
                                        <ul id=\"sub-nav\" class=\"nav\">
";
        // line 56
        $this->loadTemplate(":include:menu.html.twig", "::layout.html.twig", 56)->display($context);
        echo " 
</ul>\t
\t\t\t\t  </nav>
                  <!--  // Sub Page Menu section -->
\t\t\t\t</div>
</div>

</div>   
</div>
</div>

<!-- // Header 
=============================-->



<!--Menu with image small 
=============================--> 
\t\t     
<div id=\"menu3\" class=\"item\">
\t\t\t<!--<div class=\"menu-img-small img-overlay\"></div>-->
\t\t\t<div class=\"content\">
                            ";
        // line 78
        $this->displayBlock('contenu', $context, $blocks);
        // line 81
        echo "\t  </div>
    </div>
\t
<!-- // Menu with image small 
=============================--> 
<!--About us
=============================-->    
   

<!-- Footer
=============================-->
<div id=\"footer\" class=\"footer\">
\t<div class=\"copyright\">Copyrights &copy; The Spice Lounge 2015.</div>
</div>
<!-- // Footer Ends
=============================-->



</div>
</div>
<!-- // Wrapper =============================-->


";
        // line 105
        $this->loadTemplate(":include:jsFooter.html.twig", "::layout.html.twig", 105)->display($context);
        echo " 






</body>

</html>
";
        
        $__internal_d9f9e408ad8575fa3b0d951079b8734a1c42b7cd944cc210c111d3fba757af82->leave($__internal_d9f9e408ad8575fa3b0d951079b8734a1c42b7cd944cc210c111d3fba757af82_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4035e0bb3244527d170b9cc2d5131a422cee1003f79acc738cef48ea909da568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4035e0bb3244527d170b9cc2d5131a422cee1003f79acc738cef48ea909da568->enter($__internal_4035e0bb3244527d170b9cc2d5131a422cee1003f79acc738cef48ea909da568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4035e0bb3244527d170b9cc2d5131a422cee1003f79acc738cef48ea909da568->leave($__internal_4035e0bb3244527d170b9cc2d5131a422cee1003f79acc738cef48ea909da568_prof);

    }

    // line 78
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_be4e9842dd63143098b7b2837621b7b15b559fcf3f9f2adf029d7fbaa968918e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4e9842dd63143098b7b2837621b7b15b559fcf3f9f2adf029d7fbaa968918e->enter($__internal_be4e9842dd63143098b7b2837621b7b15b559fcf3f9f2adf029d7fbaa968918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 79
        echo "            
                                ";
        
        $__internal_be4e9842dd63143098b7b2837621b7b15b559fcf3f9f2adf029d7fbaa968918e->leave($__internal_be4e9842dd63143098b7b2837621b7b15b559fcf3f9f2adf029d7fbaa968918e_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 79,  175 => 78,  164 => 9,  146 => 105,  120 => 81,  118 => 78,  93 => 56,  83 => 49,  49 => 18,  45 => 17,  34 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

<title>{% block title %}{% endblock %}</title>
<meta name=\"description\" content=\"The Spice Lounge\" />
<meta name=\"keywords\" content=\"The Spice Lounge\" />
<meta name=\"author\" content=\"The Spice Lounge\" />

<!-- Loading Google Web fonts-->


{% include ':include:css.html.twig' %} 
{% include ':include:js.html.twig' %} 


\t
</head>
<body>
<!--PRELOADER-->
\t<section id=\"jSplash\">
\t\t<div id=\"circle\"></div>
\t</section>

<!--Nice Scroll-->           <!--Used For Mobile Resolution-->
<div id=\"menutop\"></div>
<!--Nice Scroll--> 


<!--Wrapper 
=============================-->
<div id=\"wrapper\">
<div id=\"mask\">

<!--Header 
=============================-->

<div id=\"header\" class=\"header\">
<div class=\"menu-inner\">
<div class=\"container\">
 
   <div class=\"row\">
\t\t\t\t<div class=\"header-table col-md-12 header-menu\">
        \t\t\t<!--  Logo section -->
                \t<div class=\"brand\"><a href=\"winery.htm\"  class=\"nav-link\"><img src=\"{{ asset('bundles/delivermemenu/front/assets/img/winery-logo.png')}}\"></a></div>
                    <!--  // Logo section -->

\t\t<!-- Sub Page Menu section -->
                                <nav class=\"main-nav\">
                                    <a href=\"#\" class=\"nav-toggle\"></a>
                                        <ul id=\"sub-nav\" class=\"nav\">
{% include ':include:menu.html.twig' %} 
</ul>\t
\t\t\t\t  </nav>
                  <!--  // Sub Page Menu section -->
\t\t\t\t</div>
</div>

</div>   
</div>
</div>

<!-- // Header 
=============================-->



<!--Menu with image small 
=============================--> 
\t\t     
<div id=\"menu3\" class=\"item\">
\t\t\t<!--<div class=\"menu-img-small img-overlay\"></div>-->
\t\t\t<div class=\"content\">
                            {% block contenu %}
            
                                {% endblock %}
\t  </div>
    </div>
\t
<!-- // Menu with image small 
=============================--> 
<!--About us
=============================-->    
   

<!-- Footer
=============================-->
<div id=\"footer\" class=\"footer\">
\t<div class=\"copyright\">Copyrights &copy; The Spice Lounge 2015.</div>
</div>
<!-- // Footer Ends
=============================-->



</div>
</div>
<!-- // Wrapper =============================-->


{% include ':include:jsFooter.html.twig' %} 






</body>

</html>
", "::layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\app\\Resources\\views\\layout.html.twig");
    }
}
