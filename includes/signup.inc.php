<?php
// echo("hi");

if(isset($_POST["uid"]))
{
    //header("location ../Tindog%20PHP/index.php?error=none");
    //echo ("signup button is set");
    $uid = $_POST["uid"];
    echo ("uid = ".$uid."<br>");
    $pass = $_POST["password"];
    //echo ("pass = ".$pass."<br>");
    $confpass = $_POST["confpass"];
    //echo ("confpass = ".$confpass."<br>");
    $tandc = $_POST['chs'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mno = $_POST['mnumber'];
    echo ("<br>mnumber = ".$mno."<br>");
    echo("sid is here inside php");

    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup-cntr.classes.php';
    $signup = new SignUpCntr($uid,$pass,$confpass,$tandc,$fname,$lname,$mno);

    $signup -> signupuser();

    // echo("inserted successfully");
    header("location: ../index.php?error=none");
    //header("location: ../index.php?error=none");

}
else{
    console.log("sid is not here");
}
?>
