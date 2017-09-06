<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_80507c8f3a9349340c30886c35df875e37ec904938d651f9fff96b1964c801ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6ba3d8cc70d606adb96564ec38444689f7fb11acdd6c3189235e3dc0f3b85a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba3d8cc70d606adb96564ec38444689f7fb11acdd6c3189235e3dc0f3b85a62->enter($__internal_6ba3d8cc70d606adb96564ec38444689f7fb11acdd6c3189235e3dc0f3b85a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ba3d8cc70d606adb96564ec38444689f7fb11acdd6c3189235e3dc0f3b85a62->leave($__internal_6ba3d8cc70d606adb96564ec38444689f7fb11acdd6c3189235e3dc0f3b85a62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af915c0ba9500174422703aa3e0569fcef18f9ab82af8ef65abaa3dd3a1c5a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af915c0ba9500174422703aa3e0569fcef18f9ab82af8ef65abaa3dd3a1c5a01->enter($__internal_af915c0ba9500174422703aa3e0569fcef18f9ab82af8ef65abaa3dd3a1c5a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_af915c0ba9500174422703aa3e0569fcef18f9ab82af8ef65abaa3dd3a1c5a01->leave($__internal_af915c0ba9500174422703aa3e0569fcef18f9ab82af8ef65abaa3dd3a1c5a01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
