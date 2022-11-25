<?php
$conn = mysqli_connect('localhost','root','','blog');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if($email != "" && $password != ""){
        $query ="SELECT * FROM `sign_up` WHERE email = '".$email."'  AND password = '".$password."'";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "done";
    }else{
        echo "not done";
    }

    }
    else{
        echo '<script>
    alert("please filled data")
    </script>';
    
    }
    
    
}



?>