<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_13f0b3ec82f8deaa923fc4d5a62c72d3f7a98ec87e32c5d6806a1f7eded03c6f extends Twig_Template
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
        $__internal_a2c8d94e3013ceae71ed9152f5a86e93ad7d5b26ac5374ff394577aa50d5ac8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c8d94e3013ceae71ed9152f5a86e93ad7d5b26ac5374ff394577aa50d5ac8e->enter($__internal_a2c8d94e3013ceae71ed9152f5a86e93ad7d5b26ac5374ff394577aa50d5ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a2c8d94e3013ceae71ed9152f5a86e93ad7d5b26ac5374ff394577aa50d5ac8e->leave($__internal_a2c8d94e3013ceae71ed9152f5a86e93ad7d5b26ac5374ff394577aa50d5ac8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
