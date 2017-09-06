<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e533f5caa35f3a32e16f36112a783e7bbfc472745c2faffe318d0b00fbbbec9c extends Twig_Template
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
        $__internal_e76d018b4ba7f8050d13c47fec7a676c11e99d0f0c9328c94dcc164b5ac5125b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76d018b4ba7f8050d13c47fec7a676c11e99d0f0c9328c94dcc164b5ac5125b->enter($__internal_e76d018b4ba7f8050d13c47fec7a676c11e99d0f0c9328c94dcc164b5ac5125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e76d018b4ba7f8050d13c47fec7a676c11e99d0f0c9328c94dcc164b5ac5125b->leave($__internal_e76d018b4ba7f8050d13c47fec7a676c11e99d0f0c9328c94dcc164b5ac5125b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
