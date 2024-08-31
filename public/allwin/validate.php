<?php
  if (isset($_POST['submit1'])){

    $link = mysqli_connect("localhost", "root", "", "college");  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email= stripcslashes($email);  
        $password = stripcslashes($password);  
        $email= mysqli_real_escape_string($link, $email);  
        $password= mysqli_real_escape_string($link, $password);  
      
        $sql = "SELECT * from loginout where email = '$email' and passwords = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          $notvalid="Login failed. Invalid username or password.";  
        if($count == 1){  
            echo '<script>window.location = "mark.php"</script>'; 
        }  
        else{  
            echo $notvalid;
        }  

     }      
 ?>
