<?php

/* FrontendBundle::contactus.html.twig */
class __TwigTemplate_1078d757a7d09fe0a55fa833ae601aa84a831c26c04a0c4951e9cf2995610ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrontendBundle::contactus.html.twig", 3);
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
        $__internal_331beee168df7e3aee13f0794578e37ae3417058ccd577fcadad9a694d6d8f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331beee168df7e3aee13f0794578e37ae3417058ccd577fcadad9a694d6d8f11->enter($__internal_331beee168df7e3aee13f0794578e37ae3417058ccd577fcadad9a694d6d8f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::contactus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331beee168df7e3aee13f0794578e37ae3417058ccd577fcadad9a694d6d8f11->leave($__internal_331beee168df7e3aee13f0794578e37ae3417058ccd577fcadad9a694d6d8f11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f00ad41ffa76d15cb6b3e99fa1eb07ae9d7c0d559bbb8781106a2470e29a8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f00ad41ffa76d15cb6b3e99fa1eb07ae9d7c0d559bbb8781106a2470e29a8af->enter($__internal_0f00ad41ffa76d15cb6b3e99fa1eb07ae9d7c0d559bbb8781106a2470e29a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "contact";
        
        $__internal_0f00ad41ffa76d15cb6b3e99fa1eb07ae9d7c0d559bbb8781106a2470e29a8af->leave($__internal_0f00ad41ffa76d15cb6b3e99fa1eb07ae9d7c0d559bbb8781106a2470e29a8af_prof);

    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_dfb8f63937a6d347d03084d4635ebcee08d18e0afa525bbe5afa2f4802da1608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb8f63937a6d347d03084d4635ebcee08d18e0afa525bbe5afa2f4802da1608->enter($__internal_dfb8f63937a6d347d03084d4635ebcee08d18e0afa525bbe5afa2f4802da1608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 7
        echo "

<div >
\t\t\t<div class=\"contactform img-overlay\"></div>
\t\t\t<div class=\"content\">
            
\t\t\t\t<div class=\"content_overlay\"></div>
\t\t\t\t<div class=\"content_inner\" >
                <div class=\"row contentscroll\">
\t<div class=\"container col-md-12\">
          <div class=\"col-md-6 empty\">&nbsp;</div>
\t\t  \t\t\t
                          <div class=\"col-md-6 content_text\">
                          <div id=\"contactforms\">
                           <h1>Contact Form</h1>
                           <form id=\"contact_form\" class=\"cont_form pad_top13\" action=\"#\" method=\"post\">
\t\t\t<p>You can make a reservation by filling out the form below, Please note that reservations are only confirmed once we check availability.</p>
\t\t\t    \t
\t\t\t                                

\t\t\t<div class=\"clearfix cont_form pad_top20\"> 
                                                                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "textbox1", "placeholder" => "* subject : ", "onfocus" => "this.placeholder = ''", "onBlur" => "this.placeholder = '* Subject :'")));
        // line 33
        echo "
                            
                                                                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullName", array()), 'widget', array("attr" => array("class" => "textbox1", "placeholder" => "* Name : ", "onfocus" => "this.placeholder = ''", "onBlur" => "this.placeholder = '* Name :'")));
        // line 40
        echo "
                                                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "PhoneNumber", array()), 'widget', array("attr" => array("class" => "textbox1", "placeholder" => "* Phone Number : ", "onfocus" => "this.placeholder = ''", "onBlur" => "this.placeholder = '* Phone Number :'")));
        // line 46
        echo "

                                                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mail", array()), 'widget', array("attr" => array("class" => "textbox1", "placeholder" => "* Mail : ", "onfocus" => "this.placeholder = ''", "onBlur" => "this.placeholder = '* Mail :'")));
        // line 53
        echo "

                                                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Message", array()), 'widget', array("attr" => array("class" => "textbox1", "placeholder" => "* Message : ", "onfocus" => "this.placeholder = ''", "onBlur" => "this.placeholder = '* Message :'")));
        // line 60
        echo "

                                                                
                                                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t\t
                </div>
