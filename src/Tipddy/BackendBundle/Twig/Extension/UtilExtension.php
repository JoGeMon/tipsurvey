<?php
 
namespace Tipddy\BackendBundle\Twig\Extension;

class UtilExtension extends \Twig_Extension
{

   public function getFunctions()
   {
	   return array(
	           'route_active' => new \Twig_Function_Method($this, 'routeActive'),
	           'route_active_menu_left' => new \Twig_Function_Method($this, 'routeActiveMenuLeft')
	   );
	   
	   
   }
 
  public function routeActive($routeCurrent, $routeCompare)
  {
      $result = false;
 
      if ($routeCurrent) {
 
         $routeCurrent = explode('_', $routeCurrent);
 
         if (is_array($routeCurrent)) { 
 
            if (!is_array($routeCompare)) { 
 
              $result = $routeCurrent[0] == $routeCompare ? true : false;
 
            } else {
 
              $result = in_array($routeCurrent[0], $routeCompare) ? true : false;
 
            }  
 
         }
 
      }
 
     return $result;
 
  }
 
 
  public function routeActiveMenuLeft($routeCurrent, $elementCompadre)
  {
      return $routeCurrent == $elementCompadre;
	  
  }
 
 
   public function getName()
   {
      return 'tipddy_backendbundle_util_extension';
 
   } 

}