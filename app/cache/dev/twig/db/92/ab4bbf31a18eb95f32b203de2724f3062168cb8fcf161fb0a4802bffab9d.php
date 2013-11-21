<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_db92ab4bbf31a18eb95f32b203de2724f3062168cb8fcf161fb0a4802bffab9d extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  87 => 20,  55 => 13,  25 => 3,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  41 => 9,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  66 => 15,  62 => 23,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  44 => 10,  30 => 3,  27 => 4,  24 => 4,  32 => 12,  21 => 2,  22 => 2,  26 => 5,  19 => 1,  68 => 14,  57 => 16,  51 => 15,  40 => 8,  35 => 4,  29 => 5,  23 => 1,  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 67,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 28,  82 => 21,  77 => 19,  73 => 12,  69 => 25,  63 => 6,  59 => 13,  54 => 21,  50 => 8,  46 => 7,  43 => 8,  36 => 7,  33 => 10,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 31,  84 => 22,  80 => 19,  76 => 20,  70 => 19,  65 => 18,  48 => 12,  31 => 5,  28 => 3,);
    }
}
