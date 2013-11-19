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
        return array (  36 => 9,  32 => 8,  26 => 5,  21 => 2,  27 => 4,  22 => 2,  19 => 1,);
    }
}
