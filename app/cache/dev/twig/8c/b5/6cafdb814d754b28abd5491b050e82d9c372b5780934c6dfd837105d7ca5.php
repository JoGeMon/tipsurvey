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
        return array (  175 => 81,  168 => 77,  163 => 75,  158 => 73,  154 => 71,  143 => 67,  133 => 59,  129 => 58,  122 => 54,  107 => 42,  92 => 30,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  54 => 13,  50 => 12,  47 => 11,  44 => 10,  37 => 5,  32 => 4,  29 => 3,);
    }
}
