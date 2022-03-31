
//sign up email verification
$(document).ready(function() { 
  $("#inputEmail").on("focus",function() {
    $(this).css('border', 'none'); 
   })
   $("#inputEmail").on("focusout",function() {
    if($(this).val()=='') { 
            $(this).css('border', 'solid 5px red'); 
        }
    else if($(this).val().match(/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+\.com$/)){
      $(this).css('border', 'solid 5px green');
    }
    else{
      $(this).css('border', 'solid 5px red');
    }
   })
}); 

//sign up password verification



//sign up conf pass verification

  $(document).ready(function() { 
    $("#inputConfirmPws").on("focus",function() {
      $(this).css('border', 'none'); 
     })
      $("#inputConfirmPws").on("focusout",function() {
       if($(this).val()=='') { 
               $(this).css('border', 'solid 5px red'); 
           }
      else if($(this).val()==$("#inputPws").val()){
          $(this).css('border', 'solid 5px green');
       }
       else{
         $(this).css('border', 'solid 5px red');
       }
     })
  }); 
//sign up First name verification
  
  $(document).ready(function() { 
    $("#fname").on("focus",function() {
      $(this).css('border', 'none'); 
     })
      $("#fname").on("focusout",function() {
       if($(this).val()=='') { 
               $(this).css('border', 'solid 5px red'); 
           }
      else if($(this).val().match(/^[a-zA-Z]*$/)){
          $(this).css('border', 'solid 5px green');
       }
       else{
         $(this).css('border', 'solid 5px red');
       }
     })
  }); 
  
//sign up Last Name verification
  
  $(document).ready(function() { 
    $("#lname").on("focus",function() {
      $(this).css('border', 'none'); 
     })
      $("#lname").on("focusout",function() {
       if($(this).val()=='') { 
               $(this).css('border', 'solid 5px red'); 
           }
      else if($(this).val().match(/^[a-zA-Z]*$/)){
          $(this).css('border', 'solid 5px green');
       }
       else{
         $(this).css('border', 'solid 5px red');
       }
     })
  }); 

//sign up mobile verification  
  
  $(document).ready(function() { 
    $("#number").on("focus",function() {
      $(this).css('border', 'none'); 
     })
      $("#number").on("focusout",function() {
       if($(this).val()=='') { 
               $(this).css('border', 'solid 5px red'); 
           }
      else if($(this).val().match(/^\d{10}$/)){
          $(this).css('border', 'solid 5px green');
          $("#recaptcha-container").css('display','inline-block');
          $("#sendotpbtn").css("display","block");
          $("#vrfycdlbl").css("display","inline-block");
          $("#verificationCode").css("display","inline-block");
          $("#vrfycdbtn").css('display','inline-block');
       }
       else{
         $(this).css('border', 'solid 5px red');
       }
      })
  }); 
  
//sign up T&C checkbox verification
  
  function valueChanged()
  {
      if($('#ch').is(":checked"))  {
          $("#notandc").hide();
          $("#sgnbtn").show();
      }
      else{
          $("#sgnbtn").hide();
          $("#notandc").show();
      }
  }


  function phoneAuth() {
    //get the number
    var number = document.getElementById('mnumber').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, widgetId1).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function(error) {
        alert(error.message);
    });
}
