<?php

/* PointWebFicheBundle:Frais:new.html.twig */
class __TwigTemplate_c23d40182c2d28828f29167745aa08e2bc6e62a53ebbd6e0eb048fabbb26ffb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebFicheBundle::base.html.twig", "PointWebFicheBundle:Frais:new.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Frais creation</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["price_essence"]) ? $context["price_essence"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["essence"]) {
            // line 6
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['essence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
<fieldset>
    <div class=\"col-lg-9 table-responsive\" data-target=\"1\">
        <table class=\"records_list table table-bordered table-hover table-striped table-cubage\">
            <thead>
            <tr>
                <div class=\"col-lg-12 \">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullname", array()), "html", null, true);
        echo "</div>
                <th></th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr >
                <td><h5>Nuité</h5></td>
                <td><div class=\"col-lg-6 \" > ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6 \"> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalNuit", array()), 'widget');
        echo " </div></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td><h5>Repas</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalRepas", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>

            <tbody>
            <tr>
                <td><h5>Kilomètrage</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qtKm", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixKm", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "fullname", array())));
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalKm", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td><h5>Total</h5></td>
                <td><div class=\"col-lg-6 \"></div></td>
                <td><div class=\"col-lg-6\"></div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "total", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "total", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>

            </table>
        </div>
</fieldset>
    <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "online", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "online", array()), 'errors');
        echo "
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "online", array()), 'widget');
        echo "
        </div>
    </div>
    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_frais");
        echo "\">
            Back to the list
        </a>
    </li>
        </ul>

    <script>
        var quantite = document.getElementById(\"qt1\").value;
        var prix = document.getElementById(\"p1\").value;
        var total = document.getElementById(\"t1\").value;
    </script>

";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle:Frais:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 68,  157 => 65,  151 => 62,  147 => 61,  142 => 59,  130 => 51,  118 => 43,  113 => 42,  108 => 41,  97 => 34,  92 => 33,  87 => 32,  77 => 26,  72 => 25,  67 => 24,  54 => 14,  45 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Frais creation</h1>*/
/*     {% for essence in price_essence %}*/
/* */
/*     {% endfor %}*/
/* {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/* <fieldset>*/
/*     <div class="col-lg-9 table-responsive" data-target="1">*/
/*         <table class="records_list table table-bordered table-hover table-striped table-cubage">*/
/*             <thead>*/
/*             <tr>*/
/*                 <div class="col-lg-12 ">{{ app.user.fullname }}</div>*/
/*                 <th></th>*/
/*                 <th>Quantité</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Total</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr >*/
/*                 <td><h5>Nuité</h5></td>*/
/*                 <td><div class="col-lg-6 " > {{ form_errors(form.qtNuit) }}{{ form_widget(form.qtNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6 "> {{ form_errors(form.prixNuit) }}{{ form_widget(form.prixNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6">{{ form_errors(form.totalNuit) }}{{ form_widget(form.totalNuit) }} </div></td>*/
/*             </tr>*/
/*             </tbody>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td><h5>Repas</h5></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.qtRepas) }}{{ form_widget(form.qtRepas) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixRepas) }}{{ form_widget(form.prixRepas) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.totalRepas) }}{{ form_widget(form.totalRepas) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/*             <tr>*/
/*                 <td><h5>Kilomètrage</h5></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.qtKm) }}{{ form_widget(form.qtKm) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixKm) }}{{ form_widget(form.prixKm,{"value": app.user.fullname }) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.totalKm) }}{{ form_widget(form.totalKm) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td><h5>Total</h5></td>*/
/*                 <td><div class="col-lg-6 "></div></td>*/
/*                 <td><div class="col-lg-6"></div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.total) }}{{ form_widget(form.total) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/* </fieldset>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.online) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.online) }}*/
/*             {{ form_widget(form.online) }}*/
/*         </div>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('admin_frais') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*         </ul>*/
/* */
/*     <script>*/
/*         var quantite = document.getElementById("qt1").value;*/
/*         var prix = document.getElementById("p1").value;*/
/*         var total = document.getElementById("t1").value;*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
