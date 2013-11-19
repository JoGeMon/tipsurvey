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
        echo " </span> |<span> Tipo Usuario: </span> |<span> Organización:  Tipddy</span>
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
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
