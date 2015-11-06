<?php

/* PointWebFicheBundle:Frais:show.html.twig */
class __TwigTemplate_72bc0d0176ed7464e6523a6615c37e1932c385352ee5be095e5ade8d9c1ebd74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebFicheBundle::base.html.twig", "PointWebFicheBundle:Frais:show.html.twig", 1);
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
        echo "    <h1>Frais</h1>
<div class=\"col-lg-5 table-responsive\">
    <table class=\"records_list table table-bordered table-hover table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de nuit</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtNuit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de repas </th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtRepas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de Kilomètre</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix de la nuité</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixNuit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix du repas</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixRepas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix de l'essence</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total nuité</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalNuit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total repas</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalRepas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total Kilomètrage</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_frais");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_frais_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle:Frais:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  127 => 61,  119 => 56,  109 => 49,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  74 => 29,  67 => 25,  60 => 21,  53 => 17,  46 => 13,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <h1>Frais</h1>*/
/* <div class="col-lg-5 table-responsive">*/
/*     <table class="records_list table table-bordered table-hover table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre de nuit</th>*/
/*                 <td>{{ entity.qtNuit }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre de repas </th>*/
/*                 <td>{{ entity.qtRepas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre de Kilomètre</th>*/
/*                 <td>{{ entity.qtKm }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix de la nuité</th>*/
/*                 <td>{{ entity.prixNuit }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix du repas</th>*/
/*                 <td>{{ entity.prixRepas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix de l'essence</th>*/
/*                 <td>{{ entity.prixKm }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total nuité</th>*/
/*                 <td>{{ entity.totalNuit }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total repas</th>*/
/*                 <td>{{ entity.totalRepas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total Kilomètrage</th>*/
/*                 <td>{{ entity.totalKm }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total</th>*/
/*                 <td>{{ entity.total }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('admin_frais') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('admin_frais_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
