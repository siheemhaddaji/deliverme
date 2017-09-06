<?php

/* DelivermeMenuBundle:Default:index.html.twig */
class __TwigTemplate_ad21e95a1dc3b8cdbb69bb5b8a5ac2b15543bef7a15680bdc7380b5ccbc9cd80 extends Twig_Template
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
        $__internal_4726879e6224fc2df8a5c371e327eda47311a4c1faeb92d6fdd4eb5d1b6ceb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4726879e6224fc2df8a5c371e327eda47311a4c1faeb92d6fdd4eb5d1b6ceb87->enter($__internal_4726879e6224fc2df8a5c371e327eda47311a4c1faeb92d6fdd4eb5d1b6ceb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_4726879e6224fc2df8a5c371e327eda47311a4c1faeb92d6fdd4eb5d1b6ceb87->leave($__internal_4726879e6224fc2df8a5c371e327eda47311a4c1faeb92d6fdd4eb5d1b6ceb87_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Default:index.html.twig";
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
", "DelivermeMenuBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Default/index.html.twig");
    }
}
