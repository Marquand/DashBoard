<?php

/* PointWebProductBundle:Category:index.html.twig */
class __TwigTemplate_236ca12be4bf967bbbb8a0775e7a965b41db60d9ca8a4cd02309e065f8b1a4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Category:index.html.twig", 1);
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
        echo "    <h1>Liste des Catégories</h1>
    <div class=\"list-group\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "            <div class=\"list-group-item\">
                ";
            // line 8
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 9
                echo "                    <div class=\"row-picture\">
                        <img class=\"circle\"
                             src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method"), "html", null, true);
                echo "\"
                             alt=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
                    </div>
                ";
            } else {
                // line 15
                echo "                    <div class=\"row-action-primary\">
                        <i class=\"mdi-file-folder\"></i>
                    </div>
                ";
            }
            // line 19
            echo "                <div class=\"row-content\">
                    <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                        ";
            // line 25
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 26
                echo "                            <span href=\"#\" class=\"menuParent\"
                                  data-url=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_submenu", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                                  data-id=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                            </span>
                        ";
            }
            // line 31
            echo "                    </h4>

                    <p class=\"list-group-item-text\">";
            // line 33
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
                </div>

                <div id=\"menuChilds-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>

    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\" class=\"btn btn-primary\">Modifier les produits</a>
";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  119 => 41,  115 => 39,  106 => 36,  100 => 33,  96 => 31,  90 => 28,  86 => 27,  83 => 26,  81 => 25,  76 => 23,  71 => 21,  67 => 20,  64 => 19,  58 => 15,  52 => 12,  48 => 11,  44 => 9,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Liste des Catégories</h1>*/
/*     <div class="list-group">*/
/*         {% for entity in entities %}*/
/*             <div class="list-group-item">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <div class="row-picture">*/
/*                         <img class="circle"*/
/*                              src="{{ entity.pictures.0.getWebPath(base) }}"*/
/*                              alt="{{ entity.pictures.0.name }}">*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="row-action-primary">*/
/*                         <i class="mdi-file-folder"></i>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="row-content">*/
/*                     <h4 class="list-group-item-heading menuParentHead">{{ entity.title }}*/
/*                         <a href="{{ path('admin_category_show', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-eye"></i> Voir</a>*/
/*                         <a href="{{ path('admin_category_edit', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-pencil"></i> Modifier</a>*/
/*                         {% if entity.childrens|length > 0 %}*/
/*                             <span href="#" class="menuParent"*/
/*                                   data-url="{{ path('admin_category_submenu', {'id':entity.id}) }}"*/
/*                                   data-id="{{ entity.id }}">*/
/*                             </span>*/
/*                         {% endif %}*/
/*                     </h4>*/
/* */
/*                     <p class="list-group-item-text">{{ entity.description|raw }}</p>*/
/*                 </div>*/
/* */
/*                 <div id="menuChilds-{{ entity.id }}" class="menuChilds list-group"></div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <a href="{{ path('admin_category_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     <a href="{{ path('admin_product') }}" class="btn btn-primary">Modifier les produits</a>*/
/* {% endblock %}*/
/* */
