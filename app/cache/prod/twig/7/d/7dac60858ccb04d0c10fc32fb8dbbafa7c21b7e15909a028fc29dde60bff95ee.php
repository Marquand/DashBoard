<?php

/* PointWebAppBundle::_header.html.twig */
class __TwigTemplate_3088a056676ae009d892a234f6804f75922423bc76105710d2dc1712e6d8cddf extends Twig_Template
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
        // line 1
        echo " <div class=\"logo\">
        <a href=\"#\"></a>
    </div>

 <nav>
     <ul>
         <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\" title=\"\"><i class=\"fa fa-home\"></i> Accueil</a></li>
         <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("point_web_prez");
        echo "\" title=\"\"><i class=\"fa fa-home\"></i> Présentation</a></li>
         <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("point_web_veille");
        echo "\" title=\"\"><i class=\"fa fa-home\"></i> Veille Technologique</a></li>
         <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\" title=\"\"><i class=\"fa fa-home\"></i> Actualité</a></li>
         <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("point_web_app_contact");
        echo "\" title=\"\"><i class=\"fa fa-envelope\"></i> Contact</a></li>
     </ul>
 </nav>
";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/*  <div class="logo">*/
/*         <a href="#"></a>*/
/*     </div>*/
/* */
/*  <nav>*/
/*      <ul>*/
/*          <li><a href="{{ path('point_web_app_homepage') }}" title=""><i class="fa fa-home"></i> Accueil</a></li>*/
/*          <li><a href="{{ path('point_web_prez') }}" title=""><i class="fa fa-home"></i> Présentation</a></li>*/
/*          <li><a href="{{ path('point_web_veille') }}" title=""><i class="fa fa-home"></i> Veille Technologique</a></li>*/
/*          <li><a href="{{ path('point_web_app_homepage') }}" title=""><i class="fa fa-home"></i> Actualité</a></li>*/
/*          <li><a href="{{ path('point_web_app_contact') }}" title=""><i class="fa fa-envelope"></i> Contact</a></li>*/
/*      </ul>*/
/*  </nav>*/
/* */
