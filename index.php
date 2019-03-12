<?php 
    session_start();
   
    
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $mod = "home";
    $act = "index";
    if (isset($_GET['mod'])) {
    	$mod = $_GET['mod'];
    }
    if (isset($_GET['act'])){
    	$act = $_GET['act'];
    }
    switch ($mod) {
    	case 'signup':
    		require_once('controller/RegisterController.php');
    		$controllersignup = new RegisterController();
    		switch ($act) {
    			case 'showFormRegister':
    				$controllersignup->showFormRegister();
    				break;
    			case 'storeRegister':
                    $controllersignup->store();
                    break;
    			default:
    				# code...
    				break;
    		}
    		break;
    	case 'login':
    		require_once('controller/LoginController.php');
            $controllerlogin = new LoginController();
            switch ($act) {
                case 'showFormLogin':
                    $controllerlogin->showFormLogin();
                    break;
                case 'checkLogin':
                    $controllerlogin->checkLogin();
                    break;
                case 'home':
                    $controllerlogin->home();
                    break;
                case 'logout':
                    $controllerlogin->logout();
                    break;
                default:
                    # code...
                    break;
            }
    		break;
        
    	default:
    		# code...
    		break;
    }

 ?>