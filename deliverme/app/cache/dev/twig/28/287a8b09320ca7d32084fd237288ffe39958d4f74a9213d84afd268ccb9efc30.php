<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_ce4b02166269939c9a247998439aff8945efbaf5969cb9e609dfd984f8711328 extends Twig_Template
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
        $__internal_99577fb02ae009e3f01cf3caf6ca4c3506e6f1be405a082e1d5331f8574809af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99577fb02ae009e3f01cf3caf6ca4c3506e6f1be405a082e1d5331f8574809af->enter($__internal_99577fb02ae009e3f01cf3caf6ca4c3506e6f1be405a082e1d5331f8574809af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_99577fb02ae009e3f01cf3caf6ca4c3506e6f1be405a082e1d5331f8574809af->leave($__internal_99577fb02ae009e3f01cf3caf6ca4c3506e6f1be405a082e1d5331f8574809af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_change_password\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
", "@FOSUser/ChangePassword/changePassword_content.html.twig", "C:\\xampp\\htdocs\\deliverme\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
