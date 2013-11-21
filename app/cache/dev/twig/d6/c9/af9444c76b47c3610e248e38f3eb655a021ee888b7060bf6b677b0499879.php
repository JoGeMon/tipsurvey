<?php

/* TipddyBackendBundle::includes/top-bars-left.html.twig */
class __TwigTemplate_d6c9af9444c76b47c3610e248e38f3eb655a021ee888b7060bf6b677b0499879 extends Twig_Template
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
        echo "<span class=\"topBarElem\">
  <b>Tú Panel</b>
</span>
|
<span class=\"topBarElem\">
  <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("comment_sendinformation");
        echo "\" class=\"iframe-header\" title=\"Envíanos comentarios, sugerencias o pídenos ayuda\">Envíanos comentarios, sugerencias o pídenos ayuda</a>
</span>";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::includes/top-bars-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,  68 => 11,  57 => 5,  51 => 13,  40 => 8,  35 => 7,  29 => 5,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 12,  69 => 17,  63 => 6,  59 => 13,  54 => 11,  50 => 10,  46 => 11,  43 => 8,  36 => 4,  33 => 6,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
