<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_d189c7d355accd1497858032db0fc130e26840b9a8633bddf01b9fefd6221105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_170baefda0c59daf2af80d574b9c801dbd92ea33a0e19e906625dff9e7f76afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170baefda0c59daf2af80d574b9c801dbd92ea33a0e19e906625dff9e7f76afc->enter($__internal_170baefda0c59daf2af80d574b9c801dbd92ea33a0e19e906625dff9e7f76afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170baefda0c59daf2af80d574b9c801dbd92ea33a0e19e906625dff9e7f76afc->leave($__internal_170baefda0c59daf2af80d574b9c801dbd92ea33a0e19e906625dff9e7f76afc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_099ee52b91431d194ae7c8e457614158dd1a53c256fb756b3534e439a666a3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099ee52b91431d194ae7c8e457614158dd1a53c256fb756b3534e439a666a3be->enter($__internal_099ee52b91431d194ae7c8e457614158dd1a53c256fb756b3534e439a666a3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_099ee52b91431d194ae7c8e457614158dd1a53c256fb756b3534e439a666a3be->leave($__internal_099ee52b91431d194ae7c8e457614158dd1a53c256fb756b3534e439a666a3be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
