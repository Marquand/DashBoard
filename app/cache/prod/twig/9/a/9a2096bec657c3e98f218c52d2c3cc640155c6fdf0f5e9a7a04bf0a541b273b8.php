<?php

/* PointWebFicheBundle:Frais:new.html.twig */
class __TwigTemplate_1240b99135136ea69fa248b3e317bb029dc7757fb422352cef332e4f69418fb1 extends Twig_Template
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
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
<fieldset>
    <div class=\"col-lg-9 table-responsive table-cubage\" data-target=\"1\">
        <table class=\"records_list table table-bordered table-hover table-striped\">
            <thead>
            <tr>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr><td><h5>Nuité</h5></td>
                <td><div class=\"col-lg-6\" > ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalNuit", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr><td><h5>Repas</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalRepas", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr><td><h5>Kilomètrage</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtKm", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixKm", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalKm", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr><td><h5>Total</h5></td>
                <td><div class=\"col-lg-6\"></div></td>
                <td><div class=\"col-lg-6\"></div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>

            </table>
        </div>

</fieldset>
    ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("admin_frais");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>


    <script>
        \$(\".table-cubage\").each(function (i, val) {
            \$(val).change(function (e) {
                e.preventDefault();
                var value_multiply = \$(val).val() * \$('.cubage-multiply-volume').val();
                \$('.container').html(value_multiply);
                var cat = target.split(\"-\");
                var total = 0;
                \$(\".resultat\").each(function (j, value) {
                    if (\$(value).html()) {
                        total = total + parseFloat(\$(value).html());
                    }
                });
            });
        });
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
        return array (  132 => 54,  126 => 51,  114 => 43,  103 => 36,  98 => 35,  93 => 34,  84 => 29,  79 => 28,  74 => 27,  65 => 22,  60 => 21,  55 => 20,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Frais creation</h1>*/
/* */
/* {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/* <fieldset>*/
/*     <div class="col-lg-9 table-responsive table-cubage" data-target="1">*/
/*         <table class="records_list table table-bordered table-hover table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>{{ app.user.fullname }}</th>*/
/*                 <th>Quantité</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Total</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr><td><h5>Nuité</h5></td>*/
/*                 <td><div class="col-lg-6" > {{ form_errors(form.qtNuit) }}{{ form_widget(form.qtNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixNuit) }}{{ form_widget(form.prixNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.totalNuit) }}{{ form_widget(form.totalNuit) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/*             <tbody>*/
/*             <tr><td><h5>Repas</h5></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.qtRepas) }}{{ form_widget(form.qtRepas) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixRepas) }}{{ form_widget(form.prixRepas) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.totalRepas) }}{{ form_widget(form.totalRepas) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/*             <tbody>*/
/*             <tr><td><h5>Kilomètrage</h5></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.qtKm) }}{{ form_widget(form.qtKm) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixKm) }}{{ form_widget(form.prixKm) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.totalKm) }}{{ form_widget(form.totalKm) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/*             <tbody>*/
/*             <tr><td><h5>Total</h5></td>*/
/*                 <td><div class="col-lg-6"></div></td>*/
/*                 <td><div class="col-lg-6"></div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.total) }}{{ form_widget(form.total) }}</div></td>*/
/*             </tr>*/
/*             </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/* */
/* </fieldset>*/
/*     {{ form_end(form) }}*/
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('admin_frais') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* */
/* */
/*     <script>*/
/*         $(".table-cubage").each(function (i, val) {*/
/*             $(val).change(function (e) {*/
/*                 e.preventDefault();*/
/*                 var value_multiply = $(val).val() * $('.cubage-multiply-volume').val();*/
/*                 $('.container').html(value_multiply);*/
/*                 var cat = target.split("-");*/
/*                 var total = 0;*/
/*                 $(".resultat").each(function (j, value) {*/
/*                     if ($(value).html()) {*/
/*                         total = total + parseFloat($(value).html());*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
