<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7d94d6730cdf4aaef178aefa711ced35960b4e7a43e4e7eaf21762b4a961d959 extends Twig_Template
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
        $__internal_5e09375c9a0e8a06bcc5197f8ee9223c10235f96d1c30ceefed3eced953a8734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e09375c9a0e8a06bcc5197f8ee9223c10235f96d1c30ceefed3eced953a8734->enter($__internal_5e09375c9a0e8a06bcc5197f8ee9223c10235f96d1c30ceefed3eced953a8734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5e09375c9a0e8a06bcc5197f8ee9223c10235f96d1c30ceefed3eced953a8734->leave($__internal_5e09375c9a0e8a06bcc5197f8ee9223c10235f96d1c30ceefed3eced953a8734_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
