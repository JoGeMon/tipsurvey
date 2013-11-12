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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"root\">
      <div id=\"topBars\">
        <div id=\"topLeftBar\">
            ";
        // line 11
        $this->env->loadTemplate("TipddyBackendBundle::includes/top-bars-left.html.twig")->display($context);
        echo "            
        </div>
        <div id=\"topRightBar\">
            ";
        // line 14
        $this->env->loadTemplate("TipddyBackendBundle::includes/top-bars-right.html.twig")->display($context);
        // line 15
        echo "        </div>
      </div>
      <div id=\"header\">
            <span id=\"logo\"></span>
      </div>
      <div>
          ";
        // line 21
        $this->env->loadTemplate("TipddyBackendBundle::includes/main-menu.html.twig")->display($context);
        echo "  
      </div>  

      <div class=\"page\">
          <div class=\"pageWrap\">
              <div class=\"nav_sep\">
                <div id=\"top_nav\">
              ";
        // line 28
        $this->env->loadTemplate("TipddyBackendBundle::includes/sub-menu.html.twig")->display($context);
        echo "            
                </div>
              </div>
              <div id=\"dashboard\">
              ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "survey"), "method")) {
            // line 33
            echo "                  ";
            $this->env->loadTemplate("TipddyBackendBundle::includes/left-menu.html.twig")->display($context);
            // line 34
            echo "              ";
        }
        // line 35
        echo "                    
          ";
        // line 36
        $this->displayBlock('optionsexport', $context, $blocks);
        echo " 
          ";
        // line 37
        $this->displayBlock('menuizq', $context, $blocks);
        // line 38
        echo "
                    <div id=\"contenido\" class=\"";
        // line 39
        echo (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "survey"), "method")) ? ("width-contenido-menu") : ("width-contenido"));
        echo "\">
                      
                      ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddybackend/images/logo-tipddy.png"), "html", null, true);
        echo "\" /></a>
            &copy; 2011 - Tipddy | info@tipddy.cl
          </div>
      </div>
";
    }

    // line 36
    public function block_optionsexport($context, array $blocks = array())
    {
        echo " ";
    }

    // line 37
    public function block_menuizq($context, array $blocks = array())
    {
    }

    // line 41
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
        return array (  145 => 41,  140 => 37,  134 => 36,  125 => 55,  110 => 42,  108 => 41,  103 => 39,  100 => 38,  98 => 37,  94 => 36,  91 => 35,  88 => 34,  85 => 33,  83 => 32,  76 => 28,  66 => 21,  58 => 15,  56 => 14,  50 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
