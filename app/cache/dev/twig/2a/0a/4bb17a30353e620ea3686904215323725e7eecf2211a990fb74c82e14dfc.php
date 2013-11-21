<?php

/* TipddyBackendBundle::layout.html.twig */
class __TwigTemplate_2a0a4bb17a30353e620ea3686904215323725e7eecf2211a990fb74c82e14dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'optionsexport' => array($this, 'block_optionsexport'),
            'menuizq' => array($this, 'block_menuizq'),
            'content' => array($this, 'block_content'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddybackend/css/style.css"), "html", null, true);
        echo "\" /> 
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/blockUI/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
<!-- Add fancybox -->
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/helpers/jquery.fancybox-buttons.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/helpers/jquery.fancybox-buttons.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/helpers/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>

<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/helpers/jquery.fancybox-thumbs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/fancybox/helpers/jquery.fancybox-thumbs.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
jQuery(document).ready(function(\$) {
\$(\"a.iframe-header\").fancybox({
'hideOnContentClick': false,
'autoScale' : true,
'type': 'iframe',
'width': '100%',
'height': '100%',
'scrolling': 'no'
});
})
</script>

";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "  <div id=\"root\">
      <div id=\"topBars\">
        <div id=\"topLeftBar\">
            ";
        // line 43
        $this->env->loadTemplate("TipddyBackendBundle::includes/top-bars-left.html.twig")->display($context);
        echo "            
        </div>
        <div id=\"topRightBar\">
            ";
        // line 46
        $this->env->loadTemplate("TipddyBackendBundle::includes/top-bars-right.html.twig")->display($context);
        // line 47
        echo "        </div>
      </div>
      <div id=\"header\">
            <span id=\"logo\"></span>
      </div>
      <div>
          ";
        // line 53
        $this->env->loadTemplate("TipddyBackendBundle::includes/main-menu.html.twig")->display($context);
        echo "  
      </div>  

      <div class=\"page\">
          <div class=\"pageWrap\">
              <div class=\"nav_sep\">
                <div id=\"top_nav\">
              ";
        // line 60
        $this->env->loadTemplate("TipddyBackendBundle::includes/sub-menu.html.twig")->display($context);
        echo "            
                </div>
              </div>
              <div id=\"dashboard\">
              ";
        // line 64
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "survey"), "method")) {
            // line 65
            echo "                  ";
            $this->env->loadTemplate("TipddyBackendBundle::includes/left-menu.html.twig")->display($context);
            // line 66
            echo "              ";
        }
        // line 67
        echo "                    
          ";
        // line 68
        $this->displayBlock('optionsexport', $context, $blocks);
        echo " 
          ";
        // line 69
        $this->displayBlock('menuizq', $context, $blocks);
        // line 70
        echo "
                    <div id=\"contenido\" class=\"";
        // line 71
        echo (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "survey"), "method")) ? ("width-contenido-menu") : ("width-contenido"));
        echo "\">
                      
                      ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "                      
                    </div>
                    <br class=\"clearfloat\" />
                  </div>                
              </div>
        </div>
        
      </div>
      
      <div id=\"footer\">
          <hr />
          <div>Versión TipSurvey 1.0.1</div>
          <div>
            <a><img border=\"0\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddybackend/images/logo-tipddy.png"), "html", null, true);
        echo "\" /></a>
            &copy; 2011 - Tipddy | info@tipddy.cl
          </div>
      </div>
";
    }

    // line 68
    public function block_optionsexport($context, array $blocks = array())
    {
        echo " ";
    }

    // line 69
    public function block_menuizq($context, array $blocks = array())
    {
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  204 => 69,  198 => 68,  189 => 87,  174 => 74,  172 => 73,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  147 => 64,  140 => 60,  122 => 47,  120 => 46,  114 => 43,  106 => 39,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  69 => 17,  63 => 14,  59 => 13,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  36 => 4,  33 => 3,  130 => 53,  109 => 40,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  70 => 19,  65 => 18,  48 => 17,  31 => 4,  28 => 3,);
    }
}
