<?php

/* @Frontend/about.html.twig */
class __TwigTemplate_86ad63ca8680bbb7612c539897c9962e017586c343cdc7bc7b46aaead1fe491b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Frontend/about.html.twig", 1);
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
        $__internal_f323d0d7c5fbb258209b3ae82b95f153b2aade93259bafe57c147f4135528b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f323d0d7c5fbb258209b3ae82b95f153b2aade93259bafe57c147f4135528b92->enter($__internal_f323d0d7c5fbb258209b3ae82b95f153b2aade93259bafe57c147f4135528b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f323d0d7c5fbb258209b3ae82b95f153b2aade93259bafe57c147f4135528b92->leave($__internal_f323d0d7c5fbb258209b3ae82b95f153b2aade93259bafe57c147f4135528b92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94776b15cabf690fd254432d3183202ddc9aa400a29fabf0f253f7c9e9df2d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94776b15cabf690fd254432d3183202ddc9aa400a29fabf0f253f7c9e9df2d0a->enter($__internal_94776b15cabf690fd254432d3183202ddc9aa400a29fabf0f253f7c9e9df2d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "about";
        
        $__internal_94776b15cabf690fd254432d3183202ddc9aa400a29fabf0f253f7c9e9df2d0a->leave($__internal_94776b15cabf690fd254432d3183202ddc9aa400a29fabf0f253f7c9e9df2d0a_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7269847c40cb3fa5d9e83f7e6dba0d145dcf94763d15f72e3ec201ab15c555eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7269847c40cb3fa5d9e83f7e6dba0d145dcf94763d15f72e3ec201ab15c555eb->enter($__internal_7269847c40cb3fa5d9e83f7e6dba0d145dcf94763d15f72e3ec201ab15c555eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "  
   <div class=\"aboutbg img-overlay\"></div>
    <div class=\"content\">                         
     <div class=\"content_overlay\"></div>
        <div class=\"content_inner\">
            <div class=\"row contentscroll\">
                <div class=\"container col-md-30\">
                  <div class=\"col-md-6 empty\">&nbsp;</div>
                          <div class=\"col-md-6 content_text\">
                          <h1>About Us</h1>
                          <div class=\"clearfix pad_top13\">
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t    <p class=\"row\">
\t\t\t\t\t<span class=\"bold\">Specializes in Non-veg , 65, Thanthuri, Sandwich, 65 smoked sandwich.</span><br/><br/> Our team of highly qualified professionals headed by an experienced Chef. Lnim ad minim veniam, quis nostrud.<br /><br />

Exercitation ullamco laboris nisi ut aliquip ex ea commodo. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla  do tempore ercitationem ut labore. et dolore magna aliqua.\t\t\t\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t    <div class=\"right_content \">
\t\t\t\t\t<div class=\"sub_title\">
\t\t\t\t\t    <h4>Opening hours:</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t        <div class=\"hour_table\">
\t\t\t\t\t     <table>
\t\t\t\t\t\t<tr>
                                                    <td class=\"days\">mon - Fri</td>
                                                    <td>9:00am - 4:00pm</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t                    <td class=\"days\">Sat</td>\t
\t\t\t\t\t            <td>9:00am - 2:00pm</td>\t\t
\t\t\t\t\t\t</tr>
                                                <tr>
\t\t                                    <td class=\"days\">Sun</td>\t
\t\t\t\t\t\t    <td>8:30am - 1:00pm</td>\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t     </table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sub_title\">
\t\t\t\t\t    <h4>book your table:</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tWe welcome walk-in guests,online at<br/><br><a class=\"button nav-link\" href=\"contactform.htm\">Book table</a>\t\t\t\t\t\t\t</p>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t    </div>
                            </div>
                </div>
            </div>
\t</div>
    </div>
    </div>
        
\t 
      
    ";
        
        $__internal_7269847c40cb3fa5d9e83f7e6dba0d145dcf94763d15f72e3ec201ab15c555eb->leave($__internal_7269847c40cb3fa5d9e83f7e6dba0d145dcf94763d15f72e3ec201ab15c555eb_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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

{% block title %}about{% endblock %}
    {% block contenu%}
  
   <div class=\"aboutbg img-overlay\"></div>
    <div class=\"content\">                         
     <div class=\"content_overlay\"></div>
        <div class=\"content_inner\">
            <div class=\"row contentscroll\">
                <div class=\"container col-md-30\">
                  <div class=\"col-md-6 empty\">&nbsp;</div>
                          <div class=\"col-md-6 content_text\">
                          <h1>About Us</h1>
                          <div class=\"clearfix pad_top13\">
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t    <p class=\"row\">
\t\t\t\t\t<span class=\"bold\">Specializes in Non-veg , 65, Thanthuri, Sandwich, 65 smoked sandwich.</span><br/><br/> Our team of highly qualified professionals headed by an experienced Chef. Lnim ad minim veniam, quis nostrud.<br /><br />

Exercitation ullamco laboris nisi ut aliquip ex ea commodo. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla  do tempore ercitationem ut labore. et dolore magna aliqua.\t\t\t\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t    <div class=\"right_content \">
\t\t\t\t\t<div class=\"sub_title\">
\t\t\t\t\t    <h4>Opening hours:</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t        <div class=\"hour_table\">
\t\t\t\t\t     <table>
\t\t\t\t\t\t<tr>
                                                    <td class=\"days\">mon - Fri</td>
                                                    <td>9:00am - 4:00pm</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t                    <td class=\"days\">Sat</td>\t
\t\t\t\t\t            <td>9:00am - 2:00pm</td>\t\t
\t\t\t\t\t\t</tr>
                                                <tr>
\t\t                                    <td class=\"days\">Sun</td>\t
\t\t\t\t\t\t    <td>8:30am - 1:00pm</td>\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t     </table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sub_title\">
\t\t\t\t\t    <h4>book your table:</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tWe welcome walk-in guests,online at<br/><br><a class=\"button nav-link\" href=\"contactform.htm\">Book table</a>\t\t\t\t\t\t\t</p>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t    </div>
                            </div>
                </div>
            </div>
\t</div>
    </div>
    </div>
        
\t 
      
    {%endblock%}", "@Frontend/about.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\about.html.twig");
    }
}
