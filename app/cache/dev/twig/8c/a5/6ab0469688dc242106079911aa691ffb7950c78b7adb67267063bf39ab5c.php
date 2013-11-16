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
<span class=\"topBarElem\">!Hola, Rodrigo Miranda</span> |<span> Tipo Usuario: Admin</span> |<span> Organización:  Tipddy</span>
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
        return array (  24 => 4,  19 => 1,  73 => 12,  68 => 11,  63 => 6,  57 => 5,  51 => 13,  46 => 11,  40 => 8,  33 => 6,  29 => 5,  23 => 1,  145 => 41,  140 => 37,  134 => 36,  125 => 55,  110 => 42,  108 => 41,  100 => 38,  98 => 37,  94 => 36,  88 => 34,  85 => 33,  83 => 32,  66 => 21,  58 => 15,  56 => 14,  50 => 11,  45 => 8,  42 => 7,  35 => 7,  32 => 3,  124 => 39,  103 => 39,  97 => 29,  91 => 35,  84 => 22,  80 => 21,  76 => 28,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
