<?php
$conn = mysqli_connect('localhost','root','','blog');
 
// check if username is exist or not
if(isset($_POST['username'])){
  $query = "SELECT * FROM sign_up WHERE user_name = '".$_POST['username']."'";
  $res =mysqli_query($conn,$query);
  if(mysqli_num_rows($res)>0){
     echo '<div class="u_small">user name is already exist</div>';
  
  }
  else{
      echo '<div class="u_small">user name is available </div>'; 
  }

}
?>-