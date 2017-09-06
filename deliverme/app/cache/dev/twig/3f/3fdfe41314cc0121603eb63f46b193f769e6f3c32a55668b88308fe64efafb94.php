<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_4757c8d7f56a0fbf8bf12dc5aea5f365338088ce1f3cf8a102ab2b949f3785f0 extends Twig_Template
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
        $__internal_31179170916715e449e9c77bbf675c71fb9225352428bb389d64a13427aa815e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31179170916715e449e9c77bbf675c71fb9225352428bb389d64a13427aa815e->enter($__internal_31179170916715e449e9c77bbf675c71fb9225352428bb389d64a13427aa815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_31179170916715e449e9c77bbf675c71fb9225352428bb389d64a13427aa815e->leave($__internal_31179170916715e449e9c77bbf675c71fb9225352428bb389d64a13427aa815e_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ name }}!
", "FrontendBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle/Resources/views/Default/index.html.twig");
    }
}
