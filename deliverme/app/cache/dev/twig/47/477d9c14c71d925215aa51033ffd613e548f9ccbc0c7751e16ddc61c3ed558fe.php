<?php

/* @Frontend/Default/index.html.twig */
class __TwigTemplate_8eb8ee7383206f7de37b2bf5e23e25ceba4127fc841fdf65ca6bc2d693e07d0c extends Twig_Template
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
        $__internal_72cd2b20f99b39880880ffefecfc52c620a159b3819f5141a6c646bbb5f5f3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cd2b20f99b39880880ffefecfc52c620a159b3819f5141a6c646bbb5f5f3ce->enter($__internal_72cd2b20f99b39880880ffefecfc52c620a159b3819f5141a6c646bbb5f5f3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Frontend/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_72cd2b20f99b39880880ffefecfc52c620a159b3819f5141a6c646bbb5f5f3ce->leave($__internal_72cd2b20f99b39880880ffefecfc52c620a159b3819f5141a6c646bbb5f5f3ce_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/index.html.twig";
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
", "@Frontend/Default/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Front\\endBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
