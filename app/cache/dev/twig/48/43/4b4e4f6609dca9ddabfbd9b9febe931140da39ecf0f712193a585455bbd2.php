<?php

/* TipddyBackendBundle:Default:show.html.twig */
class __TwigTemplate_48434b4e4f6609dca9ddabfbd9b9febe931140da39ecf0f712193a585455bbd2 extends Twig_Template
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
        return "TipddyBackendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  110 => 42,  100 => 38,  76 => 28,  81 => 34,  114 => 46,  70 => 25,  53 => 18,  23 => 1,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 37,  132 => 51,  128 => 49,  107 => 41,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 26,  63 => 6,  59 => 18,  38 => 6,  94 => 36,  89 => 32,  85 => 33,  75 => 20,  68 => 11,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 34,  78 => 27,  46 => 10,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 35,  62 => 17,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 41,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 37,  96 => 31,  83 => 23,  74 => 30,  66 => 21,  55 => 15,  52 => 13,  50 => 12,  43 => 8,  41 => 8,  35 => 6,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 39,  99 => 46,  95 => 35,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 12,  64 => 17,  60 => 22,  57 => 5,  54 => 12,  51 => 12,  48 => 12,  45 => 10,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
