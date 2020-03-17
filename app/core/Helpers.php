<?php

class Helpers {

   function __construct(){
      // session start here loaded with bootstrap file 
      session_start();

      }

// utilities for redirection 
function redirect($path){

   header('Location: '.URLROOT.'/'.$path);
 
 }
 
 
 function flash($msgkey='',$msgval='', $class="alert alert-success"){
 
 
   // $name represent the key and the $message represent the value of the same branch in associative array 
   // call in 2 tempo /// first from he controller to initialiaze the data(with no display) and the second from the view to load the data 
   // intelligent redirection between branch of if statement by puttingthe messaging and substractin it
   //      session[name]=$message
  
 
 
   if(!empty($msgkey)){
 
    
          if(!empty($msgval) && empty($_SESSION[$msgkey])){
 
                
             // 1 timing controller call -->inject the value from the users // register method // first call // by adding $message intelligent if 
 
             $_SESSION[$msgkey]=$msgval;
             $_SESSION[$msgkey. '_class']=$class;
 
             
 
 
          }elseif(empty($msgval) && !empty($_SESSION[$msgkey])){
 
             // 2 timing view call -->display  the value in the view // login user view // second call // redirect by intelligent if (without adding $message)
 
             $class=!empty($_SESSION[$msgkey. '_class'])? $_SESSION[$msgkey. '_class']:'';
 
             echo '<div class="'.$class.'"id="msg-flash">'.$_SESSION[$msgkey].'</div>' ;
             
           
              
              unset($_SESSION[$msgkey]);
              unset($_SESSION[$msgkey. '_class']);
 
          }
    }
     
 }
 
 
 function isloggedin(){
 
    if(isset($_SESSION['user_id'])){
     
       return true;
 
    }else{
      
       return false;
    }
 
 }
 
 function isAdmin(){
 
    if($_SESSION['status']==='admin'){
     
       return true;
 
    }else{
      
       return false;
    }
 
 }



}


