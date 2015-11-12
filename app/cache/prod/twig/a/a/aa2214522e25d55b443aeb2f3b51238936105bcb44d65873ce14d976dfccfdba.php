<?php

/* PointWebFicheBundle:Frais:show.html.twig */
class __TwigTemplate_f54ddf5fbcddadb80d70a38af76a526efbf5961901e3ac10c910f0e7f1a9e37b extends Twig_Template
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
    <fieldset>
        <div class=\"col-lg-9 table-responsive\">
            <table class=\"records_list table table-bordered table-hover table-striped\">
                <thead>
                <tr>
                    ";
        // line 9
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 10
            echo "                        <p class=\"paragraphe\">HELLO  </p>
                    ";
        } else {
            // line 12
            echo "                    <p class=\"paragraphe\">Pas connecté </p>
                    ";
        }
        // line 14
        echo "                    <th>id: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr><td><h5>Nuité</h5></td>
                    <td><div class=\"col-lg-6\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtNuit", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixNuit", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalNuit", array()), "html", null, true);
        echo "</div></td>
                </tr>
                </tbody>
                <tbody>
                <tr><td><h5>Repas</h5></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtRepas", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixRepas", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalRepas", array()), "html", null, true);
        echo "</div></td>
                </tr>
                </tbody>
                <tbody>
                <tr><td><h5>Kilomètrage</h5></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qtKm", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixKm", array()), "html", null, true);
        echo "</div></td>
                    <td><div class=\"col-lg-6\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalKm", array()), "html", null, true);
        echo "</div></td>
                </tr>
                </tbody>
                <tbody>
                <tr><td><h5>Total</h5></td>
                    <td><div class=\"col-lg-6\"></div></td>
                    <td><div class=\"col-lg-6\"></div></td>
                    <td><div class=\"col-lg-6\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total", array()), "html", null, true);
        echo "</div></td>
                </tr>
                </tbody>

            </table>
        </div>

    </fieldset>

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
        return array (  140 => 65,  133 => 61,  125 => 56,  111 => 45,  101 => 38,  97 => 37,  93 => 36,  85 => 31,  81 => 30,  77 => 29,  69 => 24,  65 => 23,  61 => 22,  49 => 14,  45 => 12,  41 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <h1>Frais</h1>*/
/*     <fieldset>*/
/*         <div class="col-lg-9 table-responsive">*/
/*             <table class="records_list table table-bordered table-hover table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     {% if app.user %}*/
/*                         <p class="paragraphe">HELLO  </p>*/
/*                     {% else %}*/
/*                     <p class="paragraphe">Pas connecté </p>*/
/*                     {% endif %}*/
/*                     <th>id: {{ entity.id }}</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Prix</th>*/
/*                     <th>Total</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr><td><h5>Nuité</h5></td>*/
/*                     <td><div class="col-lg-6">{{ entity.qtNuit}}</div></td>*/
/*                     <td><div class="col-lg-6">{{ entity.prixNuit }}</div></td>*/
/*                     <td><div class="col-lg-6">{{ entity.totalNuit }}</div></td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*                 <tbody>*/
/*                 <tr><td><h5>Repas</h5></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.qtRepas }}</div></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.prixRepas }}</div></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.totalRepas }}</div></td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*                 <tbody>*/
/*                 <tr><td><h5>Kilomètrage</h5></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.qtKm }}</div></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.prixKm }}</div></td>*/
/*                     <td><div class="col-lg-6"> {{ entity.totalKm }}</div></td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*                 <tbody>*/
/*                 <tr><td><h5>Total</h5></td>*/
/*                     <td><div class="col-lg-6"></div></td>*/
/*                     <td><div class="col-lg-6"></div></td>*/
/*                     <td><div class="col-lg-6">{{ entity.total }}</div></td>*/
/*                 </tr>*/
/*                 </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/* */
/*     </fieldset>*/
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
