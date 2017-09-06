<?php

/* DelivermeMenuBundle:Contact:index.html.twig */
class __TwigTemplate_9baadc41475b86f8741923c98b2b63f06355dee3b2910082b1e6dba2d244f54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fae31c153c9e6004407ebc03c46a18b1e769d43283c8528df81449ede95bbb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae31c153c9e6004407ebc03c46a18b1e769d43283c8528df81449ede95bbb7f->enter($__internal_fae31c153c9e6004407ebc03c46a18b1e769d43283c8528df81449ede95bbb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae31c153c9e6004407ebc03c46a18b1e769d43283c8528df81449ede95bbb7f->leave($__internal_fae31c153c9e6004407ebc03c46a18b1e769d43283c8528df81449ede95bbb7f_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_158741565281763c026dbd2885767211fcf67eb78efdbadd727ab032c6f6eab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158741565281763c026dbd2885767211fcf67eb78efdbadd727ab032c6f6eab4->enter($__internal_158741565281763c026dbd2885767211fcf67eb78efdbadd727ab032c6f6eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "      

            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             Contact
    
                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
        <thead>
            <tr>
                 <th>Subject</th>
                <th>Fullname</th>
                <th>Phone </th>
                <th>Mail</th>
                <th>Message</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                 <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fullname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "PhoneNumber", array()), "html", null, true);
            echo " </td>
               <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Mail", array()), "html", null, true);
            echo " </td>
               <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Message", array()), "html", null, true);
            echo " </td>
              
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
          </div>

    ";
        
        $__internal_158741565281763c026dbd2885767211fcf67eb78efdbadd727ab032c6f6eab4->leave($__internal_158741565281763c026dbd2885767211fcf67eb78efdbadd727ab032c6f6eab4_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  71 => 31,  67 => 30,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::backend.html.twig' %} 


\t{% block contenu %}
      

            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                             Contact
    
                          </header>
                          <div class=\"panel-body\">
       <table class=\"display table table-bordered table-striped\" id=\"example\">
        <thead>
            <tr>
                 <th>Subject</th>
                <th>Fullname</th>
                <th>Phone </th>
                <th>Mail</th>
                <th>Message</th>
                
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                 <td>{{ entity.subject }}</td>
                <td>{{ entity.fullname }}</td>
                <td>{{ entity.PhoneNumber }} </td>
               <td>{{ entity.Mail }} </td>
               <td>{{ entity.Message }} </td>
              
            </tr>
        {% endfor %}
        </tbody>
    </table>
          </div>

    {% endblock %}
", "DelivermeMenuBundle:Contact:index.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Contact/index.html.twig");
    }
}
