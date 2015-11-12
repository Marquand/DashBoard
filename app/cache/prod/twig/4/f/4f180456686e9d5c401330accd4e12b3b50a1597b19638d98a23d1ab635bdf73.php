<?php

/* PointWebFicheBundle:Frais:new.html.twig */
class __TwigTemplate_2c014a229d7359c7c40f868b99c416454c56964cdf9a4e46aa602b0b74e4daac extends Twig_Template
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
            <tr >
                <td><h5>Nuité</h5></td>
                <td><div class=\"col-lg-6 quantite\" > ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6 prix\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixNuit", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixNuit", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> <div class=\"container\"></div> </div></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td><h5>Repas</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixRepas", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalRepas", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalRepas", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td><h5>Kilomètrage</h5></td>
                <td><div class=\"col-lg-6\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtKm", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixKm", array()), 'widget');
        echo "</div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalKm", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalKm", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td><h5>Total</h5></td>
                <td><div class=\"col-lg-6 \"></div></td>
                <td><div class=\"col-lg-6\"></div></td>
                <td><div class=\"col-lg-6\"> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'widget');
        echo "</div></td>
            </tr>
            </tbody>

            </table>
        </div>

</fieldset>
    ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 58
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
                var test = \$('.quantite').val()*\$('.prix').val();
                \$('.container').html(test);
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
        return array (  132 => 58,  126 => 55,  114 => 47,  102 => 39,  97 => 38,  92 => 37,  82 => 31,  77 => 30,  72 => 29,  61 => 22,  56 => 21,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <tr >*/
/*                 <td><h5>Nuité</h5></td>*/
/*                 <td><div class="col-lg-6 quantite" > {{ form_errors(form.qtNuit) }}{{ form_widget(form.qtNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6 prix"> {{ form_errors(form.prixNuit) }}{{ form_widget(form.prixNuit) }}</div></td>*/
/*                 <td><div class="col-lg-6"> <div class="container"></div> </div></td>*/
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
/*             <tbody>*/
/*             <tr>*/
/*                 <td><h5>Kilomètrage</h5></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.qtKm) }}{{ form_widget(form.qtKm) }}</div></td>*/
/*                 <td><div class="col-lg-6"> {{ form_errors(form.prixKm) }}{{ form_widget(form.prixKm) }}</div></td>*/
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
/*                 var test = $('.quantite').val()*$('.prix').val();*/
/*                 $('.container').html(test);*/
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
