<?php
class Login extends Controller{
    public function index($name=''){
        $user =  $this->model('User');
        
        $this->view('login/LogIn');
        
        if(!empty($_POST['user']) && !empty($_POST['password'])){
             $nume = $_POST['user'];
             $pass = $_POST['password'];
             echo $nume;
             echo $pass;
             echo $this->returnValid($nume, $pass);

        }
 
    }

    private function returnValid($nume, $pass){
        if(User::validateUser($nume, $pass) == "valid"){
            return "succes";
         }else{
             return "esuat";
         }
    }


}