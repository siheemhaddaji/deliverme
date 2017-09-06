<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4e59529155b9b0ebfc0fc8f02578bb1fc97f4c7d443eceee06cefdfb7e5862d0 extends Twig_Template
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
        $__internal_987c1de3f10c5d489b18aced939ad6249bd6273df041fc5eb80805386f427090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987c1de3f10c5d489b18aced939ad6249bd6273df041fc5eb80805386f427090->enter($__internal_987c1de3f10c5d489b18aced939ad6249bd6273df041fc5eb80805386f427090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_987c1de3f10c5d489b18aced939ad6249bd6273df041fc5eb80805386f427090->leave($__internal_987c1de3f10c5d489b18aced939ad6249bd6273df041fc5eb80805386f427090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\deliverme\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
