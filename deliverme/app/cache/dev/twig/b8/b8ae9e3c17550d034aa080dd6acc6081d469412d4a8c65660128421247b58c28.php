<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_449429e352f48ac0419b8cee451239281524e04f1eb83f761a4361a72e3a1dd3 extends Twig_Template
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
        $__internal_d0430d8871a4a6f39a94810a46250f6c3c351aff020cf6c7f42b9a4c933dda26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0430d8871a4a6f39a94810a46250f6c3c351aff020cf6c7f42b9a4c933dda26->enter($__internal_d0430d8871a4a6f39a94810a46250f6c3c351aff020cf6c7f42b9a4c933dda26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d0430d8871a4a6f39a94810a46250f6c3c351aff020cf6c7f42b9a4c933dda26->leave($__internal_d0430d8871a4a6f39a94810a46250f6c3c351aff020cf6c7f42b9a4c933dda26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
