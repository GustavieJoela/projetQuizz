<?php
class Controller {
    
     protected $dirname;
     protected $views;
     protected $layout="layout_admin";
     protected $validator;
     protected $data=[];
     protected $manager;
     protected $profi;
     

     function __construct()
     {
         session_start();
        $this->validator=new validator();
     }
    public function render(){
        ob_start();
        extract($this->data);
        require_once("views/".$this->dirname."/".$this->views.".php");
        $content_for_layout= ob_get_clean();
        require_once("views/layout/".$this->layout.".php");
    }
}
