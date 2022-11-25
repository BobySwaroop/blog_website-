<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign up</title>
    <!-- include boostrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 800px;
  height: 760px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}
option{
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}
input[type="number"]{
  display: block;
  box-sizing: border-box;
  
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  margin-top:-20px;
  margin-bottom:-24px;
  transition: 0.2s ease;
}

input[type="text"]:focus,input[type="number"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 64px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;      
  transition: 0.1s ease;
  cursor: pointer;
  margin-left:285px;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 519px;
  left: 357px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 540px;
  right: 270px;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}
p{
    font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  margin-top: 30px;
  
  /* transition: 0.2s ease; */
}
.cty{
    
    font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  
  
  /* transition: 0.2s ease; */

}
.ss{
    display: flex;
}
.mm{
    margin-left: 200px;
    margin-top: -11px;
}
/* span{
  display:none;
} */
/* select field style */
.custom-select{
  position: relative;
  display: block;
  max-width: 400px;
  min-width: 180px;
  margin: 0 auto;
  border: 1px solid #3C1C78;
  background-color: #16013E;
  z-index: 10;

}

  
  select{
    border: none;
    border-bottom: 1px solid #AAA;
    outline: none;
    background: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    margin: 0;
    display: block;
    width: 100%;
    padding: 12px 55px 15px 15px;
    font-size: 14px;
    color: #714BB9;

  }
  #cty{
    margin-bottom:11px;
    color: #827D7D;
    padding-left: 0;
  }
    
  
  &:after{
    position: absolute;
    right: 0;
    top: 0;
    width: 50px;
    height: 100%;
    line-height: 38px;
    content: '\2228';
    text-align: center;
    color: #714BB9;
    font-size: 24px;
    border-left: 1px solid #3C1C78;
    z-index: -1;
  }
  .ct{
    border-bottom: 1px solid #AAA;
    color: #AAA;
    

  }
  #count{
    color:#827D7D;
    padding-left:0;
    margin-bottom: -6px;

  }
  input[type="date"]{
    border:none;
    border-bottom: 1px solid #827D7D;
    width: 258px;
    padding: 3px;
    font-size: 15px;
    color:#827D7D;
  }
  input[type="mail"]{
    margin-top:20px;
    margin-bottom:-24px;
  }
  input[type="file"]{
    font-size: 14px;
    border-bottom: 1px solid #aaa;
    margin-top: 4px;
    color:#aaa;
  }
  .reg{
    margin-top: -12px;
    margin-top: 4px;
    font-size:14px;
    color:#827D7D;
}
.lodate{
  margin-top:7px;
  font-size: 14px;
  color:#827D7D;
}
.name_check{
  display:flex;
}
#valid_mail{
  padding:0;
  margin-top:0px;
  height:8px;
  width:200px;
}
#eml{
  margin-bottom:0px;
}
#txt{
  margin-bottom:2px;
}
#u_small{
  margin-top:0px;
  height:8px;
  width:200px;
  

}
#valid_pass{
  padding:0;
  margin-top:0px;
  height:8px;
  width:200px;
}
#pass{
  margin-top:2px;
  margin-bottom:2px;
}
#valid_phone{
  margin-top:0px;

}
.numb{
  margin-top:2px;
}
.namefield{
margin-bottom:2px;
}
.emailfield{
padding-top:8px;
}
.passfield{
  padding-top:4px;

}
/* model styling */
#model{
  height:290px;
  width:370px;
  top:40px;
  position:absolute;
  display:none;
  border-radius:5px;
  background-color:#f7f7c6;
  box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}
#pop-up{
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
.show{
  width:370px;
  border-radius: 5px;
  padding:15px;
}
.error-msg{
  background-color:#f2dedf;
  color:#9c4150;
  height:290px;
  width:370px;
  top:40px;
  position:absolute;
  /* display:none; */
  border-radius:5px;
  box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}
.success{
  background-color:#e0efda;
  color:#407a4a;
}




    </style>
</head>
<body>
    <form name="myform" method="post" action="" id="myform" enctype="multipart/form-data">
      <div class="container">
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>

<div class="ss">
    <div>
      
   <div class="namefield"> <input type="text" name="username" id="txt" placeholder="Username" /> <div id ="u_small"></div></div>
   <div class="emailfield"> <input type="text" name="email" id="eml" placeholder="E-mail" /><div id="valid_mail"></div></div>
   <div class="passfield"> <input type="password" name="password" id ="pass" placeholder="Password" /><div id="valid_pass"></div></div>
    
    <p>  Gender </p><input type="radio" name="gender" id="male" value="male" />Male

<input type="radio" name="gender" id="female" value="female"/>Female
<br>
<div class="numb"><p>Phone No</p><input type="number" name="number" id="nmy"><br><div id="valid_phone"></div></div>



    </div>
    <div class="mm">


</select>
<select name="country" id ="count">
    <option value="Choose">Choose your country</option>
    <option value="India">India</option>
    <option value="Australia">Australia</option>
    <option value="England">England</option>

</select>
<select name='city' id="cty">
   <option class="ct" value='Select an option' >Select your city</option>
    <option class="ct" value='lucknow' >Lucknow</option>
    <option class="ct" value='sitapur' >Sitapur</option>
    <option class="ct" value='allahabad'>Allahabad</option>
    
    </select>

   
    
    
<div class="rg">
    <p class="reg">Registration Date</p><input type="date" id="reg" name="registration_date"><br>
