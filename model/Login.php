<?php
    include_once('Connection.php');
    class Login{
        function check($email, $pwd) {
        	try {
        		$smt = new DBConnection();
        		$qry = $smt->prepare("SELECT * FROM user WHERE email = '".$email."' AND password = '".$pwd."'");
        		$qry->execute(array($email,$pwd));
        		$user = $qry->fetch(PDO::FETCH_ASSOC);
                if($qry->rowCount() >=1) {
                    $_SESSION['name'] = $user['name'];
        		 	$_SESSION['email'] = $user['email'];
        		 	$_SESSION['login'] = true;

                    return 1;
        		 } else {
                    
        		 	return 0;
        		 }
            $qry->execute();
        	} catch (PDOException $e) {
        		echo "Failure!";
        		$e->getMessage();
        	}
        }
        function insertToken($email, $token) {
            try {
                $smt = new DBConnection();
                $qry = $smt->prepare("INSERT INTO token(email, token) VALUES        ('".$email."','".$token."')");
                $qry->execute();
                
            } catch (PDOException $e) {
                echo "Failure!";
                $e->getMessage();
            }
        }
        function loginToken($token) {
            try {
                $smt = new DBConnection();
                $qry = $smt->prepare("SELECT * FROM user, token WHERE token = '".$token."' AND user.email = token.email");
               
                $qry->execute(array($token));
                $user = $qry->fetch(PDO::FETCH_ASSOC);


                if($qry->rowCount() >=1) {

                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['login'] = true;

                    return 1;
                } else {
                    return 0;
                }
                $qry->execute();

            } catch (PDOException $e) {
                echo "failure";
                $e->getMessage();
            }
        }
    } 
 ?>