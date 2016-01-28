<?php

/* PointWebProductBundle:Category:new.html.twig */
class __TwigTemplate_318f7e44323b6f2ee9656ed0308134249bd52c3bb9e71bfb92525d5fc6e48d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Category:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_d5910a6ff7a1f01444c22e22654bb9fdad33b8bd70c07131f8fce6876891ff0a' => array($this, 'block___internal_d5910a6ff7a1f01444c22e22654bb9fdad33b8bd70c07131f8fce6876891ff0a'),
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
        echo "    <h1>Création d'une Catégorie</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
<fieldset>
    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-lg-2 control-label\">
            Déplacez vos fichiers ou cliquez dans la zone :
        </label>
        <div id=\"dropZoneFile\" class=\"col-lg-10\">
            <iframe src=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
            </iframe>
        </div>
    </div>
    <ul class=\"files\"
        data-prototype=\"";
        // line 54
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d5910a6ff7a1f01444c22e22654bb9fdad33b8bd70c07131f8fce6876891ff0a", $context, $blocks));
        echo "\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 56
            echo "            <li class=\"formFile\">
                <div class=\"form-group\">
                    ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                    </div>
                </div>
                ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\">
                        Fichier :
                    </label>
                    <div class=\"col-lg-10\">
                        <img class=\"formFilePicture\"
                             src=\"";
            // line 85
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "\"/>
                    </div>
                </div>

            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </ul>


</fieldset>
    ";
        // line 95
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 96
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
    }

    // line 54
    public function block___internal_d5910a6ff7a1f01444c22e22654bb9fdad33b8bd70c07131f8fce6876891ff0a($context, array $blocks = array())
    {
        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebProductBundle:Category:new.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 54,  232 => 98,  226 => 96,  224 => 95,  218 => 91,  204 => 85,  194 => 78,  188 => 75,  184 => 74,  179 => 72,  172 => 68,  168 => 67,  163 => 65,  156 => 61,  152 => 60,  147 => 58,  143 => 56,  139 => 55,  135 => 54,  127 => 49,  116 => 41,  112 => 40,  107 => 38,  100 => 34,  96 => 33,  91 => 31,  84 => 27,  80 => 26,  75 => 24,  67 => 19,  63 => 18,  58 => 16,  51 => 12,  47 => 11,  42 => 9,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Création d'une Catégorie</h1>*/
/* */
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/* <fieldset>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.title) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.title) }}*/
/*             {{ form_widget(form.title) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.description) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.description) }}*/
/*             {{ form_widget(form.description) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.position) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.position) }}*/
/*             {{ form_widget(form.position) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.online) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.online) }}*/
/*             {{ form_widget(form.online) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.parent) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.parent) }}*/
/*             {{ form_widget(form.parent) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="col-lg-2 control-label">*/
/*             Déplacez vos fichiers ou cliquez dans la zone :*/
/*         </label>*/
/*         <div id="dropZoneFile" class="col-lg-10">*/
/*             <iframe src="{{ path('point_web_admin_update') }}">*/
/*             </iframe>*/
/*         </div>*/
/*     </div>*/
/*     <ul class="files"*/
/*         data-prototype="{% filter escape %}{% include 'PointWebAdminBundle:Form:prototype.html.twig' with {'form': form.pictures.vars.prototype} %}{% endfilter %}">*/
/*         {% for picture in form.pictures %}*/
/*             <li class="formFile">*/
/*                 <div class="form-group">*/
/*                     {{ form_label(picture.name) }}*/
/*                     <div class="col-lg-10">*/
/*                         {{ form_errors(picture.name) }}*/
/*                         {{ form_widget(picture.name) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(picture.description) }}*/
/*                     <div class="col-lg-10">*/
/*                         {{ form_errors(picture.description) }}*/
/*                         {{ form_widget(picture.description) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(picture.position) }}*/
/*                     <div class="col-lg-10">*/
/*                         {{ form_errors(picture.position) }}*/
/*                         {{ form_widget(picture.position) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_widget(picture.tmpPath) }}*/
/*                 <div class="form-group">*/
/*                     <label class="col-lg-2 control-label">*/
/*                         Fichier :*/
/*                     </label>*/
/*                     <div class="col-lg-10">*/
/*                         <img class="formFilePicture"*/
/*                              src="{% if picture.vars.value %}{{ asset(picture.vars.value.getWebPath(base)) }}{% endif %}"/>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* */
/* </fieldset>*/
/*     {% do form.pictures.setRendered %}*/
/*     {{ form_end(form) }}*/
/* */
/*     <a href="{{ path('admin_category') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/* {% endblock %}*/
/* */
