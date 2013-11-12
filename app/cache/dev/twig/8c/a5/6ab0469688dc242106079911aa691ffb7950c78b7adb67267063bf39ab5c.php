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
        return array (  24 => 4,  19 => 1,);
    }
}
