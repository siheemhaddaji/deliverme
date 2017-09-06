<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a3a33d4fac9392d872b1c83a0e734b925eb21357789304e3ad330b62a40a810a extends Twig_Template
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
        $__internal_a1e6c42ed68e3f25bb0702aeb573b028fe91621b83c22c05bf14d0195b7c3f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e6c42ed68e3f25bb0702aeb573b028fe91621b83c22c05bf14d0195b7c3f34->enter($__internal_a1e6c42ed68e3f25bb0702aeb573b028fe91621b83c22c05bf14d0195b7c3f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a1e6c42ed68e3f25bb0702aeb573b028fe91621b83c22c05bf14d0195b7c3f34->leave($__internal_a1e6c42ed68e3f25bb0702aeb573b028fe91621b83c22c05bf14d0195b7c3f34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
