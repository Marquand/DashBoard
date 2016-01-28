<?php

/* PointWebProductBundle:Category:show.html.twig */
class __TwigTemplate_5bb11340d99b196b595ee5966f355664a5065b6e94c92c0613c21485ee737abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Category:show.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Catégorie</h1>


    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 16
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Online</div>
        <div class=\"panel-body\">
            ";
        // line 28
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array()) == 0)) {
            echo "<td> Non </td>";
        } else {
            echo "<td> Oui </td>";
        }
        // line 29
        echo "        </div>
    </div>

            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
                liste</a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
                Modifier</a>
    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  82 => 34,  77 => 32,  72 => 29,  66 => 28,  57 => 22,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Catégorie</h1>*/
/* */
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Titre</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.title }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Description</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.description|raw }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Position</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.position }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Online</div>*/
/*         <div class="panel-body">*/
/*             {% if entity.online == 0 %}<td> Non </td>{% else %}<td> Oui </td>{% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*             <a href="{{ path('admin_category') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la*/
/*                 liste</a>*/
/*             <a href="{{ path('admin_category_edit', { 'id': entity.id }) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>*/
/*                 Modifier</a>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
/* */
/* */
