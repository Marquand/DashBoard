<?php

/* PointWebAppBundle::_footer.html.twig */
class __TwigTemplate_7125ccef9e973cd79bccd5d10b09552dda42981235dbca9b1cef4ae1d7305b50 extends Twig_Template
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
        echo "<div class=\"arrow animated bounce\"></div>
</div>
<div class=\"footer\">
<address id=\"coordonnees\">
   <strong>Portfolio Marquand Thibault</strong><br />
   80 quai Joseph Gillet Lyon 69004<br />
   06 74 32 85 57<br />
   <a href=\"#\" onclick=\"location.href=dolink(this.title); return false;\" title=\"contact..åt..nomdedomaine.com\">Email</a> - <a href=\"#\" title=\"\">Plan d'accès</a>
</address>
&copy; ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y"), "html", null, true);
        echo " Mediashare.fr | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("point_web_app_legal");
        echo "\" title=\"Mentions légales\">Mentions légales</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("point_web_app_sitemap");
        echo "\" title=\"Plan du site\">Plan du site </a>


</div>

";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <div class="arrow animated bounce"></div>*/
/* </div>*/
/* <div class="footer">*/
/* <address id="coordonnees">*/
/*    <strong>Portfolio Marquand Thibault</strong><br />*/
/*    80 quai Joseph Gillet Lyon 69004<br />*/
/*    06 74 32 85 57<br />*/
/*    <a href="#" onclick="location.href=dolink(this.title); return false;" title="contact..åt..nomdedomaine.com">Email</a> - <a href="#" title="">Plan d'accès</a>*/
/* </address>*/
/* &copy; {{ date|date('Y') }} Mediashare.fr | <a href="{{ path('point_web_app_legal') }}" title="Mentions légales">Mentions légales</a> | <a href="{{ path('point_web_app_sitemap') }}" title="Plan du site">Plan du site </a>*/
/* */
/* */
/* </div>*/
/* */
/* */
