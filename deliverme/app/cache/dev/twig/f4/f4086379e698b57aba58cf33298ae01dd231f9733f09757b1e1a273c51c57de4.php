<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0215f026b7bf51d6bbf5900fc8152924b671d9cfe13329c732fa720c109e119d extends Twig_Template
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
        $__internal_115f907e7ddc90272f06d30e5f2e6b2250d6395954ba077e3c0bab05bc4b518f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115f907e7ddc90272f06d30e5f2e6b2250d6395954ba077e3c0bab05bc4b518f->enter($__internal_115f907e7ddc90272f06d30e5f2e6b2250d6395954ba077e3c0bab05bc4b518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_115f907e7ddc90272f06d30e5f2e6b2250d6395954ba077e3c0bab05bc4b518f->leave($__internal_115f907e7ddc90272f06d30e5f2e6b2250d6395954ba077e3c0bab05bc4b518f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
