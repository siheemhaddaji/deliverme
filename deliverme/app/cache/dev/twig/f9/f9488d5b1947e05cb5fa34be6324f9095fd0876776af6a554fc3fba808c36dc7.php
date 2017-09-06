<?php

/* FrontendBundle::index.html.twig */
class __TwigTemplate_b2ffdd49f0548cad559e7f3d13f932c5e5038096509598fd1576e65cd82f846f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::index.html.twig", "FrontendBundle::index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1326acbf46f80a4c9cf24b183804ac1d6036106d8322a2d306d9007f2826446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1326acbf46f80a4c9cf24b183804ac1d6036106d8322a2d306d9007f2826446->enter($__internal_c1326acbf46f80a4c9cf24b183804ac1d6036106d8322a2d306d9007f2826446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1326acbf46f80a4c9cf24b183804ac1d6036106d8322a2d306d9007f2826446->leave($__internal_c1326acbf46f80a4c9cf24b183804ac1d6036106d8322a2d306d9007f2826446_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::index.html.twig' %} 

", "FrontendBundle::index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle/Resources/views/index.html.twig");
    }
}
