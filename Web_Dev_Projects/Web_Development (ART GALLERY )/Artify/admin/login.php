<?php
  include("db.php");
  session_start();
  
  if(isset($_POST['submit'])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
      
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      
      $password=md5($password); 
      
      $sql="SELECT id FROM artist WHERE username='$username' and password='$password'";
      
      $result=mysqli_query($db,$sql);
      $count=mysqli_num_rows($result);
  
      
      if($count==1){
        $_SESSION['login_user']=$username;
        header("location: index.php");
      }else{
        $error="Your Username or Password is invalid";
        echo $error;
      }
    }
  }else{
     header("location: loginform.php");
  }
?>
