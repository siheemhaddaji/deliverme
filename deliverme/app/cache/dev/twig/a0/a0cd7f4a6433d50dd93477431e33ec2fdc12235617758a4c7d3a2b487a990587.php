<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_c1ecb951036afe46b80ff20a4fabe6e1e1834c315fe3347bc03d67bcd1551d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:layout.html.twig", 1);
        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_576bf96be40411102db86c120fd2280167deee276e775423e818c75b969f7227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576bf96be40411102db86c120fd2280167deee276e775423e818c75b969f7227->enter($__internal_576bf96be40411102db86c120fd2280167deee276e775423e818c75b969f7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576bf96be40411102db86c120fd2280167deee276e775423e818c75b969f7227->leave($__internal_576bf96be40411102db86c120fd2280167deee276e775423e818c75b969f7227_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_4569c0b9db8fb53f87e0955351e880a2b066ab15b9595aa66640e98ca22e5db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4569c0b9db8fb53f87e0955351e880a2b066ab15b9595aa66640e98ca22e5db2->enter($__internal_4569c0b9db8fb53f87e0955351e880a2b066ab15b9595aa66640e98ca22e5db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_4569c0b9db8fb53f87e0955351e880a2b066ab15b9595aa66640e98ca22e5db2->leave($__internal_4569c0b9db8fb53f87e0955351e880a2b066ab15b9595aa66640e98ca22e5db2_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AcmeDemoBundle::layout.html.twig\" %}

{% block content_header_more %}
    {{ parent() }}
    <li>logged in as <strong>{{ app.user ? app.user.username : 'Anonymous' }}</strong> - <a href=\"{{ path('_demo_logout') }}\">Logout</a></li>
{% endblock %}
", "AcmeDemoBundle:Secured:layout.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Secured/layout.html.twig");
    }
}
