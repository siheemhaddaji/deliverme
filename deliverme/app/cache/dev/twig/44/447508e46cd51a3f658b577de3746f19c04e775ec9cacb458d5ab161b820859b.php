<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_415e3eea6077e5a21e2417b2a4e88b82000cf8c5b256414a7b1841ee5d8d1c9f extends Twig_Template
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
        $__internal_f6bda18b0238903c4f9a735cfae436544126a8d9cbbd671051f71611fa4b74d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bda18b0238903c4f9a735cfae436544126a8d9cbbd671051f71611fa4b74d1->enter($__internal_f6bda18b0238903c4f9a735cfae436544126a8d9cbbd671051f71611fa4b74d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f6bda18b0238903c4f9a735cfae436544126a8d9cbbd671051f71611fa4b74d1->leave($__internal_f6bda18b0238903c4f9a735cfae436544126a8d9cbbd671051f71611fa4b74d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
