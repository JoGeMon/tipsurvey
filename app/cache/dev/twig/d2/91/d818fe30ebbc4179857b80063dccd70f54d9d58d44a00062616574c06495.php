<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d291d818fe30ebbc4179857b80063dccd70f54d9d58d44a00062616574c06495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 4,  24 => 3,  32 => 8,  21 => 2,  22 => 2,  26 => 5,  19 => 1,  68 => 11,  57 => 12,  51 => 13,  40 => 7,  35 => 7,  29 => 5,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 12,  69 => 17,  63 => 6,  59 => 13,  54 => 11,  50 => 10,  46 => 11,  43 => 8,  36 => 6,  33 => 4,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 4,  28 => 3,);
    }
}
