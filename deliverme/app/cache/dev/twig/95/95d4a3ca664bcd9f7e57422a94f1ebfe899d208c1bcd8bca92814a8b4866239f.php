<?php

/* DelivermeMenuBundle:Dishes:show.html.twig */
class __TwigTemplate_ac349c29d921a95e60b21e7b42d64e5e98f160cbefda7c07d40ffa240965822b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::backend.html.twig", "DelivermeMenuBundle:Dishes:show.html.twig", 1);
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
        $__internal_adc5740ac31d55e16fd067150d5aca94bc1b596d596bdd4f94269cc207d29fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc5740ac31d55e16fd067150d5aca94bc1b596d596bdd4f94269cc207d29fc3->enter($__internal_adc5740ac31d55e16fd067150d5aca94bc1b596d596bdd4f94269cc207d29fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DelivermeMenuBundle:Dishes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc5740ac31d55e16fd067150d5aca94bc1b596d596bdd4f94269cc207d29fc3->leave($__internal_adc5740ac31d55e16fd067150d5aca94bc1b596d596bdd4f94269cc207d29fc3_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f51d03a75e91c56e014bd1b3d5d49223cf0d58edc3a98b6206a797488744f745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51d03a75e91c56e014bd1b3d5d49223cf0d58edc3a98b6206a797488744f745->enter($__internal_f51d03a75e91c56e014bd1b3d5d49223cf0d58edc3a98b6206a797488744f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter une plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes");
        echo "\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
    <table >
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ingredients</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ingredients", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ranking", array()), "html", null, true);
        echo "</td>
            </tr>
          
        </tbody>
    </table>

     </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
";
        
        $__internal_f51d03a75e91c56e014bd1b3d5d49223cf0d58edc3a98b6206a797488744f745->leave($__internal_f51d03a75e91c56e014bd1b3d5d49223cf0d58edc3a98b6206a797488744f745_prof);

    }

    public function getTemplateName()
    {
        return "DelivermeMenuBundle:Dishes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  90 => 37,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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

{% block contenu %}
            
            
      <section class=\"wrapper\">
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Ajouter une plat
                               <a class=\"btn btn-xs  btn-success pull-right\" href=\"{{ path('dishes') }}\"><i class=\"fa fa-backward\"></i> Liste</a>

                          </header> 
                          <div class=\"panel-body\">
    <table >
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ entity.name }}</td>
            </tr>
            <tr>
                <th>Ingredients</th>
                <td>{{ entity.ingredients }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ entity.price }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ entity.status }}</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>{{ entity.ranking }}</td>
            </tr>
          
        </tbody>
    </table>

     </div>
                      </section>

                  </div>
              </div>        
            
      </section>
                        
{% endblock %}

", "DelivermeMenuBundle:Dishes:show.html.twig", "C:\\xampp\\htdocs\\deliverme\\src\\Deliverme\\MenuBundle/Resources/views/Dishes/show.html.twig");
    }
}
