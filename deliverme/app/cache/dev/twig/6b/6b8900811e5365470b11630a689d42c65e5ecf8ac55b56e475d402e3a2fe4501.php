<?php

/* @Frontend/contact.html.twig */
class __TwigTemplate_14b9d6f4a03ad387c9b0620d4f3e931532dc6c2d0c15b52add9bb1e687a2b418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Frontend/contact.html.twig", 1);
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
        $__internal_f16c2888ea165c2f420af3d1da86f27ec55422b3c562df116149819845f28b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16c2888ea165c2f420af3d1da86f27ec55422b3c562df116149819845f28b94->enter($__internal_f16c2888ea165c2f420af3d1da86f27ec55422b3c562df116149819845f28b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16c2888ea165c2f420af3d1da86f27ec55422b3c562df116149819845f28b94->leave($__internal_f16c2888ea165c2f420af3d1da86f27ec55422b3c562df116149819845f28b94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2499972796721f81f3875f46b65b4beea3cd695dbb485a548d8cd4990fe50d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2499972796721f81f3875f46b65b4beea3cd695dbb485a548d8cd4990fe50d0b->enter($__internal_2499972796721f81f3875f46b65b4beea3cd695dbb485a548d8cd4990fe50d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "contact";
        
        $__internal_2499972796721f81f3875f46b65b4beea3cd695dbb485a548d8cd4990fe50d0b->leave($__internal_2499972796721f81f3875f46b65b4beea3cd695dbb485a548d8cd4990fe50d0b_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3bcdbad283424352a2dd991e89e800ae4dbff706329d45644a22d78a1c915521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcdbad283424352a2dd991e89e800ae4dbff706329d45644a22d78a1c915521->enter($__internal_3bcdbad283424352a2dd991e89e800ae4dbff706329d45644a22d78a1c915521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "
        <div id=\"map_canvas\" class=\"fullBg\"></div>
    <div class=\"content_overlay\"></div>
        <div class=\"content_inner\">
            <div class=\"row contentscroll\">
                <div class=\"container\">
                    <div class=\"col-md-6 empty\">&nbsp;</div>
                <div class=\"col-md-6 content_text\">
                    <h1>Contact Us</h1>
                    <p class=\"pad_top13\">Lorem ipsum dolor sit amet conse ctetur elit sed do eiusmod tempor augue.</p>
                <div class=\"clearfix pad_top20\">
                
                <h2 class=\"clearfix address\">
                    <span class=\"left\"><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;</span>
                    <span class=\"left\"> #12 Fifth main street,<br/> NY 10307, USA</span>\t\t\t\t\t
                </h2>
                
                <div class=\"phone\"><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;+ 1 123 456 7890</div>
                
                <a href=\"mailto:info@mathewjoyson.com\" class=\"mail-text\">
                \t<i class=\"fa fa-envelope\"></i>info@mathewjoyson.com
                </a>
                
                <div class=\"clearfix\">
                    <div class=\"header_icons accura-header-block accura-hidden-2xs social_top\">
                        <ul class=\"accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix\">
                        <!--Social Icon 1-->
                        <li>
                            <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"accura-social-icon-facebook circle\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 1-->
                        
                        <!--Social Icon 2-->
                        <li>
                            <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"accura-social-icon-twitter circle\">
                            \t<i class=\"fa fa-twitter\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 2-->
                        
                        <!--Social Icon 3-->
                        <li>
                            <a href=\"http://www.googleplus.com\" target=\"_blank\" class=\"accura-social-icon-gplus circle\">
                            \t<i class=\"fa fa-google-plus\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 3-->
                        
                        <!--Social Icon4-->
                        <li>
                            <a href=\"https://instagram.com/accounts/login/\" target=\"_blank\" class=\"accura-social-icon-instagram circle\">
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 4-->
                        
                        <!--Social Icon 5-->
                        <li>
                            <a href=\"https://www.linkedin.com/uas/login\" target=\"_blank\" class=\"accura-social-icon-linkedin circle\">
                           \t\t<i class=\"fa fa-linkedin\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 5-->
                        </ul>
                    </div>
                </div>
                <!--Button-->
                <div class=\"pad_top30\">
                \t<a class=\"button nav-link\" href=\"contactform.htm\">Enquiry Form</a>
                </div>
                <!-- // Button-->
                </div>
                </div>
                </div>
            </div>
       
        ";
        
        $__internal_3bcdbad283424352a2dd991e89e800ae4dbff706329d45644a22d78a1c915521->leave($__internal_3bcdbad283424352a2dd991e89e800ae4dbff706329d45644a22d78a1c915521_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/contact.html.twig";
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

{% block title %}contact{% endblock %}
    {% block contenu%}

        <div id=\"map_canvas\" class=\"fullBg\"></div>
    <div class=\"content_overlay\"></div>
        <div class=\"content_inner\">
            <div class=\"row contentscroll\">
                <div class=\"container\">
                    <div class=\"col-md-6 empty\">&nbsp;</div>
                <div class=\"col-md-6 content_text\">
                    <h1>Contact Us</h1>
                    <p class=\"pad_top13\">Lorem ipsum dolor sit amet conse ctetur elit sed do eiusmod tempor augue.</p>
                <div class=\"clearfix pad_top20\">
                
                <h2 class=\"clearfix address\">
                    <span class=\"left\"><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;</span>
                    <span class=\"left\"> #12 Fifth main street,<br/> NY 10307, USA</span>\t\t\t\t\t
                </h2>
                
                <div class=\"phone\"><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;+ 1 123 456 7890</div>
                
                <a href=\"mailto:info@mathewjoyson.com\" class=\"mail-text\">
                \t<i class=\"fa fa-envelope\"></i>info@mathewjoyson.com
                </a>
                
                <div class=\"clearfix\">
                    <div class=\"header_icons accura-header-block accura-hidden-2xs social_top\">
                        <ul class=\"accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix\">
                        <!--Social Icon 1-->
                        <li>
                            <a href=\"http://www.facebook.com\" target=\"_blank\" class=\"accura-social-icon-facebook circle\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 1-->
                        
                        <!--Social Icon 2-->
                        <li>
                            <a href=\"http://www.twitter.com\" target=\"_blank\" class=\"accura-social-icon-twitter circle\">
                            \t<i class=\"fa fa-twitter\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 2-->
                        
                        <!--Social Icon 3-->
                        <li>
                            <a href=\"http://www.googleplus.com\" target=\"_blank\" class=\"accura-social-icon-gplus circle\">
                            \t<i class=\"fa fa-google-plus\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 3-->
                        
                        <!--Social Icon4-->
                        <li>
                            <a href=\"https://instagram.com/accounts/login/\" target=\"_blank\" class=\"accura-social-icon-instagram circle\">
                                <i class=\"fa fa-instagram\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 4-->
                        
                        <!--Social Icon 5-->
                        <li>
                            <a href=\"https://www.linkedin.com/uas/login\" target=\"_blank\" class=\"accura-social-icon-linkedin circle\">
                           \t\t<i class=\"fa fa-linkedin\"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 5-->
                        </ul>
                    </div>
                </div>
                <!--Button-->
                <div class=\"pad_top30\">
                \t<a class=\"button nav-link\" href=\"contactform.htm\">Enquiry Form</a>
                </div>
                <!-- // Button-->
                </div>
                </div>
                </div>
            </div>
       
        {%endblock%}", "@Frontend/contact.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\contact.html.twig");
    }
}
