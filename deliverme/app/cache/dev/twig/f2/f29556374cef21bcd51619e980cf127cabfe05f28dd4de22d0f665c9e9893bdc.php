<?php

/* FrontendBundle::contact.html.twig */
class __TwigTemplate_b13ce2b9c5db5c5648f7bc05ebcc51237135804819e4a29475347cff0dc3e677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrontendBundle::contact.html.twig", 1);
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
        $__internal_e877f4a49dc402c5597ac0179215a59f23ab06efee805f406f9f2bc55d8fb8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e877f4a49dc402c5597ac0179215a59f23ab06efee805f406f9f2bc55d8fb8c5->enter($__internal_e877f4a49dc402c5597ac0179215a59f23ab06efee805f406f9f2bc55d8fb8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e877f4a49dc402c5597ac0179215a59f23ab06efee805f406f9f2bc55d8fb8c5->leave($__internal_e877f4a49dc402c5597ac0179215a59f23ab06efee805f406f9f2bc55d8fb8c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14f208ad0666904af1bdc22ecf5ad032f2e3bc3cb6907d90649d385803b49ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f208ad0666904af1bdc22ecf5ad032f2e3bc3cb6907d90649d385803b49ebd->enter($__internal_14f208ad0666904af1bdc22ecf5ad032f2e3bc3cb6907d90649d385803b49ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "contact";
        
        $__internal_14f208ad0666904af1bdc22ecf5ad032f2e3bc3cb6907d90649d385803b49ebd->leave($__internal_14f208ad0666904af1bdc22ecf5ad032f2e3bc3cb6907d90649d385803b49ebd_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fc2da3883767831149bb033e2e66e3ed658ce724e50bbf92fde2e0e64c23b51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2da3883767831149bb033e2e66e3ed658ce724e50bbf92fde2e0e64c23b51e->enter($__internal_fc2da3883767831149bb033e2e66e3ed658ce724e50bbf92fde2e0e64c23b51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_fc2da3883767831149bb033e2e66e3ed658ce724e50bbf92fde2e0e64c23b51e->leave($__internal_fc2da3883767831149bb033e2e66e3ed658ce724e50bbf92fde2e0e64c23b51e_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::contact.html.twig";
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
       
        {%endblock%}", "FrontendBundle::contact.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle/Resources/views/contact.html.twig");
    }
}
