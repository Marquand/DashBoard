<?php

/* PointWebFicheBundle::base.html.twig */
class __TwigTemplate_9cac846f39a7d0bbbe8736ac557b1aa12e7b5c8f20525c9159fb24389111c851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "title"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "description"), "html", null, true);
        echo "\"/>
    <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "keywords"), "html", null, true);
        echo "\"/>



    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jserror.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/antispam.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" media=\"all\"/>


    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Morris Charts CSS -->
    <link href=\"css/plugins/morris.css";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Fonts -->
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>


    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <!--[if IE]>
    <style media=\"screen\">
        .myhr{margin:-0.45em 0}
    </style>
    <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <meta http-equiv=\"imagetoolbar\" content=\"no\" />
    <![endif]-->

    <script type=\"application/x-javascript\"> addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

</head>
<body>

";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
    <div id=\"scrollToTop\"><a href=\"#\">&#9650;</a></div>



    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

    ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "</body>
</html>";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 61
        echo "        <h1 title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "h1Title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "h1"), "html", null, true);
        echo "</h1>

    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">
                        Dashboard <small>Page d'administration et de gestion</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li class=\"active\">
                            <i class=\"fa fa-dashboard\"></i> Marquand Thibault
                        </li>
                    </ol>
                </div>
            </div>
            ";
        // line 79
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 80
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                <div class=\"alert alert-danger\">
                    <strong>Attention</strong>, Connectez-vous pour profité du site.
                </div>
            ";
        }
        // line 88
        echo "    ";
    }

    // line 58
    public function block_nav($context, array $blocks = array())
    {
        // line 59
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebFicheBundle:Default:nav"));
        echo "
        ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "
        ";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 102,  218 => 101,  213 => 81,  210 => 80,  203 => 59,  200 => 58,  196 => 88,  190 => 84,  187 => 83,  184 => 80,  182 => 79,  158 => 61,  155 => 58,  152 => 57,  147 => 103,  145 => 101,  131 => 89,  129 => 57,  107 => 38,  101 => 35,  97 => 34,  93 => 33,  86 => 29,  81 => 27,  74 => 23,  69 => 21,  64 => 19,  57 => 15,  53 => 14,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{{ app.request.get('_route')|getRef('title') }}</title>*/
/*     <meta name="description" content="{{ app.request.get('_route')|getRef('description') }}"/>*/
/*     <meta name="keywords" content="{{ app.request.get('_route')|getRef('keywords') }}"/>*/
/* */
/* */
/* */
/*     <script src="{{ asset('js/jserror.js') }}"></script>*/
/*     <script src="{{ asset('js/antispam.js') }}"></script>*/
/* */
/*     <script src="{{ asset('js/app.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all"/>*/
/* */
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('css/css/sb-admin.css') }}" rel="stylesheet">*/
/*     <!-- Morris Charts CSS -->*/
/*     <link href="css/plugins/morris.css{{ asset('css/css/plugins/morris.css') }}" rel="stylesheet">*/
/*     <!-- Custom Fonts -->*/
/*     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* */
/*     <script src="{{ asset('js/js/jquery.js') }}"></script>*/
/* */
/*     <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>*/
/*     <!-- Bootstrap Core JavaScript -->*/
/* */
/*     <!-- Morris Charts JavaScript -->*/
/*     <script src="{{ asset('js/js/plugins/morris/raphael.min.js') }}"></script>*/
/*     <script src="{{ asset('js/js/plugins/morris/morris.min.js') }}"></script>*/
/*     <script src="{{ asset('js/js/plugins/morris/morris-data.js') }}"></script>*/
/* */
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     <!--[if IE]>*/
/*     <style media="screen">*/
/*         .myhr{margin:-0.45em 0}*/
/*     </style>*/
/*     <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <meta http-equiv="imagetoolbar" content="no" />*/
/*     <![endif]-->*/
/* */
/*     <script type="application/x-javascript"> addEventListener("load", function () {*/
/*             setTimeout(hideURLbar, 0);*/
/*         }, false);*/
/*         function hideURLbar() {*/
/*             window.scrollTo(0, 1);*/
/*         } </script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* {% block body %}*/
/*         {% block nav %}*/
/*             {{ render(controller('PointWebFicheBundle:Default:nav')) }}*/
/*         {% endblock %}*/
/*         <h1 title="{{ app.request.get('_route')|getRef('h1Title') }}">{{ app.request.get('_route')|getRef('h1') }}</h1>*/
/* */
/*     <div id="page-wrapper">*/
/*         <div class="container-fluid">*/
/* */
/*             <!-- Page Heading -->*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 class="page-header">*/
/*                         Dashboard <small>Page d'administration et de gestion</small>*/
/*                     </h1>*/
/*                     <ol class="breadcrumb">*/
/*                         <li class="active">*/
/*                             <i class="fa fa-dashboard"></i> Marquand Thibault*/
/*                         </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*             {% if app.user %}*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*                 {% else %}*/
/*                 <div class="alert alert-danger">*/
/*                     <strong>Attention</strong>, Connectez-vous pour profité du site.*/
/*                 </div>*/
/*             {% endif %}*/
/*     {% endblock %}*/
/* */
/*     <div id="scrollToTop"><a href="#">&#9650;</a></div>*/
/* */
/* */
/* */
/*     </div>*/
/*     <!-- /.container-fluid -->*/
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
