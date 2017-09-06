<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_62633cf2cf6297b7426c08125d07bf55735134e972d0d60c4b307a64fa61a398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d40ff52f550062f501d3fef6bdd24430590833dc1ec2475288e8649ac0cda4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40ff52f550062f501d3fef6bdd24430590833dc1ec2475288e8649ac0cda4fd->enter($__internal_d40ff52f550062f501d3fef6bdd24430590833dc1ec2475288e8649ac0cda4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40ff52f550062f501d3fef6bdd24430590833dc1ec2475288e8649ac0cda4fd->leave($__internal_d40ff52f550062f501d3fef6bdd24430590833dc1ec2475288e8649ac0cda4fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9039fe87c49c3667a61bff63f28a09e54b80b05235904af033ed74689ad36b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9039fe87c49c3667a61bff63f28a09e54b80b05235904af033ed74689ad36b72->enter($__internal_9039fe87c49c3667a61bff63f28a09e54b80b05235904af033ed74689ad36b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9039fe87c49c3667a61bff63f28a09e54b80b05235904af033ed74689ad36b72->leave($__internal_9039fe87c49c3667a61bff63f28a09e54b80b05235904af033ed74689ad36b72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
