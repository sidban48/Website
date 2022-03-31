window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    number= ("+91"+number);
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        $("#verificationCode").css("border","solid 5px green");
        alert("Successfully registered");
        $('#ch').show();
        $('#tandc').show();
        $('#tandc').css('display','inline-block');
        var user=result.user;
        console.log(user);
        return 1;
    }).catch(function (error) {
        $("#verificationCode").css("border","solid 5px red");
        $('#ch').hide();
        alert(error.message);
        return 0;
    });
}