<?php

/* TipddyBackendBundle::includes/sub-menu.html.twig */
class __TwigTemplate_bf942e204fb56accda1f09f66bcec260dc8560f3fdd5361c0154959263b4203e extends Twig_Template
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
        echo "<ul>
";
        // line 2
        $context["subtab"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 3
        echo "
";
        // line 4
        if ($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActive((isset($context["subtab"]) ? $context["subtab"] : $this->getContext($context, "subtab")), array(0 => "user", 1 => "comment"))) {
            // line 5
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\" ";
            echo (($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActive((isset($context["subtab"]) ? $context["subtab"] : $this->getContext($context, "subtab")), "user")) ? ("class=\"cat-destacada\"") : (""));
            echo ">Usuarios</a></li>
<li><a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("comment");
            echo "\" ";
            echo (($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActive((isset($context["subtab"]) ? $context["subtab"] : $this->getContext($context, "subtab")), "comment")) ? ("class=\"cat-destacada\"") : (""));
            echo ">Comentarios, sugerencias o Ayudas</a></li>
  ";
        }
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::includes/sub-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  32 => 8,  21 => 2,  22 => 2,  26 => 5,  19 => 1,  68 => 11,  57 => 5,  51 => 13,  40 => 8,  35 => 7,  29 => 5,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 12,  69 => 17,  63 => 6,  59 => 13,  54 => 11,  50 => 10,  46 => 11,  43 => 8,  36 => 6,  33 => 6,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
