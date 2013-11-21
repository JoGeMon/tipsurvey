<?php

/* TipddyBackendBundle::includes/main-menu.html.twig */
class __TwigTemplate_69a4fc6449769e2e2f514c8cd32db82b33081a150ff61b659cd3fdd29b13f86a extends Twig_Template
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
        $context["tab"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 2
        echo "
<ul id=\"ul-menuprincipal\" class=\"nav sf-js-enabled sf-shadow\" style=\"display: block; visibility: visible;\">
     <li id=\"m-panel\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Panel</a>
     </li>

     <li id=\"m-campanas\" ";
        // line 8
        echo (($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActive((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), array(0 => "survey", 1 => "question"))) ? ("class=\"sfHover\"") : (""));
        echo ">
         <a class=\"sf-with-ul\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("survey");
        echo "\">Encuestas</a>
     </li>
     <li id=\"m-sistema\">
       <a href=\"#\" class=\"sf-with-ul\">Datos</a>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::includes/main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  21 => 2,  22 => 2,  26 => 5,  19 => 1,  68 => 11,  57 => 5,  51 => 13,  40 => 8,  35 => 7,  29 => 4,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 12,  69 => 17,  63 => 6,  59 => 13,  54 => 11,  50 => 10,  46 => 11,  43 => 8,  36 => 9,  33 => 6,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
