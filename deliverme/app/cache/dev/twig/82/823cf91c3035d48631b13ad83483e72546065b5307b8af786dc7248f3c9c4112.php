<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_83fd786e71554eaa501573691ed8f697e184ac7bd2713f1645d3e4f9a5dd7e35 extends Twig_Template
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
        $__internal_ab9b6bb6cfbf0ec112a936e0e0d81db26eb6e3b8099f4a95f24bd50cd13421f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9b6bb6cfbf0ec112a936e0e0d81db26eb6e3b8099f4a95f24bd50cd13421f4->enter($__internal_ab9b6bb6cfbf0ec112a936e0e0d81db26eb6e3b8099f4a95f24bd50cd13421f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ab9b6bb6cfbf0ec112a936e0e0d81db26eb6e3b8099f4a95f24bd50cd13421f4->leave($__internal_ab9b6bb6cfbf0ec112a936e0e0d81db26eb6e3b8099f4a95f24bd50cd13421f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
