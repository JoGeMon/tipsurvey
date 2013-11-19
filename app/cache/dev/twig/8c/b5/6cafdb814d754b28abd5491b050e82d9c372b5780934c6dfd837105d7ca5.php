<?php

/* TipddySurveyBundle:Question:new.html.twig */
class __TwigTemplate_8cb56cafdb814d754b28abd5491b050e82d9c372b5780934c6dfd837105d7ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddysurvey/js/embed-answers.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<h1>Question creation</h1>
      ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
           ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
           
           ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'row');
        echo "
           ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row');
        echo "
           ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "randomOrder"), 'row');
        echo "
           ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionType"), 'row');
        echo "
           ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answerType"), 'row');
        echo "
           ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionRequired"), 'row');
        echo "
     <div id=\"all-answers\" data-prototype='
        <table class=\"new-answers\" id=\"tipddy_tipsurveybundle_questiontype_answers_\$\$name\$\$\">
          <tr>
             <td>&nbsp;</td>
             <td colspan=\"2\">Answer</td>     
             <td>&nbsp;</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td colspan=\"2\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"), "vars"), "prototype"), "answer"), 'widget');
        echo "</td>
            <td class=\"adelete\"></td>
         </tr>
        </table>' data-prototype-photo='
        <table class=\"new-answers\" id=\"tipddy_tipsurveybundle_questiontype_answers_\$\$name\$\$\">
          <tr>
             <td>&nbsp;</td>
             <td colspan=\"2\">Answer</td>     
             <td>&nbsp;</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td colspan=\"2\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"), "vars"), "prototype"), "photo"), 'widget');
        echo "</td>
            <td class=\"adelete\"></td>
         </tr>
        </table>' data-prototype-video='
        <table class=\"new-answers\" id=\"tipddy_tipsurveybundle_questiontype_answers_\$\$name\$\$\">
          <tr>
             <td>&nbsp;</td>
             <td colspan=\"2\">Answer</td>     
             <td>&nbsp;</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td colspan=\"2\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"), "vars"), "prototype"), "video"), 'widget');
        echo "</td>
            <td class=\"adelete\"></td>
         </tr>
        </table>'>      
       ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 59
            echo "         <table class=\"new-answers\" id=\"tipddy_tipsurveybundle_questiontype_answers_\$\$name\$\$\">
          <tr>
             <td>&nbsp;</td>
             <td colspan=\"2\">Answer</td>     
             <td>&nbsp;</td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td colspan=\"2\">";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "answer"), 'widget');
            echo "</td>
            <td class=\"adelete\"></td>
         </tr>
        </table>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  
     </div>
      ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row');
        echo "
      
      ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
      
      ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "   

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question", array("survey" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "survey"), "method"))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Question:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 81,  129 => 58,  104 => 42,  97 => 37,  186 => 70,  180 => 67,  172 => 65,  148 => 60,  134 => 36,  110 => 42,  100 => 38,  76 => 28,  81 => 34,  114 => 46,  70 => 25,  53 => 18,  23 => 1,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 37,  132 => 51,  128 => 49,  107 => 42,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 67,  135 => 53,  119 => 42,  102 => 32,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  38 => 16,  94 => 36,  89 => 32,  85 => 31,  75 => 19,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 5,  93 => 30,  88 => 34,  78 => 27,  46 => 10,  27 => 4,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 75,  158 => 73,  156 => 66,  151 => 61,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 35,  62 => 17,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 20,  72 => 24,  69 => 25,  47 => 11,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 41,  139 => 45,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 37,  96 => 31,  83 => 23,  74 => 30,  66 => 21,  55 => 13,  52 => 13,  50 => 12,  43 => 8,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 74,  189 => 71,  187 => 84,  182 => 66,  176 => 66,  173 => 65,  168 => 77,  164 => 59,  162 => 57,  154 => 71,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 59,  130 => 59,  125 => 55,  122 => 54,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 39,  99 => 46,  95 => 35,  92 => 30,  86 => 28,  82 => 28,  80 => 19,  73 => 12,  64 => 22,  60 => 21,  57 => 5,  54 => 13,  51 => 19,  48 => 12,  45 => 10,  42 => 7,  39 => 7,  36 => 9,  33 => 6,  30 => 7,);
    }
}
