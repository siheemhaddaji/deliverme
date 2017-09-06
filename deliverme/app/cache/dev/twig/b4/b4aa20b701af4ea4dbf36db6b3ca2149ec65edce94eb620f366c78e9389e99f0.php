<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_82b9a927d2a786013d6c5e6cda71bf8bc7ef9a61a34cd6a2104d5930c1f8b21e extends Twig_Template
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
        $__internal_11df5099203ca6f77016a9a7a83a1b9ba8e27f4303af3733d29a2cb2fde07ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11df5099203ca6f77016a9a7a83a1b9ba8e27f4303af3733d29a2cb2fde07ba3->enter($__internal_11df5099203ca6f77016a9a7a83a1b9ba8e27f4303af3733d29a2cb2fde07ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_11df5099203ca6f77016a9a7a83a1b9ba8e27f4303af3733d29a2cb2fde07ba3->leave($__internal_11df5099203ca6f77016a9a7a83a1b9ba8e27f4303af3733d29a2cb2fde07ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
