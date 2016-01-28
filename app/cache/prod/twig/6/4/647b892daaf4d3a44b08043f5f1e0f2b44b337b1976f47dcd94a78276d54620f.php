<?php

/* PointWebAdminBundle:Form:prototype.html.twig */
class __TwigTemplate_d4846fe9cee30c57e0ee35e8b2d6aba843c0874687aff781f9da4ad86cc3e370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tmpPath", array()), 'widget');
        echo "
<div class=\"form-group\">
    <label class=\"col-lg-2 control-label\">
        Fichier :
    </label>

    <div class=\"col-lg-10\">
        <img class=\"formFilePicture\"
             src=\"";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
        }
        echo "\"/>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Form:prototype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  69 => 22,  63 => 19,  59 => 18,  54 => 16,  47 => 12,  43 => 11,  38 => 9,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*     {{ form_label(form.name) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.name) }}*/
/*         {{ form_widget(form.name) }}*/
/*     </div>*/
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_label(form.description) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.description) }}*/
/*         {{ form_widget(form.description) }}*/
/*     </div>*/
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_label(form.position) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.position) }}*/
/*         {{ form_widget(form.position) }}*/
/*     </div>*/
/* </div>*/
/* {{ form_widget(form.tmpPath) }}*/
/* <div class="form-group">*/
/*     <label class="col-lg-2 control-label">*/
/*         Fichier :*/
/*     </label>*/
/* */
/*     <div class="col-lg-10">*/
/*         <img class="formFilePicture"*/
/*              src="{% if form.vars.value %}{{ asset(form.vars.value.getWebPath(base)) }}{% endif %}"/>*/
/*     </div>*/
/* </div>*/
/* */
