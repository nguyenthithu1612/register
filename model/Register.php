<?php 
    include_once('Connection.php');
    class Register{
    	function create($data) {
    		 try {
    		$smt = new DBConnection();
            $qry = $smt->prepare("INSERT INTO user (name, email, password) VALUES        ('".$data['name']."','".$data['email']."','".md5($data['pwd'])."')");

            $qry->execute();
            header('Location: index.php?mod=signup&act=showFormRegister');
    	} catch (PDOException $e) {
		  	echo "Failure!";
		    $e->getMessage();
		   
		}
    	}
    }
 ?>