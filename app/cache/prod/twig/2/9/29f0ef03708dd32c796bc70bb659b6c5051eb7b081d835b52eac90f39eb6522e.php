<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_86974f6574c9ec47e85acb5471e99f43b458ba83de69740686eb6c1fe3e96aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"container\">
        Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.
    </section>
    <section class=\"container\">
        Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.
    </section>
    <section class=\"container\">
        Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.
    </section>
";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <section class="container">*/
/*         Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.*/
/*     </section>*/
/*     <section class="container">*/
/*         Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.*/
/*     </section>*/
/*     <section class="container">*/
/*         Just a demo site to play with headers which might look a bit like dribble, then I got distracted and started going my own way- this template is not currently built for responsive design.*/
/*     </section>*/
/* {% endblock %}*/
