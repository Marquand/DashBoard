<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_387bf817af113d6f5301ab4faf886fa35662bca104447d3206e620695f653d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
    <!--<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\"/>-->
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.anti-ie7.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jserror.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/antispam.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/imagelightbox.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fonctionlightbox.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/respond.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookiesdirective.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cookies.js"), "html", null, true);
        echo "\"></script>-->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

    <!--<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
    <!--<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
    <!--<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
    <!--<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
    <!--<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/imagelightbox.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
    <!--<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\" media=\"all\"/>-->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" media=\"all\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <!--[if IE]>
            <style media=\"screen\">
               .myhr{margin:-0.45em 0}
            </style>
            <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <meta http-equiv=\"imagetoolbar\" content=\"no\" />
        <![endif]-->
    </head>
    <body>
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        <footer id=\"footer\">
            ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "        </footer>
        <div id=\"scrollToTop\"><a href=\"#\">&#9650;</a></div>
        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"wrapper\">
        <header id=\"page-header\">
            ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "            <h1 title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "h1Title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "h1"), "html", null, true);
        echo "</h1>
        </header>
        <div id=\"slider\">
            ";
        // line 49
        $this->displayBlock('slider', $context, $blocks);
        // line 52
        echo "        </div>
        <div id=\"menu\">
            ";
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 57
        echo "        </div>
        <section id=\"content\">
            <noscript>
                <dl id=\"jserror\">
                    <dt>Attention</dt>
                    <dd>Si vous souhaitez utiliser pleinement toutes les capacités de ce site Internet vous devez activer javascript dans votre \t\t
                    navigateur</dd>
                </dl>
            </noscript>
            ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "        </section>
        ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 44)->display($context);
        // line 45
        echo "            ";
    }

    // line 49
    public function block_slider($context, array $blocks = array())
    {
        // line 50
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_slider.html.twig", "PointWebAppBundle::base.html.twig", 50)->display($context);
        // line 51
        echo "            ";
    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        // line 55
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
            ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "
            ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "               ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:footer"));
        echo "
            ";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 78,  249 => 77,  242 => 73,  239 => 72,  234 => 67,  231 => 66,  224 => 55,  221 => 54,  217 => 51,  214 => 50,  211 => 49,  207 => 45,  204 => 44,  201 => 43,  196 => 69,  194 => 66,  183 => 57,  181 => 54,  177 => 52,  175 => 49,  166 => 46,  164 => 43,  160 => 41,  157 => 40,  152 => 79,  150 => 77,  146 => 75,  144 => 72,  141 => 71,  139 => 40,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <title>{{ app.request.get('_route')|getRef('title') }}</title>*/
/*         <meta name="description" content="{{ app.request.get('_route')|getRef('description') }}"/>*/
/*         <meta name="keywords" content="{{ app.request.get('_route')|getRef('keywords') }}"/>*/
/*     <!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>-->*/
/*         <script src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.anti-ie7.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>*/
/*         <script src="{{ asset('js/jserror.js') }}"></script>*/
/*         <script src="{{ asset('js/antispam.js') }}"></script>*/
/*     <!--<script src="{{ asset('js/owl.carousel.min.js') }}"></script>-->*/
/*     <!--<script src="{{ asset('js/imagelightbox.js') }}"></script>-->*/
/*     <!--<script src="{{ asset('js/fonctionlightbox.js') }}"></script>-->*/
/*     <!--<script src="{{ asset('js/respond.js') }}"></script>-->*/
/*     <!--<script src="{{ asset('js/jquery.cookiesdirective.js') }}"></script>-->*/
/*     <!--<script src="{{ asset('js/cookies.js') }}"></script>-->*/
/*         <script src="{{ asset('js/app.js') }}"></script>*/
/* */
/*     <!--<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" media="all"/>-->*/
/*     <!--<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" media="all"/>-->*/
/*     <!--<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" media="all"/>-->*/
/*     <!--<link rel="stylesheet" href="{{ asset('font-awesome-4.3.0/css/font-awesome.min.css') }}" media="all"/>-->*/
/*     <!--<link rel="stylesheet" href="{{ asset('css/imagelightbox.css') }}" media="all"/>-->*/
/*     <!--<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" media="all"/>-->*/
/*         <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all"/>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         <!--[if IE]>*/
/*             <style media="screen">*/
/*                .myhr{margin:-0.45em 0}*/
/*             </style>*/
/*             <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*             <meta http-equiv="imagetoolbar" content="no" />*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*     {% block body %}*/
/*     <div class="wrapper">*/
/*         <header id="page-header">*/
/*             {% block header %}*/
/*                 {% include 'PointWebAppBundle::_header.html.twig' %}*/
/*             {% endblock %}*/
/*             <h1 title="{{ app.request.get('_route')|getRef('h1Title') }}">{{ app.request.get('_route')|getRef('h1') }}</h1>*/
/*         </header>*/
/*         <div id="slider">*/
/*             {% block slider %}*/
/*                 {% include 'PointWebAppBundle::_slider.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div id="menu">*/
/*             {% block menu %}*/
/*                 {{ render(controller('PointWebAppBundle:Default:menu')) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <section id="content">*/
/*             <noscript>*/
/*                 <dl id="jserror">*/
/*                     <dt>Attention</dt>*/
/*                     <dd>Si vous souhaitez utiliser pleinement toutes les capacités de ce site Internet vous devez activer javascript dans votre 		*/
/*                     navigateur</dd>*/
/*                 </dl>*/
/*             </noscript>*/
/*             {% block content %}*/
/* */
/*             {% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/*         <footer id="footer">*/
/*             {% block footer %}*/
/*                {{ render(controller('PointWebAppBundle:Default:footer')) }}*/
/*             {% endblock %}*/
/*         </footer>*/
/*         <div id="scrollToTop"><a href="#">&#9650;</a></div>*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
