<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0f20113b1a7c02446416d712735cfc348c2fe714f388c3b6e700e064ae557fc0 extends Twig_Template
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
        $__internal_188bfca727a9ffabc01e1044f91a5ec3de5bc4b94f23d93e44a3e54fd2d0e315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188bfca727a9ffabc01e1044f91a5ec3de5bc4b94f23d93e44a3e54fd2d0e315->enter($__internal_188bfca727a9ffabc01e1044f91a5ec3de5bc4b94f23d93e44a3e54fd2d0e315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_188bfca727a9ffabc01e1044f91a5ec3de5bc4b94f23d93e44a3e54fd2d0e315->leave($__internal_188bfca727a9ffabc01e1044f91a5ec3de5bc4b94f23d93e44a3e54fd2d0e315_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