\t\t\t\t</form>
\t</div>
                          </div>
    </div>
                </div>
\t\t\t\t</div>
\t\t  </div>
\t</div>
        
                ";
        
        $__internal_dfb8f63937a6d347d03084d4635ebcee08d18e0afa525bbe5afa2f4802da1608->leave($__internal_dfb8f63937a6d347d03084d4635ebcee08d18e0afa525bbe5afa2f4802da1608_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 63,  101 => 60,  99 => 55,  95 => 53,  93 => 48,  89 => 46,  87 => 41,  84 => 40,  82 => 35,  78 => 33,  76 => 28,  53 => 7,  47 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}

{% extends '::layout.html.twig' %} 

{% block title %}contact{% endblock %}
    {% block contenu%}


<div >
\t\t\t<div class=\"contactform img-overlay\"></div>
\t\t\t<div class=\"content\">
            
\t\t\t\t<div class=\"content_overlay\"></div>
\t\t\t\t<div class=\"content_inner\" >
                <div class=\"row contentscroll\">
\t<div class=\"container col-md-12\">
          <div class=\"col-md-6 empty\">&nbsp;</div>
\t\t  \t\t\t
                          <div class=\"col-md-6 content_text\">
                          <div id=\"contactforms\">
                           <h1>Contact Form</h1>
                           <form id=\"contact_form\" class=\"cont_form pad_top13\" action=\"#\" method=\"post\">
\t\t\t<p>You can make a reservation by filling out the form below, Please note that reservations are only confirmed once we check availability.</p>
\t\t\t    \t
\t\t\t                                

\t\t\t<div class=\"clearfix cont_form pad_top20\"> 
                                                                {{ form_widget(form.subject, {'attr': {
                                                                    'class': \"textbox1\" ,
                                                                     'placeholder' : \"* subject : \" , 
                                                                        'onfocus' : \"this.placeholder = ''\" ,                          
                                                                          'onBlur' : \"this.placeholder = '* Subject :'\" ,                          
                                                                 }}) }}
                            
                                                                {{ form_widget(form.fullName, {'attr': {
                                                                    'class': \"textbox1\" ,
                                                                     'placeholder' : \"* Name : \" , 
                                                                        'onfocus' : \"this.placeholder = ''\" ,                          
                                                                          'onBlur' : \"this.placeholder = '* Name :'\" ,                          
                                                                 }}) }}
                                                                {{ form_widget(form.PhoneNumber, {'attr': {
                                                                    'class': \"textbox1\" ,
                                                                     'placeholder' : \"* Phone Number : \" , 
                                                                        'onfocus' : \"this.placeholder = ''\" ,                          
                                                                          'onBlur' : \"this.placeholder = '* Phone Number :'\" ,                          
                                                                }}) }}

                                                                {{ form_widget(form.Mail, {'attr': {
                                                                    'class': \"textbox1\" ,
                                                                     'placeholder' : \"* Mail : \" , 
                                                                        'onfocus' : \"this.placeholder = ''\" ,                          
                                                                          'onBlur' : \"this.placeholder = '* Mail :'\" ,                          
                                                                  }}) }}

                                                                {{ form_widget(form.Message, {'attr': {
                                                                    'class': \"textbox1\" ,
                                                                     'placeholder' : \"* Message : \" , 
                                                                        'onfocus' : \"this.placeholder = ''\" ,                          
                                                                          'onBlur' : \"this.placeholder = '* Message :'\" ,                          
                                                                }}) }}

                                                                
                                                                {{ form_rest(form) }}

\t\t\t
                </div>
\t\t\t\t</form>
\t</div>
                          </div>
    </div>
                </div>
\t\t\t\t</div>
\t\t  </div>
\t</div>
        
                {%endblock%}", "FrontendBundle::contactus.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle/Resources/views/contactus.html.twig");
    }
}
