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
        return array (  38 => 13,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  62 => 23,  49 => 19,  39 => 6,  93 => 9,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  27 => 4,  54 => 21,  43 => 8,  30 => 3,  22 => 2,  19 => 1,  73 => 12,  68 => 14,  63 => 6,  57 => 16,  51 => 15,  48 => 12,  46 => 7,  40 => 8,  33 => 10,  29 => 4,  23 => 1,  145 => 41,  140 => 37,  134 => 36,  125 => 55,  110 => 42,  108 => 41,  103 => 39,  100 => 38,  98 => 40,  94 => 22,  91 => 31,  88 => 6,  85 => 19,  83 => 32,  76 => 28,  66 => 15,  58 => 15,  56 => 9,  50 => 8,  45 => 8,  42 => 14,  35 => 4,  32 => 12,  31 => 5,  28 => 3,);
    }
}
