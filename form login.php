<?php

@include 'config.php';

session_start();

if(isset($_POST['register-btn'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   // Hash the password
   $hashed_password = md5($password);

   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$hashed_password'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'Incorrect email or password!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styleregister.css">

</head>
<body>
   
<div class="form-container">

   <form action="form login.php" method="post">
      <h3>Connecte-toi maintenant</h3>
      <?php
      if(isset($error)){
         foreach($error as $error_msg){
            echo '<span class="error-msg">'.$error_msg.'</span>';
         }
      }
      ?>
      <input type="email" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="register-btn" value="Connexion" class="form-btn">
      <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire maintenant</a></p>
   </form>

</div>

</body>
</html>
