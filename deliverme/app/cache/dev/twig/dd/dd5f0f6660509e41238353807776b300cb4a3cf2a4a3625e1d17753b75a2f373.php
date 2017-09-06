<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_dc22db8621d6ec4922ea0362920650a04fb8b095b0823c387b022402e0dc7ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1b970c3e832f7fa62d99b71f8b5d2822cddfd0284b793864a3edc3b90469f242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b970c3e832f7fa62d99b71f8b5d2822cddfd0284b793864a3edc3b90469f242->enter($__internal_1b970c3e832f7fa62d99b71f8b5d2822cddfd0284b793864a3edc3b90469f242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b970c3e832f7fa62d99b71f8b5d2822cddfd0284b793864a3edc3b90469f242->leave($__internal_1b970c3e832f7fa62d99b71f8b5d2822cddfd0284b793864a3edc3b90469f242_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb352d3819b38f69279ed235f117f442a7305ebaf94d077edf711527109532c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb352d3819b38f69279ed235f117f442a7305ebaf94d077edf711527109532c4->enter($__internal_fb352d3819b38f69279ed235f117f442a7305ebaf94d077edf711527109532c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fb352d3819b38f69279ed235f117f442a7305ebaf94d077edf711527109532c4->leave($__internal_fb352d3819b38f69279ed235f117f442a7305ebaf94d077edf711527109532c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
