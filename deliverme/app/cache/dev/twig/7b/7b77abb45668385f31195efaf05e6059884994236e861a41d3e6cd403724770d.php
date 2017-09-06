<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6e3a0b6b1db54f3688202b891f6c9e90bafcf2c6365a46645c6dbe41c47f4168 extends Twig_Template
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
        $__internal_8821937731f8fbc06f4c8002a578e89063e681e38dd940e67b8678b11a0224db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8821937731f8fbc06f4c8002a578e89063e681e38dd940e67b8678b11a0224db->enter($__internal_8821937731f8fbc06f4c8002a578e89063e681e38dd940e67b8678b11a0224db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8821937731f8fbc06f4c8002a578e89063e681e38dd940e67b8678b11a0224db->leave($__internal_8821937731f8fbc06f4c8002a578e89063e681e38dd940e67b8678b11a0224db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
