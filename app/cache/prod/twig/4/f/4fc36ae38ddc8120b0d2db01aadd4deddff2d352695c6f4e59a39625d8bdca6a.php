<?php

/* PointWebProductBundle:Product:index.html.twig */
class __TwigTemplate_3edca977bb67d0264ae4394cb55f625588af77b0e5a689fd1732a86c9268a004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:index.html.twig", 1);
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
        echo "    <h1>Liste des produits</h1>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        <div class=\"col-xs-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                        <i class=\"fa fa-bars\" style=\"float: right\"></i>
                        </a>
                    </h3>
                </div>
                <div class=\"panel-body\">
                    ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) > 0)) {
                // line 19
                echo "                        <div id=\"collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse in\">
                            <table class=\"table table-striped table-hover sortable\" >
                                <thead>
                                <tr>
                                    <th style=\"width: 5px;\"></th>
                                    <th style=\"width: 60%\">Titre</th>
                                    <th style=\"width: 20%\">Prix</th>
                                    <th style=\"width: 20%\">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 31
                    echo "                                    <tr data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                        <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                                        <td>
                                            <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                    echo "</a>
                                        </td>
                                        <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                    echo " €</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                                </tbody>
                            </table>
                        </div>
                    ";
            }
            // line 49
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "childrens", array())) > 0)) {
                // line 50
                echo "                        <div id=\"catChilds-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"catChilds\"
                             data-url=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_subcat", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"></div>
                    ";
            }
            // line 53
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <ul class=\"col-xs-12\">
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter
                un produit</a>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\">Modifier les catégories</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  146 => 59,  142 => 57,  133 => 53,  128 => 51,  123 => 50,  120 => 49,  114 => 45,  103 => 40,  99 => 39,  93 => 36,  86 => 34,  79 => 31,  75 => 30,  60 => 19,  58 => 18,  49 => 12,  45 => 11,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Liste des produits</h1>*/
/* */
/*     {% for category in categories %}*/
/*         <div class="col-xs-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ category.id }}">*/
/*                         {{ category.title }}*/
/*                         <i class="fa fa-bars" style="float: right"></i>*/
/*                         </a>*/
/*                     </h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% if category.products|length > 0 %}*/
/*                         <div id="collapse-{{ category.id }}" class="panel-collapse collapse in">*/
/*                             <table class="table table-striped table-hover sortable" >*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th style="width: 5px;"></th>*/
/*                                     <th style="width: 60%">Titre</th>*/
/*                                     <th style="width: 20%">Prix</th>*/
/*                                     <th style="width: 20%">Actions</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for entity in category.products %}*/
/*                                     <tr data-url="{{ path('admin_product_sort', {'id':entity.id}) }}">*/
/*                                         <td class="sorter"><i class="mdi-action-swap-vert"></i></td>*/
/*                                         <td>*/
/*                                             <a href="{{ path('admin_product_show', { 'id': entity.id }) }}">{{ entity.title }}</a>*/
/*                                         </td>*/
/*                                         <td>{{ entity.price }} €</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('admin_product_show', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>*/
/*                                                 <a href="{{ path('admin_product_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if category.childrens|length > 0 %}*/
/*                         <div id="catChilds-{{ category.id }}" class="catChilds"*/
/*                              data-url="{{ path('admin_product_subcat', {'id':category.id}) }}"></div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     <ul class="col-xs-12">*/
/*         <li>*/
/*             <a href="{{ path('admin_product_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter*/
/*                 un produit</a>*/
/*             <a href="{{ path('admin_category') }}" class="btn btn-primary">Modifier les catégories</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
