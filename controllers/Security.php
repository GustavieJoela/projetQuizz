<?php
   
  class Security extends Controller {

    public function __construct(){ 
       $this->dirname="security";
        $this->layout="layout_connexion"; 
        parent:: __construct();
    }

    public function loadViewInscription(){
       $this->views="inscription";
       $this->render();
    }
    public function loadViewInterfaceJouer(){
      $this->views="interfaceJoueur";
      $this->render();
   }

    public function index(){
       $this->views="connexion";
       $this->render();
      
    }
    public function seConnecter(){
       
       if(isset($_POST['btn_connexion'])){
          extract($_POST);
          $this->validator->is_empty($login,'login',"login obligatoire");
          $this->validator->is_empty($password,'password',"password obligatoire");
          if($this->validator->is_valid()){
             
             $manager=new UserManager();
             $user=null;
             $user=$manager->getUserByLoginAndPwd($login,$password);
             $_SESSION["user"]=$user; 
             if(!empty($user)){
               $this->data['userConnect']=$user; 
               $this->layout="layout_admin";
               $this->views="inscription";
               $this->render();
             }else{
               $this->data['err_login']="login ou mot de passe incorrect";
               $this->views="connexion";
               $this->render();
             }
          }else{
            $erreurs=$this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->views="connexion";
            $this->render();
          }
         
       }else{
          $this->index();
       }
      
    }

    public function seDeconnecter(){
         echo 0; 
    }
    public function creerUtlisateur(){
        
    }

   }
