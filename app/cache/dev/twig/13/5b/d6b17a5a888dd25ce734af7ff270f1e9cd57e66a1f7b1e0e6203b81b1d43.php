<?php

/* TipddySurveyBundle:Question:edit.html.twig */
class __TwigTemplate_135bd6b17a5a888dd25ce734af7ff270f1e9cd57e66a1f7b1e0e6203b81b1d43 extends Twig_Template
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

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Question edit</h1>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
       ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "question"), 'row');
        echo "
       ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'row');
        echo "
       ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "randomOrder"), 'row');
        echo "
       ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "questionType"), 'row');
        echo "
       ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answerType"), 'row');
        echo "
       ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "questionRequired"), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answers"), "vars"), "prototype"), "answer"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answers"), "vars"), "prototype"), "photo"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answers"), "vars"), "prototype"), "video"), 'widget');
        echo "</td>
            <td class=\"adelete\"></td>
         </tr>
        </table>'>      
      ";
        // line 59
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answers"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 60
            echo "             
              ";
            // line 61
            $template = $this->env->resolveTemplate((("TipddySurveyBundle:Question:includes/form-data-prototype-" . twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vars"), "value"), "answerType"))) . ".html.twig"));
            $template->display($context);
            // line 62
            echo "        
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "     </div>
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'row');
        echo "     
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'row');
        echo "  
    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo " 
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question", array("survey" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "survey"), "method"))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Question:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  180 => 67,  172 => 65,  148 => 60,  134 => 36,  110 => 42,  100 => 38,  76 => 28,  81 => 34,  114 => 46,  70 => 25,  53 => 18,  23 => 1,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 37,  132 => 51,  128 => 49,  107 => 41,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  38 => 16,  94 => 36,  89 => 32,  85 => 33,  75 => 18,  68 => 11,  56 => 14,  87 => 25,  21 => 2,  26 => 5,  93 => 30,  88 => 34,  78 => 27,  46 => 10,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 61,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 35,  62 => 17,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 19,  72 => 19,  69 => 25,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 41,  139 => 45,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 37,  96 => 31,  83 => 23,  74 => 30,  66 => 21,  55 => 13,  52 => 13,  50 => 12,  43 => 8,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 74,  189 => 71,  187 => 84,  182 => 66,  176 => 66,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 62,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 59,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 39,  99 => 46,  95 => 35,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 12,  64 => 17,  60 => 22,  57 => 5,  54 => 12,  51 => 12,  48 => 12,  45 => 10,  42 => 7,  39 => 7,  36 => 9,  33 => 6,  30 => 7,);
    }
}
