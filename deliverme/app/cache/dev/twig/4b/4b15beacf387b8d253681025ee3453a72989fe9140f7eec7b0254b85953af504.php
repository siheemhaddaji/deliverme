<?php

/* ::backend.html.twig */
class __TwigTemplate_5ea733f53f9554fe420b163b245b2ccdec8c8d7975b73bfa95d97cb3da3369f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdeebcd7e8aae82364833b4a874b83b895848e085223232f0e839928e14f8d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdeebcd7e8aae82364833b4a874b83b895848e085223232f0e839928e14f8d17->enter($__internal_bdeebcd7e8aae82364833b4a874b83b895848e085223232f0e839928e14f8d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::backend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mosaddek\">
    <meta name=\"keyword\" content=\"FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/img/favicon.png"), "html", null, true);
        echo "\">

    <title>Deliverme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" />

    <!--external css-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-colorpicker/css/colorpicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" />
     <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/advanced-datatable/media/css/demo_page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/advanced-datatable/media/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/data-tables/DT_bootstrap.css"), "html", null, true);
        echo "\" />
    
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/css/gallery.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-timepicker/compiled/timepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-colorpicker/css/colorpicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
     <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>

  <section id=\"container\" >
      <!--header start-->
      <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"index.html\" class=\"logo\">Deliver<span>me</span></a>
            <!--logo end-->
            
                              

            <div class=\"top-nav \">
                <!--search & user info start-->
                <ul class=\"nav pull-right top-menu\">
                    <li>
                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search\">
                    </li>
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <!--<img alt=\"\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/img/avatar1_small.jpg"), "html", null, true);
        echo "\"\">-->
                            <span class=\"username\"></span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li><a href=\"#\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i> Notification</a></li>
                            <li><a href=\"\"><i class=\"fa fa-key\"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                  <li>
                      <a class=\"\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dishes");
        echo "\">
                          <i  class=\"glyphicons glyphicons-dining-set\"></i>
                          <span>Plats</span>
                      </a>
                  </li>
                  <li>
                      <a class=\"\" href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("packet");
        echo "\">
                          <i class=\"\"></i>
                          <span>Paquets</span>
                      </a>
                   </li> 
                   <li>
                      <a class=\"\" href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deliveryman");
        echo "\">
                          <i class=\" glyphicons-user\"></i>
                          <span>Livreurs</span>
                      </a>
                   </li>
                   <li>
                      <a class=\"\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("areas");
        echo "\">
                          <i class=\"\"></i>
                          <span>zones</span>
                      </a>
                   </li>   
                   <li>
                      <a class=\"\" href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client");
        echo "\">
                          <i class=\"\"></i>
                          <span>Clients</span>
                      </a>
                   </li> 
                   
                   
                    
              </ul>
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      
      
      <section style=\"min-height: 630px;\" id=\"main-content\">
         
        ";
        // line 137
        $this->displayBlock('contenu', $context, $blocks);
        // line 140
        echo "
          
          
          
          
      </section>
      <!--main content end-->
      <!--footer start-->
     
      <footer class=\"site-footer\">
          <div class=\"text-center\">
              2013 &copy; FlatLab by VectorLab.
              <a href=\"#\" class=\"go-top\">
                  <i class=\"fa fa-angle-up\"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

        
        



    <!-- js placed at the end of the document so the pages load faster -->
   
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.sparkline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/respond.min.js"), "html", null, true);
        echo "\" ></script>
      <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/advanced-form-components.js"), "html", null, true);
        echo "\"></script>

    <!--common script for all pages-->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/common-scripts.js"), "html", null, true);
        echo "\"></script>

    <!--script for this page-->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/count.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/advanced-datatable/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/respond.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/fancybox/source/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
  <!--common script for all pages-->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/common-scripts.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/delivermemenu/js/advanced-form-components.js"), "html", null, true);
        echo "\"></script>

    <!--script for this page only-->

      <script type=\"text/javascript\" charset=\"utf-8\">
          \$(document).ready(function() {
              \$('#example').dataTable( {
                  \"aaSorting\": [[ 0, \"desc\" ]]
              } );
          } );
      </script>
  <script>

      //owl carousel

      \$(document).ready(function() {
          \$(\"#owl-demo\").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
\t\t\t  autoPlay:true

          });
      });

      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
 <script type=\"text/javascript\">
      \$(function() {
        //    fancybox
          jQuery(\".fancybox\").fancybox();
      });

  </script>
     <script>                               
\$('.wysihtml5').wysihtml5();
       </script>

   </body>
</html>";
        
        $__internal_bdeebcd7e8aae82364833b4a874b83b895848e085223232f0e839928e14f8d17->leave($__internal_bdeebcd7e8aae82364833b4a874b83b895848e085223232f0e839928e14f8d17_prof);

    }

    // line 137
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b4e53f166e43927b19aa9da71677055b212b3dac8922250704b05b7d06d3273b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e53f166e43927b19aa9da71677055b212b3dac8922250704b05b7d06d3273b->enter($__internal_b4e53f166e43927b19aa9da71677055b212b3dac8922250704b05b7d06d3273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 138
        echo "            
        ";
        
        $__internal_b4e53f166e43927b19aa9da71677055b212b3dac8922250704b05b7d06d3273b->leave($__internal_b4e53f166e43927b19aa9da71677055b212b3dac8922250704b05b7d06d3273b_prof);

    }

    public function getTemplateName()
    {
        return "::backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 138,  455 => 137,  402 => 200,  397 => 198,  392 => 196,  388 => 195,  384 => 194,  380 => 193,  376 => 192,  372 => 191,  368 => 190,  364 => 189,  360 => 188,  354 => 185,  348 => 182,  344 => 181,  340 => 180,  336 => 179,  332 => 178,  328 => 177,  324 => 176,  320 => 175,  316 => 174,  312 => 173,  308 => 172,  304 => 171,  300 => 170,  296 => 169,  292 => 168,  288 => 167,  259 => 140,  257 => 137,  237 => 120,  228 => 114,  219 => 108,  210 => 102,  201 => 96,  174 => 72,  145 => 46,  141 => 45,  136 => 43,  132 => 42,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  63 => 21,  59 => 20,  55 => 19,  49 => 16,  45 => 15,  41 => 14,  33 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mosaddek\">
    <meta name=\"keyword\" content=\"FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/delivermemenu/img/favicon.png')}}\">

    <title>Deliverme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('bundles/delivermemenu/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/delivermemenu/css/bootstrap-reset.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}\" />

    <!--external css-->
    <link href=\"{{ asset('bundles/delivermemenu/assets/font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('bundles/delivermemenu/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/delivermemenu/css/owl.carousel.css')}}\" type=\"text/css\">
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('bundles/delivermemenu/css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/delivermemenu/css/style-responsive.css')}}\" rel=\"stylesheet\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-datepicker/css/datepicker.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-colorpicker/css/colorpicker.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker.css')}}\" />
     <link href=\"{{ asset('bundles/delivermemenu/assets/advanced-datatable/media/css/demo_page.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('bundles/delivermemenu/assets/advanced-datatable/media/css/demo_table.css')}}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/delivermemenu/assets/data-tables/DT_bootstrap.css')}}\" />
    
    <link href=\"{{ asset('bundles/delivermemenu/assets/fancybox/source/jquery.fancybox.css')}}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/css/gallery.css')}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-datepicker/css/datepicker.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-timepicker/compiled/timepicker.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-colorpicker/css/colorpicker.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker-bs3.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/delivermemenu/assets/bootstrap-datetimepicker/css/datetimepicker.css')}}\" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"{{ asset('bundles/delivermemenu/js/html5shiv.js')}}\"></script>
      <script src=\"{{ asset('bundles/delivermemenu/js/respond.min.js')}}\"></script>
    <![endif]-->
     <script src=\"{{ asset('bundles/delivermemenu/js/jquery.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/jquery-1.8.3.min.js')}}\"></script>
  </head>

  <body>

  <section id=\"container\" >
      <!--header start-->
      <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"index.html\" class=\"logo\">Deliver<span>me</span></a>
            <!--logo end-->
            
                              

            <div class=\"top-nav \">
                <!--search & user info start-->
                <ul class=\"nav pull-right top-menu\">
                    <li>
                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search\">
                    </li>
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <!--<img alt=\"\" src=\"{{ asset('bundles/delivermemenu/img/avatar1_small.jpg')}}\"\">-->
                            <span class=\"username\"></span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li><a href=\"#\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i> Notification</a></li>
                            <li><a href=\"\"><i class=\"fa fa-key\"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                  <li>
                      <a class=\"\" href=\"{{path('dishes')}}\">
                          <i  class=\"glyphicons glyphicons-dining-set\"></i>
                          <span>Plats</span>
                      </a>
                  </li>
                  <li>
                      <a class=\"\" href=\"{{path('packet')}}\">
                          <i class=\"\"></i>
                          <span>Paquets</span>
                      </a>
                   </li> 
                   <li>
                      <a class=\"\" href=\"{{path('deliveryman')}}\">
                          <i class=\" glyphicons-user\"></i>
                          <span>Livreurs</span>
                      </a>
                   </li>
                   <li>
                      <a class=\"\" href=\"{{path('areas')}}\">
                          <i class=\"\"></i>
                          <span>zones</span>
                      </a>
                   </li>   
                   <li>
                      <a class=\"\" href=\"{{path('client')}}\">
                          <i class=\"\"></i>
                          <span>Clients</span>
                      </a>
                   </li> 
                   
                   
                    
              </ul>
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      
      
      <section style=\"min-height: 630px;\" id=\"main-content\">
         
        {% block contenu %}
            
        {% endblock %}

          
          
          
          
      </section>
      <!--main content end-->
      <!--footer start-->
     
      <footer class=\"site-footer\">
          <div class=\"text-center\">
              2013 &copy; FlatLab by VectorLab.
              <a href=\"#\" class=\"go-top\">
                  <i class=\"fa fa-angle-up\"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

        
        



    <!-- js placed at the end of the document so the pages load faster -->
   
    <script src=\"{{ asset('bundles/delivermemenu/js/bootstrap.min.js')}}\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/js/jquery.dcjqaccordion.2.7.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/jquery.scrollTo.min.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/jquery.nicescroll.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/jquery.sparkline.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/owl.carousel.js')}}\" ></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/jquery.customSelect.min.js')}}\" ></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/respond.min.js')}}\" ></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-daterangepicker/moment.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-daterangepicker/daterangepicker.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/advanced-form-components.js')}}\"></script>

    <!--common script for all pages-->
    <script src=\"{{ asset('bundles/delivermemenu/js/common-scripts.js')}}\"></script>

    <!--script for this page-->
    <script src=\"{{ asset('bundles/delivermemenu/js/sparkline-chart.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/easy-pie-chart.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/count.js')}}\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"{{ asset('bundles/delivermemenu/assets/advanced-datatable/media/js/jquery.dataTables.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/data-tables/DT_bootstrap.js')}}\"></script>
    <script src=\"{{ asset('bundles/delivermemenu/js/respond.min.js')}}\" ></script>
    <script src=\"{{ asset('bundles/delivermemenu/assets/fancybox/source/jquery.fancybox.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/delivermemenu/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}\"></script>
  <!--common script for all pages-->
    <script src=\"{{ asset('bundles/delivermemenu/js/common-scripts.js')}}\"></script>

    <script src=\"{{ asset('bundles/delivermemenu/js/advanced-form-components.js')}}\"></script>

    <!--script for this page only-->

      <script type=\"text/javascript\" charset=\"utf-8\">
          \$(document).ready(function() {
              \$('#example').dataTable( {
                  \"aaSorting\": [[ 0, \"desc\" ]]
              } );
          } );
      </script>
  <script>

      //owl carousel

      \$(document).ready(function() {
          \$(\"#owl-demo\").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
\t\t\t  autoPlay:true

          });
      });

      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
 <script type=\"text/javascript\">
      \$(function() {
        //    fancybox
          jQuery(\".fancybox\").fancybox();
      });

  </script>
     <script>                               
\$('.wysihtml5').wysihtml5();
       </script>

   </body>
</html>", "::backend.html.twig", "C:\\xampp\\htdocs\\deliverme\\app/Resources\\views/backend.html.twig");
    }
}
