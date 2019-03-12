<?php
class DBConnection extends PDO
{
    public function __construct()
    {
        try{
            $dbName = 'register';
            $host='mysql:host=localhost;dbname='.$dbName;
            $user='root';
            $password='';
            parent::__construct($host,$user,$password);
            $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo "fail";
            $e->getMessage();
            die();
        }
    }
}
?>
