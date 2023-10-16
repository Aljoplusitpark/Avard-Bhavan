 <?php
    session_start();
  include_once("connection/config.php");  

  if(isset($_POST['submit']))
  {
    $username=$_POST["username"];
    $password=$_POST["password"];
      $sql = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
      
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        echo ("<script LANGUAGE='JavaScript'>
            
            window.location.href='index.php';
            </script>");
        
      }else{
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Invalied Login...');
            window.location.href='login.php';
             </script>");
      }
    }
    
?>