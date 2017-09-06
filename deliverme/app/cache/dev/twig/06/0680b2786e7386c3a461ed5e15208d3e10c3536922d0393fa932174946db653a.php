<?php

/* @DelivermeMenu/Default/index.html.twig */
class __TwigTemplate_00677883a17674397866685dc89f501c96c6669859914a9d65d1225cac2f1f81 extends Twig_Template
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
        $__internal_55273ff511fa08de63ca5e17ef545e352a7810e422b52c922d72ec3ba7e2adb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55273ff511fa08de63ca5e17ef545e352a7810e422b52c922d72ec3ba7e2adb8->enter($__internal_55273ff511fa08de63ca5e17ef545e352a7810e422b52c922d72ec3ba7e2adb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DelivermeMenu/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_55273ff511fa08de63ca5e17ef545e352a7810e422b52c922d72ec3ba7e2adb8->leave($__internal_55273ff511fa08de63ca5e17ef545e352a7810e422b52c922d72ec3ba7e2adb8_prof);

    }

    public function getTemplateName()
    {
        return "@DelivermeMenu/Default/index.html.twig";
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
", "@DelivermeMenu/Default/index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
