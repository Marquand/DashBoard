<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f4d5026397e01de9d77ae3df2cd22d49f83f6cac1dd062d60ba5efe4edfb4686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebUserBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div>
        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <fieldset>
                <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</legend>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                           required=\"required\"/>

                </div>
                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\"/>
                </div>
                <div class=\"checkbox\">
                    <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                </div>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary pull-right\"
                       value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </fieldset>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  78 => 27,  71 => 23,  63 => 18,  59 => 17,  53 => 14,  49 => 13,  44 => 11,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "PointWebUserBundle::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <fieldset>*/
/*                 <legend>{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</legend>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input type="text" id="username" name="_username" class="form-control" value="{{ last_username }}"*/
/*                            required="required"/>*/
/* */
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input type="password" id="password" name="_password" class="form-control" required="required"/>*/
/*                 </div>*/
/*                 <div class="checkbox">*/
/*                     <label><input type="checkbox" id="remember_me" name="_remember_me" value="on"/>{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*                 </div>*/
/* */
/*                 <input type="submit" id="_submit" name="_submit" class="btn btn-primary pull-right"*/
/*                        value="{{ 'security.login.submit'|trans }}"/>*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
