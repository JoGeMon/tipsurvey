<?php

/* TipddySurveyBundle:Survey:show.html.twig */
class __TwigTemplate_604cac10bc10a547c3cc33c5d7d7adfc2cb701a32ab589adc1aedbf62b1a3d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TipddyBackendBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TipddyBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<fieldset>
      <legend>Mostrando Encuesta</legend>
      ";
        // line 6
        echo $this->getAttribute($this, "fieldReadText", array(0 => "title", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), 2 => "Título"), "method");
        echo "
      ";
        // line 7
        echo $this->getAttribute($this, "fieldReadText", array(0 => "description", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), 2 => "Descripción"), "method");
        echo "      
    </fieldset>
    <p id=\"nav\">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("survey");
        echo "\">Volver a listado</a>
    |
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("survey_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar</a>
    |
    <a href=\"#\">Borrar</a>
    </p>
";
    }

    // line 18
    public function getfieldReadText($_element = null, $_value = null, $_label = null)
    {
        $context = $this->env->mergeGlobals(array(
            "element" => $_element,
            "value" => $_value,
            "label" => $_label,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "      <div class=\"\">
          <label for=\"tipddy_surveybundle_show_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
          
          <div class=\"field-wrapper\">
            ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
          </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Survey:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  75 => 20,  72 => 19,  59 => 18,  50 => 12,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
