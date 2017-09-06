<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cc857bf07cb99ffa365f669e665b9e6b6ff6f6f28c69df63740f959791bdacde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_fffb8741c7c6e0c7ea5fa8afa2a5ebff25bbb43340fce8d577c047cd63ce1f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffb8741c7c6e0c7ea5fa8afa2a5ebff25bbb43340fce8d577c047cd63ce1f1c->enter($__internal_fffb8741c7c6e0c7ea5fa8afa2a5ebff25bbb43340fce8d577c047cd63ce1f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffb8741c7c6e0c7ea5fa8afa2a5ebff25bbb43340fce8d577c047cd63ce1f1c->leave($__internal_fffb8741c7c6e0c7ea5fa8afa2a5ebff25bbb43340fce8d577c047cd63ce1f1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7a2d25f1a9ba2dd39799f9e45af3e3720e882026ff61942dbdbadb43e07d55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a2d25f1a9ba2dd39799f9e45af3e3720e882026ff61942dbdbadb43e07d55d->enter($__internal_c7a2d25f1a9ba2dd39799f9e45af3e3720e882026ff61942dbdbadb43e07d55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c7a2d25f1a9ba2dd39799f9e45af3e3720e882026ff61942dbdbadb43e07d55d->leave($__internal_c7a2d25f1a9ba2dd39799f9e45af3e3720e882026ff61942dbdbadb43e07d55d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
