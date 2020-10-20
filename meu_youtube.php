<?php 

/*
Plugin Name: meu youtube
Plugin URI: www.alexandre.com
Description: segundo plugin
Version: 1.0
Author: alexandre
Author URI: www.alexandre.com
License: GLPV2
Text Domain: segundo plugin
*/

class Filmes_reviews{
  private static $instance;
  public static function getInstance(){
    if(self::$instance == NULL){
      self::$instance = new self();
    }
    return self::$instance;
  }
  private function __construct(){
     
  }
 
      
    ));
  }

}