<p class="lodate">Last Date of Login</p><input type="date" id="last" name="last_date_of_login"><br><br>


<input type="file" name="img" id="pic" accept="image/*"><br>


    </div>
    </div>
</div>




   
   
    
    <div id="btn"><button id="button" value="Sign me up">Sign up me</button></div><br><br>
  </div>
</form>
<div class="or">OR</div><br>
  <div class="right">

    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
     
   
    
  </div>
  <div id="show"></div>
</div>

<!-- model create -->
<div id="model">
  <div id="pop-up">
    please fill the form value
  </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- send form data through ajax serialize form method -->
<script>
  $("#btn").click(function(){
    var name = $("#txt").val();
    var email = $("#eml").val();
    var password =$("#pass").val();
    var number =$("#nmy").val();
    var city = $("#cty").val();
    var country =$("#count").val();
    var file =$("#pic").val();
    var reg =$("#reg").val();
    var last =$("#last").val();
    if(name == "" || email == "" || password == "" || number == "" || city == "" || country == "" || file == "" || reg =="" || last == "" || $('input:radio[name=gender]'.is(':checked'))){
      $("#show").fadeIn();
      $("#show").addClass('error-msg').html('all field are required');
    }
  else {
    $.ajax({
      url:'registration.php',
      type:'post',
      data: $("#myform").serialize(),
      success: function(response){
        if(response==0){
          console.log('show');
        }
        $("#show").fadeIn();
        $('#show').addClass('success').html(response);
        $("#show").addClass('error-msg').html('all field are required')
        setTimeout(function(){
          $("#show").fadeOut("slow");
        },4000);
        alert('data send');
      }
      });
      } 

  })
</script>
<script>
// check username  has been exist or not

$(document).ready(function(){
  $("#txt").blur(function(){
    var username =$(this).val();
    $.ajax({
      url:'registration.php',
      type:'POST',
      datatype:'text',
      data: 'username=' +username,
      success: function(data){
        console.log(data)
        if(data== 1){
          $("#u_small").html("username is exist");
        }
        else if(data== 0){
          $("#u_small").html("username is not exist");
        }        
      }
    })
  })

})
// username check has been close

  // name check


  function valid(){
    var ptrn =/^([^0-9\W]*)$/;

    if(ptrn.test(document.myform.username.value)){

      document.getElementById("u_small").style.display ="block";
        document.getElementById("u_small").textContent = "name is valid";
          document.getElementById("u_small").style.color = 'green';
          document.getElementById("u_small").style.fontSize = '12px';  
          if(document.myform.username.value==""){
            document.getElementById("u_small").textContent = " ";

          }    
    }
    
    else{
      document.getElementById("u_small").textContent = "name is invalid";
      document.getElementById("u_small").style.color = 'red';
      document.getElementById("u_small").style.fontSize = '12px';
      if(document.myform.username.value==""){
            document.getElementById("u_small").textContent = " ";

          } 
    }
  }
      // email check
  function email_valid(){
    var ptrn =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(ptrn.test(document.myform.email.value)){
          document.getElementById("valid_mail").textContent = "mail is valid";
          document.getElementById("valid_mail").style.color = 'green';
          document.getElementById("valid_mail").style.fontSize = '12px';
          if(document.myform.email.value==""){
            document.getElementById("valid_mail").textContent = " ";

          }
    }
    else{
      document.getElementById("valid_mail").textContent = "mail is invalid";
      document.getElementById("valid_mail").style.color = 'red';
          document.getElementById("valid_mail").style.fontSize = '12px';
          if(document.myform.email.value==""){
            document.getElementById("valid_mail").textContent = " ";

          }
    }
  }
  // password check
  function pass_valid(){
    var ptrn =/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;

    if(ptrn.test(document.myform.password.value)){
          document.getElementById("valid_pass").textContent = "password is valid";
          document.getElementById("valid_pass").style.color = "green";
          document.getElementById("valid_pass").style.fontSize = '12px';
          if(document.myform.password.value==""){
            document.getElementById("valid_pass").textContent = " ";
          }

    }
    else{
      document.getElementById("valid_pass").textContent = "password is invalid(minium 6 and maximum 16 char is accept)";
      document.getElementById("valid_pass").style.color = "red";
          document.getElementById("valid_pass").style.fontSize = '12px';
          if(document.myform.password.value==""){
            document.getElementById("valid_pass").textContent = " ";
          }
    }
    
  }
  // phone_no check
  function phone_no_valid(){
    var ptrn =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

    if(ptrn.test(document.myform.number.value)){
          document.getElementById("valid_phone").textContent = "phoneno is valid";
          document.getElementById("valid_phone").style.color = "green";
          document.getElementById("valid_phone").style.fontSize = '12px';
          if(document.myform.number.value==""){
            document.getElementById("valid_phone").textContent = " ";
          }

    }
    else{
      document.getElementById("valid_phone").textContent = "phoneno is invalid";
      document.getElementById("valid_phone").style.color = "red";
          document.getElementById("valid_phone").style.fontSize = '12px';
          if(document.myform.number.value==""){
            document.getElementById("valid_phone").textContent = " ";
          }
    }
  }

  document.myform.username.addEventListener("keyup", valid);
  document.myform.email.addEventListener("keyup", email_valid);
  document.myform.password.addEventListener("keyup", pass_valid);
  document.myform.number.addEventListener("keyup", phone_no_valid);
 
</script>
<!-- model functionality -->
<?php
// include('index.php');
include("registration.php");
?>

</html>