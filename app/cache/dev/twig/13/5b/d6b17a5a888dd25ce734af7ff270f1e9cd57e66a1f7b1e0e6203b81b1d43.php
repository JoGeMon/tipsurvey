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
        return array (  193 => 74,  186 => 70,  180 => 67,  176 => 66,  172 => 65,  169 => 64,  154 => 62,  151 => 61,  148 => 60,  130 => 59,  123 => 54,  108 => 42,  93 => 30,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 10,  44 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
