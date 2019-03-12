<?php
    require_once('model/Login.php');

    class LoginController{
        var $model;

         function __construct(){
            $this->model = new Login();
        }
        function showFormLogin() {
        	require_once('view/login.php');
        }
        function checkLogin() {
            $data = $_POST;
            $email = trim($data['email']);
            $pwd = md5($data['pwd']);

            $result = $this->model->check($email, $pwd);
           
            if($result) {
                if(isset($data['remember'])) {
                    $token = md5($email);
                    setcookie('token',$token, time()+600);
                    $this->model->insertToken($email, $token);
                }
                
                header('Location: index.php?mod=login&act=home');
            } else {
            	echo "failure";
            }
        }
        function home() {
          
        	if(isset($_COOKIE['token'])) {
                $token = $_COOKIE['token'];
                $result = $this->model->loginToken($token);
                
                if($result) {
                    
                    $name = $_SESSION['name'];
                    require_once('view/home.php');
                } else {
                    echo "sorry";
                }

            } else if(isset($_SESSION['login'])) {
                
                $name = $_SESSION['name'];
                require_once('view/home.php');
            } else {
               
                require_once('view/login.php');
            } 
        	
        }
        function logout() {
            setcookie("token");
            session_destroy();
            header("Location: index.php?mod=login&act=showFormLogin");
        }
    } 
 ?>