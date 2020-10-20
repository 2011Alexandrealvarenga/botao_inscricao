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

class Meu_youtube{
  private static $instance;
  public static function getInstance(){
    if(self::$instance == NULL){
      self::$instance = new self();
    }
    return self::$instance;
  }
  private function __construct(){
     add_shortcode('youtube',array($this,'youtube'));
  }
 public function youtube($parametros){
  $a = shortcode_atts(array('canal' => ''),$parametros);
  $canal = $a['canal'];
  return '
    <script src="https://apis.google.com/js/platform.js"></script>
    <div class="g-ytsubscribe" data-channel="'.$canal.'" data-layout="default" 

    data-count="default"></div>

  ';
 }
      
  }


Meu_youtube::getInstance();