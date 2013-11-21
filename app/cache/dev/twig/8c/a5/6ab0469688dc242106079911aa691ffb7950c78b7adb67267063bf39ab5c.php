<?php

/* TipddyBackendBundle::includes/top-bars-right.html.twig */
class __TwigTemplate_8ca56ab0469688dc242106079911aa691ffb7950c78b7adb67267063bf39ab5c extends Twig_Template
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
        echo "|
<span class=\"topBarElem\">!Hola ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
        echo " </span> |<span> Tipo Usuario: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Typeuser"), "html", null, true);
        echo " </span> |<span> Organización:  Tipddy</span>
<span class=\"topBarElem\">
 | <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("login_logout");
        echo "\">Desconectar</a>
</span>";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::includes/top-bars-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  26 => 6,  19 => 1,  68 => 11,  57 => 5,  51 => 13,  40 => 8,  35 => 7,  29 => 4,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 12,  69 => 17,  63 => 6,  59 => 13,  54 => 11,  50 => 10,  46 => 11,  43 => 8,  36 => 4,  33 => 6,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
