<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_751c9550a08600b275156c50c8007e4dcf77d8c809daa92ae4d155876dc0a74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Welcome:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d852fea24586e63c95620a30b6515d5a5a3d5727cc1d8a6c80a9e0eeecb3da80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d852fea24586e63c95620a30b6515d5a5a3d5727cc1d8a6c80a9e0eeecb3da80->enter($__internal_d852fea24586e63c95620a30b6515d5a5a3d5727cc1d8a6c80a9e0eeecb3da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Welcome:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d852fea24586e63c95620a30b6515d5a5a3d5727cc1d8a6c80a9e0eeecb3da80->leave($__internal_d852fea24586e63c95620a30b6515d5a5a3d5727cc1d8a6c80a9e0eeecb3da80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69354374310d2656970bdb5471ed4039c50a6b26054effe6893e0c2c2b87ac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69354374310d2656970bdb5471ed4039c50a6b26054effe6893e0c2c2b87ac49->enter($__internal_69354374310d2656970bdb5471ed4039c50a6b26054effe6893e0c2c2b87ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Welcome";
        
        $__internal_69354374310d2656970bdb5471ed4039c50a6b26054effe6893e0c2c2b87ac49->leave($__internal_69354374310d2656970bdb5471ed4039c50a6b26054effe6893e0c2c2b87ac49_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_3ceaa499f1ae10bbd155214a87b7bfc3542b85bcc08d601660e8697f2f1144a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ceaa499f1ae10bbd155214a87b7bfc3542b85bcc08d601660e8697f2f1144a5->enter($__internal_3ceaa499f1ae10bbd155214a87b7bfc3542b85bcc08d601660e8697f2f1144a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_3ceaa499f1ae10bbd155214a87b7bfc3542b85bcc08d601660e8697f2f1144a5->leave($__internal_3ceaa499f1ae10bbd155214a87b7bfc3542b85bcc08d601660e8697f2f1144a5_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbd7c67369d5b52ea479790818f4cc8a49bc4a1bac749a2dde86e2ca844a2f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd7c67369d5b52ea479790818f4cc8a49bc4a1bac749a2dde86e2ca844a2f84->enter($__internal_dbd7c67369d5b52ea479790818f4cc8a49bc4a1bac749a2dde86e2ca844a2f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
        
        $__internal_dbd7c67369d5b52ea479790818f4cc8a49bc4a1bac749a2dde86e2ca844a2f84->leave($__internal_dbd7c67369d5b52ea479790818f4cc8a49bc4a1bac749a2dde86e2ca844a2f84_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  127 => 45,  122 => 43,  118 => 41,  106 => 32,  101 => 30,  97 => 28,  95 => 27,  84 => 19,  79 => 17,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AcmeDemoBundle::layout.html.twig' %}

{% block title %}Symfony - Welcome{% endblock %}

{% block content_header '' %}

{% block content %}
    {% set version = constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::MAJOR_VERSION') ~ '.' ~ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::MINOR_VERSION')%}

    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"{{ asset('bundles/acmedemo/images/welcome-quick-tour.gif') }}\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/{{ version }}/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        {% if app.environment == 'dev' %}
            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"{{ asset('bundles/acmedemo/images/welcome-configure.gif') }}\" alt=\"Configure your application\" />
                </div>
                <a href=\"{{ path('_configurator_home') }}\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        {% endif %}
        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"{{ asset('bundles/acmedemo/images/welcome-demo.gif') }}\" alt=\"Demo\" />
            </div>
            <a href=\"{{ path('_demo') }}\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/{{ version }}/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
{% endblock %}
", "AcmeDemoBundle:Welcome:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Acme\\DemoBundle/Resources/views/Welcome/index.html.twig");
    }
}
