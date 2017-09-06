<?php

/* FrontendBundle::index.html.twig */
class __TwigTemplate_995bef1533b8a1e84b7492338dee126521c1c8680b6621072bd8f118ffb905ca extends Twig_Template
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
        $__internal_a7c60a7bc1c5df85616ea9d7c809e3784619cfb2222c5ed5638383400754ec64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c60a7bc1c5df85616ea9d7c809e3784619cfb2222c5ed5638383400754ec64->enter($__internal_a7c60a7bc1c5df85616ea9d7c809e3784619cfb2222c5ed5638383400754ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c60a7bc1c5df85616ea9d7c809e3784619cfb2222c5ed5638383400754ec64->leave($__internal_a7c60a7bc1c5df85616ea9d7c809e3784619cfb2222c5ed5638383400754ec64_prof);

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

", "FrontendBundle::index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\index.html.twig");
    }
}
