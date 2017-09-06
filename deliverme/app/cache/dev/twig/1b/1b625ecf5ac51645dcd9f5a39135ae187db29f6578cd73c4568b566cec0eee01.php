<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_017296a1d7720968a0055d4f1790a7effd4953c7dc7931b1f09b16b08b58f243 extends Twig_Template
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
        $__internal_1ab4412ba17bae53648375b501cfeb07b9939a3c5a9d77b5cb70bd486acf8dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab4412ba17bae53648375b501cfeb07b9939a3c5a9d77b5cb70bd486acf8dc3->enter($__internal_1ab4412ba17bae53648375b501cfeb07b9939a3c5a9d77b5cb70bd486acf8dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1ab4412ba17bae53648375b501cfeb07b9939a3c5a9d77b5cb70bd486acf8dc3->leave($__internal_1ab4412ba17bae53648375b501cfeb07b9939a3c5a9d77b5cb70bd486acf8dc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
