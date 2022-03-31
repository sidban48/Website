<?php
//place all data in db

class SignUp extends Dbh{

    protected function SetUser($uid,$pword,$tandc,$fname,$lname,$mno){

        
        // $stmt = this->connect()->prepare('insert into tindog_users (user_email, user_pwd, user_tandc) values(?,?,?) ;');
        $stmt = $this->connect()->prepare('INSERT INTO tindog_users (user_email, user_pwd, user_pass, user_tandc, user_fname, user_lname, user_mno) VALUES (?, ?, ?, ?, ?, ?, ?);');


        $hpword = password_hash($pword,PASSWORD_DEFAULT);

        if($tandc == "on"){
            $tandc='1';
        }
        else{
            $tandc ='2';
        }


       if(!$stmt->execute(array($uid,$hpword,$pword,$tandc,$fname,$lname,$mno))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailedtosetuser");
            exit();
    }
    $stmt=null;
    }



    protected function chkUser($uid){

        echo("<br>reached inside chkUser: ".$uid."<br>");

        $stmt = $this->connect()->prepare('SELECT user_id from tindog_users where user_email = ? ;');
        //$stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');


        if(!$stmt->execute(array($uid))){

                echo(" stmt is: ".$stmt);
                $stmt=null;
                
                header("location: ../index.php?error=stmtfailedtocheckuser");
                exit();
        }
        $resultchk;
        if($stmt->rowCount()>0){
            $resultchk = false;
        }
        else{
            $resultchk = true;
        }
        echo("<br>count: ".$stmt->rowCount()."and resultchk: ".$resultchk);
        return $resultchk;
    }
}

?>