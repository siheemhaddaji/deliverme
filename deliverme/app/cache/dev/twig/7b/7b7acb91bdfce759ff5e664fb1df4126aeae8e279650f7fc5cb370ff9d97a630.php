<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1c8f211044e990abd03729e5d265d5a4996b17e260aa088a77817e10c16cc721 extends Twig_Template
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
        $__internal_35d9890bdb5705623c4ed71864f3a851a3fbf0f7185a494ac038b3e01a096e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d9890bdb5705623c4ed71864f3a851a3fbf0f7185a494ac038b3e01a096e76->enter($__internal_35d9890bdb5705623c4ed71864f3a851a3fbf0f7185a494ac038b3e01a096e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_35d9890bdb5705623c4ed71864f3a851a3fbf0f7185a494ac038b3e01a096e76->leave($__internal_35d9890bdb5705623c4ed71864f3a851a3fbf0f7185a494ac038b3e01a096e76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
