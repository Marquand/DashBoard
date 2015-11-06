<?php

/* PointWebFicheBundle:Frais:index.html.twig */
class __TwigTemplate_b5a9d04e178b9cacdc5df13d19a992e225537d3ecb711eb7737d2d86a6eb9e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebFicheBundle::base.html.twig", "PointWebFicheBundle:Frais:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebFicheBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Frais list</h1>
    <div class=\"col-lg-12 table-responsive\">
    <table class=\"records_list table table-bordered table-hover table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre de nuit</th>
                <th>Nombre de repas </th>
                <th>Nombre de Kilomètre</th>
                <th>Prix de la nuité</th>
                <th>Prix du repas</th>
                <th>Prix de l'essence</th>
                <th>Total nuité</th>
                <th>Total repas</th>
                <th>Total Kilomètrage</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_frais_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "qtNuit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "qtRepas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "qtKm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixNuit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixRepas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixKm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalNuit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalRepas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalKm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "total", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_frais_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_frais_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    </div>
    <hr class=\"clear\">

        <ul>
        <li>
            <a type=\"btn\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_frais_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>


    ";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle:Frais:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 56,  127 => 48,  115 => 42,  109 => 39,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  60 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <h1>Frais list</h1>*/
/*     <div class="col-lg-12 table-responsive">*/
/*     <table class="records_list table table-bordered table-hover table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre de nuit</th>*/
/*                 <th>Nombre de repas </th>*/
/*                 <th>Nombre de Kilomètre</th>*/
/*                 <th>Prix de la nuité</th>*/
/*                 <th>Prix du repas</th>*/
/*                 <th>Prix de l'essence</th>*/
/*                 <th>Total nuité</th>*/
/*                 <th>Total repas</th>*/
/*                 <th>Total Kilomètrage</th>*/
/*                 <th>Total</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_frais_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.qtNuit }}</td>*/
/*                 <td>{{ entity.qtRepas }}</td>*/
/*                 <td>{{ entity.qtKm }}</td>*/
/*                 <td>{{ entity.prixNuit }}</td>*/
/*                 <td>{{ entity.prixRepas }}</td>*/
/*                 <td>{{ entity.prixKm }}</td>*/
/*                 <td>{{ entity.totalNuit }}</td>*/
/*                 <td>{{ entity.totalRepas }}</td>*/
/*                 <td>{{ entity.totalKm }}</td>*/
/*                 <td>{{ entity.total }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_frais_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_frais_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     </div>*/
/*     <hr class="clear">*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a type="btn" href="{{ path('admin_frais_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*     {% endblock %}*/
