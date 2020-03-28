<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Homes extends Helpers {

      
      

function __construct(){

      $this->db= new Database;
      //$this->language_mem;
      //die($language_mem);
      

      $this->loader = new FilesystemLoader(APPROOT.DS.'app'.DS.'views'.DS);
      // chmod tmp_cache
      
      $this->twig = new Environment($this->loader,[
        
        'debug' => true,
        'cache' =>  APPROOT.DS.'app'.DS.'tmp_cache'
          
        ]);

        // using global var
        $_SESSION['username']='u958902108_ch';
        $this->twig->addGlobal('session', $_SESSION);
       $this->twig->addGlobal('URLROOT', URLROOT);
        $this->twig->addGlobal('APPROOT', APPROOT);
        $this->twig->addGlobal('SITENAME', SITENAME);
        $this->twig->addGlobal('DS', DS);
        $this->twig->addGlobal('LANG', LANG);
                         
         //$this->twig->addGlobal('lang', $this->language_mem);
          
        //adding filter
        $filter_md5 = new \Twig\TwigFilter('md5', function ($string) {
          return md5($string);
      });

        $this->twig->addFilter($filter_md5);

        // adding function
        $myfunction = new \Twig\TwigFunction('md5', function ($string) {
          return md5($string);
      });
      $this->twig->addFunction($myfunction);


} // end constructor homes
    
function language($lang='fr',$prm2=''){
      $this->language_mem=$lang;
      //$this->redirect('homes');
      Echo $this->twig->render(DS.'homes'.DS.'index.twig', [
              'lang'=>$lang
          ]);

 return $this->language_mem;
      
}// end method language

function contact($lang='',$prm2=''){
      
      // echo $lang=$this->language();
      // die($this->language_mem);
      // $this->twig->addGlobal('lang', $this->language_mem);

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'contact.twig', [
        
        'urlVar'=>[
            
            'prm2' => $lang
            ]
      
      ]);

      
}// end method index

function greffeBarbe($prm1='',$prm2=''){

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'greffe-barbe.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}// end method index


function greffeCheveuxTurquie($prm1='',$prm2=''){

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'greffe-cheveux-turquie.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}// end method index


function greffeSourcils($prm1='',$prm2=''){

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'greffe-sourcils.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}// end method index


function index($prm1='',$prm2=''){

     
      
      Echo $this->twig->render(DS.'homes'.DS.'index.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}// end method index


function quiSommesNous($prm1='',$prm2=''){

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'qui-sommes-nous.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}// end method index


public function newsletter(){
       
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
                  $_POST =filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                  $data =[
                                    
                        'name'=> trim($_POST['name']),
                        'email'=> trim($_POST['email']),
                        'name_err'=> null,
                        'email_err'=> null
                  ];
       
                  if(empty($data['name'])){$data['name_err']='veuillez entrer votre nom svp';}
                 
                  if(empty($data['email'])){$data['email_err']='veuillez entrez votre email svp';}

                  if(!empty($data['name_err']) || !empty($data['email_err']) ){
                  
                        Echo $this->twig->render('/homes/index.twig', [
                               'data' => $data
                        ]);
                  
                  }else{
                              // insert into database 
                        $this->db->query(" INSERT INTO lead (name, email)  VALUES (:name,:email)  ");
              
                        $this->db->bind(':name',$data['name']);
                        $this->db->bind(':email',$data['email']);
                                    
                        if($this->db->execute()){

                              $data['email_err']= '';
                              $data['name_err']='';

                              // $this->flash('register_success','you are registred and you can login ');
                        
                              Echo $this->twig->render('/homes/index.twig', [
                                    'register_success' => 'Bienvenue à Health Experts, votre demande d\'adhesion est enregistrée  '
                              ]);

                              // $this->redirect('homes');

                              ///////// acces zoho crm /////// 
                              ///////// zoho crm /////// 




                       
                        
                        }else{
                              Echo "database non available or something went wrong ";
                        
                              
                        }

                  }
       }
    

}






  }  // end class homes
