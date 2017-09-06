<?php

/* include/js.html.twig */
class __TwigTemplate_acc032b99b6ea738cd201e241b5f2a159981d038551c4b71aabeffa7627075b6 extends Twig_Template
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
        $__internal_59d2c14f4f194311b4a40381777e7d16edf93f61f305bb6d0abbe4a1753b76d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d2c14f4f194311b4a40381777e7d16edf93f61f305bb6d0abbe4a1753b76d6->enter($__internal_59d2c14f4f194311b4a40381777e7d16edf93f61f305bb6d0abbe4a1753b76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/js.html.twig"));

        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/front/assets/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"http://code.jquery.com/jquery-migrate-1.2.1.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/front/assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/front/assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_59d2c14f4f194311b4a40381777e7d16edf93f61f305bb6d0abbe4a1753b76d6->leave($__internal_59d2c14f4f194311b4a40381777e7d16edf93f61f305bb6d0abbe4a1753b76d6_prof);

    }

    public function getTemplateName()
    {
        return "include/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  22 => 2,);
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
<script src=\"{{ asset('bundles/delivermemenu/front/assets/js/jquery-1.11.1.min.js')}}\"></script>
<script src=\"http://code.jquery.com/jquery-migrate-1.2.1.js\"></script>
<script src=\"{{ asset('bundles/delivermemenu/front/assets/js/jquery-ui.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/front/assets/js/modernizr.custom.js')}}\"></script>
", "include/js.html.twig", "C:\\xampp\\htdocs\\deliverme\\app\\Resources\\views\\include\\js.html.twig");
    }
}
