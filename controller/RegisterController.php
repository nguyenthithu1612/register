<?php 
    require_once('model/Register.php');

    class RegisterController{
        var $model;

        function __construct(){
            $this->model = new Register();
        }
    	function showFormRegister() {
    		require_once('view/register.php');
    	}
    	function store() {
            $data = $_POST;

            $status = $this->model->create($data);
            if($status == 1) {
                echo "successfull";
            } else {
                //thong bao loi dang ki
            }
        }
    	
    }
 ?>