<?php

/* include/menu.html.twig */
class __TwigTemplate_86fb6a09ff0d23e49ede8a57e0c4ed297283316ef12aca4caff9e52093b1dc99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4290cf72f2e21f7520485b548d2f3007686b0445feec99d6d2b01e2af410d715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4290cf72f2e21f7520485b548d2f3007686b0445feec99d6d2b01e2af410d715->enter($__internal_4290cf72f2e21f7520485b548d2f3007686b0445feec99d6d2b01e2af410d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/menu.html.twig"));

        // line 2
        echo "
                                             <li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_homepage");
        echo "\" class=\"nav-link\">Home</a></li>
                                             <li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_menue");
        echo "\" class=\"nav-link\">Menue</a></li>
                                             <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_about");
        echo "\" class=\"nav-link\">About</a></li>
                                             <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_contact");
        echo "\" class=\"nav-link\">Contact</a></li>
                                        ";
        
        $__internal_4290cf72f2e21f7520485b548d2f3007686b0445feec99d6d2b01e2af410d715->leave($__internal_4290cf72f2e21f7520485b548d2f3007686b0445feec99d6d2b01e2af410d715_prof);

    }

    public function getTemplateName()
    {
        return "include/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  29 => 4,  25 => 3,  22 => 2,);
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

                                             <li><a href=\"{{path('frontend_homepage')}}\" class=\"nav-link\">Home</a></li>
                                             <li><a href=\"{{path('frontend_menue')}}\" class=\"nav-link\">Menue</a></li>
                                             <li><a href=\"{{path('frontend_about')}}\" class=\"nav-link\">About</a></li>
                                             <li><a href=\"{{path('frontend_contact')}}\" class=\"nav-link\">Contact</a></li>
                                        ", "include/menu.html.twig", "C:\\xampp\\htdocs\\deliverme\\app\\Resources\\views\\include\\menu.html.twig");
    }
}
