<?php

class Dbh{
    protected function connect(){
        try{
            $dbusername="root";
            $dbpassword="";
            $dbh = new PDO("mysql:host=localhost;dbname=tindoglogin", $dbusername, $dbpassword);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}

?>