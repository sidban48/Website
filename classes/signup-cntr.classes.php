<?php
//change db values

class SignUpCntr extends SignUp{
    private $uid;
    private $pass;
    private $confpass;
    private $tandc;

    public function __construct($usuid,$uspass,$usconfpass,$ustandc,$ufname,$ulname,$umno){
        $this->uid = $usuid;
        $this->pass = $uspass;
        $this->confpass = $usconfpass;
        $this->tandc = $ustandc;
        $this->fname = $ufname;
        $this->lname = $ulname;
        $this->mno = $umno;
    }
    public function signupuser(){
        $result;
        if($this->emptyInput()==false){
            header("location: ../index.php?error=emptyInput");
            exit();
        } 

        if($this->checkUser()==false){

            header("location: ../index.php?error=email_id_already_present");
            exit();
        }


        if($this->ValidPassword() == false){
            echo("reached inside validpassword");


            header("location: ../index.php?error=InvalidPassword");
            exit();
        }


        if($this->invalidEmail() == false ){
            header("location: ../index.php?error=InvalidMailID");
            exit();
        }


        if($this->passmatch() == false ){
            header("location: ../index.php?error=passwords_do_not_match");
            exit();
        }

        if($this->chkTandC() == false ){
            header("location: ../index.php?error=T&C_not_checked");
            exit();
        }

        if($this->chkmobno()==false){
            //header("location: ../index.php?error=MobNO_incorrect");
            exit();
        }

        $this->SetUser($this->uid, $this->pass, $this->tandc, $this->fname, $this->lname, $this->mno);

    }


    private function chkmobno(){
        $result;
        if(!preg_match("/^[1-9]{1}[0-9]{9}$/",$this->mno)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }


    private function emptyInput(){
        $result;
        if(empty($this->uid)||empty($this->pass)|| empty($this->confpass)|| empty($this->tandc) ){
            $result=false;
        }
        else{
            $result = true;
        }
        echo("result in emptyInput: ".$result."<br>");
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->uid, FILTER_VALIDATE_EMAIL))
        {
            $result=false;

        }
        else{
            $result=true;
        }
        echo("result in invalidEmail: ".$result."<br>");
        return $result;
    }
        
    private function invalidEmail_new($uid_new){
        $result;
        if(!filter_var($uid_new, FILTER_VALIDATE_EMAIL))
        {
            $result=false;

        }
        else{
            $result=true;
        }
        echo("result in invalidEmail: ".$result."<br>");
        return $result;
    }
    

    private function ValidPassword(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->pass)){
            $result=false;
        }
        else{
            $result=true;
        }
        echo("result in validPassword: ".$result."<br>");
        return $result;
    }

    private function passmatch(){
        if($this->pass !== $this -> confpass){
            $result=false;
        }
        else{
            $result = true;
        }
        echo("result in passmatch: ".$result."<br>");
        return $result;
    }

    private function checkUser(){
        if(!$this->chkUser($this->uid)){
            $result=false;
        }
        else{
            $result = true;
        }
        echo("result in checkUser: ".$result."<br>");
        return $result;
    }    

private function chkTandC(){
    $result;
    if(isSet($_POST['chs'])){
        $result=true;
    }
    else{
        $result=false;
    }
    echo("result in chkTandC: ".$result."<br>");
    return $result;
}



}
?>