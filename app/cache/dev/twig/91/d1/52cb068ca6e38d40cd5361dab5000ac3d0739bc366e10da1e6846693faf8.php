<?php

/* TipddyBackendBundle::includes/left-menu.html.twig */
class __TwigTemplate_91d152cb068ca6e38d40cd5361dab5000ac3d0739bc366e10da1e6846693faf8 extends Twig_Template
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
        // line 5
        $context["tab"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 6
        echo "   <div id=\"menu-izq\">
      <div id=\"button-space\">
         <div class=\"button p4\">
           <span class=\"titulo\">Opciones Encuesta</span><span class=\"dwn\">▼</span>
         </div>
      </div>
      <div id=\"menu\">
       <div id=\"menu-izq-contenido\" class=\"widget\">
        <ul class=\"navegador\">
          <li ";
        // line 15
        echo (($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActiveMenuLeft((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "survey_edit")) ? ("class=\"destacado\"") : (""));
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("survey_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "survey"), "method"))), "html", null, true);
        echo "\">Editar Encuesta</a></li>
                 <li ";
        // line 16
        echo (($this->env->getExtension('tipddy_backendbundle_util_extension')->routeActiveMenuLeft((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "question")) ? ("class=\"destacado\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">Preguntas</a></li>
                 <li id=\"registro\">
                   <a class=\"desplegable\" href=\"#\">Seguimiento</a>
                     <ul class=\"subnavegador\" style=\"display:none;\">
                         <li><a href=\"\">Gestión de Respuestas</a></li>                     
                         <li><a href=\"#\">Estadísticas</a></li>
                     </ul>                 
                 </li>   
          </ul>
         </div>
      </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::includes/left-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  32 => 15,  21 => 6,  19 => 5,  130 => 42,  109 => 35,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 17,  31 => 4,  28 => 3,);
    }
}
