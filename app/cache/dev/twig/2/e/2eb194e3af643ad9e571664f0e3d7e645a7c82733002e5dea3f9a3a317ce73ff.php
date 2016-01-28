<?php

/* PointWebAdminBundle::_menu_admin.html.twig */
class __TwigTemplate_c5aecf427c9b3bb89530bc8d7979de5e1647ae5d60b1c28ad153743c2a500de9 extends Twig_Template
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
        // line 2
        echo "    ";
        // line 4
        echo "<li class=\"dropdown ";
        if (((is_string($__internal_a4b9339a92c4d4166417d44a75d09285454602e3b4d8b86139fb6b70ccbe69f5 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eef00d8155ef80fa70247155607a97824e4aa190ce8ee585419ce09abdb7c231 = "admin_product") && ('' === $__internal_eef00d8155ef80fa70247155607a97824e4aa190ce8ee585419ce09abdb7c231 || 0 === strpos($__internal_a4b9339a92c4d4166417d44a75d09285454602e3b4d8b86139fb6b70ccbe69f5, $__internal_eef00d8155ef80fa70247155607a97824e4aa190ce8ee585419ce09abdb7c231))) || (is_string($__internal_193c67e9b5afc124ffd8b713caf066928f5de6509b58fdbe338418bd32ba16ab = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e6a0e4bb5ae14705b849ab4bec628ceeb541ade160de2e5b568d549992b4d073 = "admin_category") && ('' === $__internal_e6a0e4bb5ae14705b849ab4bec628ceeb541ade160de2e5b568d549992b4d073 || 0 === strpos($__internal_193c67e9b5afc124ffd8b713caf066928f5de6509b58fdbe338418bd32ba16ab, $__internal_e6a0e4bb5ae14705b849ab4bec628ceeb541ade160de2e5b568d549992b4d073))))) {
            echo "active";
        }
        echo "\">
    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 5
        echo "Produits";
        echo " <b
                class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
        <li ";
        // line 8
        if ((is_string($__internal_961dc10cf0232dc76f6aadd32483fce1acae93609272c610124cecc4c43e92fc = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b285357bb57cbf20869587ff66de503debec3b323e29eb5e02ceb1645813f21e = "admin_product") && ('' === $__internal_b285357bb57cbf20869587ff66de503debec3b323e29eb5e02ceb1645813f21e || 0 === strpos($__internal_961dc10cf0232dc76f6aadd32483fce1acae93609272c610124cecc4c43e92fc, $__internal_b285357bb57cbf20869587ff66de503debec3b323e29eb5e02ceb1645813f21e)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\">";
        echo "Produits";
        echo "</a></li>
        <li ";
        // line 10
        if ((is_string($__internal_c4d661c5bcb31bd22e33432379087a8c2682698ec29483a69d696d8e209ca23a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_95632991c7c53a0e0c569514a139b93ea1acebfaf5cc32419bfb28ea41b12e7d = "admin_category") && ('' === $__internal_95632991c7c53a0e0c569514a139b93ea1acebfaf5cc32419bfb28ea41b12e7d || 0 === strpos($__internal_c4d661c5bcb31bd22e33432379087a8c2682698ec29483a69d696d8e209ca23a, $__internal_95632991c7c53a0e0c569514a139b93ea1acebfaf5cc32419bfb28ea41b12e7d)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">";
        echo "Catégories";
        echo "</a></li>
    </ul>
</li>

<li class=\"dropdown ";
        // line 15
        if (((is_string($__internal_e32e1afa31f8e2afcddeec30d575b81d603106bc07d89aafa6e3a8f42dc69e5b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b80f4a5456850d5e931fd3abd068fb2d8ebe1d30c6021ea2812aaddb3e64aae1 = "admin_referencing") && ('' === $__internal_b80f4a5456850d5e931fd3abd068fb2d8ebe1d30c6021ea2812aaddb3e64aae1 || 0 === strpos($__internal_e32e1afa31f8e2afcddeec30d575b81d603106bc07d89aafa6e3a8f42dc69e5b, $__internal_b80f4a5456850d5e931fd3abd068fb2d8ebe1d30c6021ea2812aaddb3e64aae1))) || (is_string($__internal_1c7610ded41604231bce0ded864985ada025635eb4f0717f651bc489d80f8757 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ae30bbd9b2c48c69e8102299af8fcea60f25e46ec005370fe1073db302879502 = "admin_keywords") && ('' === $__internal_ae30bbd9b2c48c69e8102299af8fcea60f25e46ec005370fe1073db302879502 || 0 === strpos($__internal_1c7610ded41604231bce0ded864985ada025635eb4f0717f651bc489d80f8757, $__internal_ae30bbd9b2c48c69e8102299af8fcea60f25e46ec005370fe1073db302879502))))) {
            echo "active";
        }
        echo "\">
    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 16
        echo "Referencement";
        echo " <b
                class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
        <li ";
        // line 19
        if ((is_string($__internal_cdcd774cae2ff50741833ed05b517649d45438bbdeb6e4136a3b6b5193e011f5 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c7976bab80a03b55124a524fe529b3f209eeb23ea44513658017921ede566948 = "admin_referencing") && ('' === $__internal_c7976bab80a03b55124a524fe529b3f209eeb23ea44513658017921ede566948 || 0 === strpos($__internal_cdcd774cae2ff50741833ed05b517649d45438bbdeb6e4136a3b6b5193e011f5, $__internal_c7976bab80a03b55124a524fe529b3f209eeb23ea44513658017921ede566948)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_referencing");
        echo "\">";
        echo "Referencement des pages";
        echo "</a></li>
        <li ";
        // line 21
        if ((is_string($__internal_051a0055de8eb8a2e15a255198dc5977c44b97fd7ad54fe136512d69f8f685c2 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_05bf2b5c0fcc76adc0f89d30dc0c981259d00136b341b28d8c6c6f97e34d1cdc = "admin_keywords") && ('' === $__internal_05bf2b5c0fcc76adc0f89d30dc0c981259d00136b341b28d8c6c6f97e34d1cdc || 0 === strpos($__internal_051a0055de8eb8a2e15a255198dc5977c44b97fd7ad54fe136512d69f8f685c2, $__internal_05bf2b5c0fcc76adc0f89d30dc0c981259d00136b341b28d8c6c6f97e34d1cdc)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_keywords");
        echo "\">";
        echo "Key words";
        echo "</a></li>
    </ul>
</li>

<li ";
        // line 26
        if ((is_string($__internal_a3983f63a48d44a8290f636072d7b04616494e1699c8a5a8798ef794df6b4a1d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a0510cfb38803bb3fd92d60cf00057e3b12f7f74468e05fee492c8a2e68062a3 = "admin_news") && ('' === $__internal_a0510cfb38803bb3fd92d60cf00057e3b12f7f74468e05fee492c8a2e68062a3 || 0 === strpos($__internal_a3983f63a48d44a8290f636072d7b04616494e1699c8a5a8798ef794df6b4a1d, $__internal_a0510cfb38803bb3fd92d60cf00057e3b12f7f74468e05fee492c8a2e68062a3)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\">";
        echo "News";
        echo "</a>
</li>
";
        // line 30
        echo "    ";
        // line 33
        echo "    ";
        // line 36
        echo "    ";
        // line 39
        echo "    ";
        // line 41
        echo "<li ";
        if ((is_string($__internal_3426d296937ef76d4b2f1800481352725bf5ae2f12193f4dd7b549094d75847d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0785b6b2311cc7de3f8b3a5fb907520782f894c1d0f429b4998b298f6f5fcc87 = "admin_contact") && ('' === $__internal_0785b6b2311cc7de3f8b3a5fb907520782f894c1d0f429b4998b298f6f5fcc87 || 0 === strpos($__internal_3426d296937ef76d4b2f1800481352725bf5ae2f12193f4dd7b549094d75847d, $__internal_0785b6b2311cc7de3f8b3a5fb907520782f894c1d0f429b4998b298f6f5fcc87)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\">";
        echo "Contact";
        echo "</a>
</li>
<li ";
        // line 44
        if ((is_string($__internal_da2faf0c95173e61e65324e2e54454fcb0c7cd2f4fc611ec599d13560b7eca76 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b3e29588d11794617f20aa0b10d7537b6ae9396cf8b6c9b710975c5d66fb967f = "admin_page") && ('' === $__internal_b3e29588d11794617f20aa0b10d7537b6ae9396cf8b6c9b710975c5d66fb967f || 0 === strpos($__internal_da2faf0c95173e61e65324e2e54454fcb0c7cd2f4fc611ec599d13560b7eca76, $__internal_b3e29588d11794617f20aa0b10d7537b6ae9396cf8b6c9b710975c5d66fb967f)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_page");
        echo "\">";
        echo "Pages";
        echo "</a>
</li>
<li ";
        // line 47
        if ((is_string($__internal_1747a08602696e0babcad42d965604b39524ec56f177fa49be8eb574c4e87e97 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b73f02511a49ccbdda30182b0504624babd6cff43277a3ddfe6c3454b7309fb3 = "point_web_calendar_admin_reroute") && ('' === $__internal_b73f02511a49ccbdda30182b0504624babd6cff43277a3ddfe6c3454b7309fb3 || 0 === strpos($__internal_1747a08602696e0babcad42d965604b39524ec56f177fa49be8eb574c4e87e97, $__internal_b73f02511a49ccbdda30182b0504624babd6cff43277a3ddfe6c3454b7309fb3)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("point_web_calendar_admin_reroute");
        echo "\">";
        echo "Calendrier";
        echo "</a>
</li>
<li ";
        // line 50
        if ((is_string($__internal_c390908d9047e8073f7f52cc1dbda698d2e6a9c19b88cdabb7a15358f8b96930 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_377b15029e28f37ba0de4aedb2315e5f380e562e813e05ca2553737f07e667a6 = "admin_user") && ('' === $__internal_377b15029e28f37ba0de4aedb2315e5f380e562e813e05ca2553737f07e667a6 || 0 === strpos($__internal_c390908d9047e8073f7f52cc1dbda698d2e6a9c19b88cdabb7a15358f8b96930, $__internal_377b15029e28f37ba0de4aedb2315e5f380e562e813e05ca2553737f07e667a6)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">";
        echo "Utilisateurs";
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  161 => 50,  154 => 48,  148 => 47,  141 => 45,  135 => 44,  128 => 42,  121 => 41,  119 => 39,  117 => 36,  115 => 33,  113 => 30,  106 => 27,  100 => 26,  91 => 22,  85 => 21,  79 => 20,  73 => 19,  67 => 16,  61 => 15,  52 => 11,  46 => 10,  40 => 9,  34 => 8,  28 => 5,  21 => 4,  19 => 2,);
    }
}
/* {#<li {% if app.request.attributes.get('_route') starts with 'admin_menu' %}class="active"{% endif %}>#}*/
/*     {#<a href="{{ path('admin_menu') }}">{{ "Menu" }}</a>#}*/
/* {#</li>#}*/
/* <li class="dropdown {% if app.request.attributes.get('_route') starts with 'admin_product' or app.request.attributes.get('_route') starts with 'admin_category' %}active{% endif %}">*/
/*     <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ "Produits" }} <b*/
/*                 class="caret"></b></a>*/
/*     <ul class="dropdown-menu">*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_product' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_product') }}">{{ "Produits" }}</a></li>*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_category' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_category') }}">{{ "Catégories" }}</a></li>*/
/*     </ul>*/
/* </li>*/
/* */
/* <li class="dropdown {% if app.request.attributes.get('_route') starts with 'admin_referencing' or app.request.attributes.get('_route') starts with 'admin_keywords' %}active{% endif %}">*/
/*     <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ "Referencement" }} <b*/
/*                 class="caret"></b></a>*/
/*     <ul class="dropdown-menu">*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_referencing' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_referencing') }}">{{ "Referencement des pages" }}</a></li>*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_keywords' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_keywords') }}">{{ "Key words" }}</a></li>*/
/*     </ul>*/
/* </li>*/
/* */
/* <li {% if app.request.attributes.get('_route') starts with 'admin_news' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_news') }}">{{ "News" }}</a>*/
/* </li>*/
/* {#<li {% if app.request.attributes.get('_route') starts with 'admin_guestbook' %}class="active"{% endif %}>#}*/
/*     {#<a href="{{ path('admin_guestbook') }}">{{ "Livre d'or" }}</a>#}*/
/* {#</li>#}*/
/* {#<li {% if app.request.attributes.get('_route') starts with 'admin_faq' %}class="active"{% endif %}>#}*/
/*     {#<a href="{{ path('admin_faq') }}">{{ "F.A.Q" }}</a>#}*/
/* {#</li>#}*/
/* {#<li {% if app.request.attributes.get('_route') starts with 'admin_gallery' %}class="active"{% endif %}>#}*/
/*     {#<a href="{{ path('admin_gallery') }}">{{ "Galeries" }}</a>#}*/
/* {#</li>#}*/
/* {#<li {% if app.request.attributes.get('_route') starts with 'admin_folder' %}class="active"{% endif %}>#}*/
/*     {#<a href="{{ path('admin_folder') }}">{{ "Gestion documentaire" }}</a>#}*/
/* {#</li>#}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_contact' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_contact') }}">{{ "Contact" }}</a>*/
/* </li>*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_page' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_page') }}">{{ "Pages" }}</a>*/
/* </li>*/
/* <li {% if app.request.attributes.get('_route') starts with 'point_web_calendar_admin_reroute' %}class="active"{% endif %}>*/
/*     <a href="{{ path('point_web_calendar_admin_reroute') }}">{{ "Calendrier" }}</a>*/
/* </li>*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_user' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_user') }}">{{ "Utilisateurs" }}</a>*/
/* </li>*/
