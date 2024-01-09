<?php
    
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
           // check if username already exists
           $check_query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
           $result = mysqli_query($con, $check_query);

           if(mysqli_num_rows($result) > 0){
               echo "<script> alert('Username already exists. Try a different username or Log in.')</script>";
           }else{
              //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";
            
            mysqli_query($con, $query);
            header("Location: loginPage.php");
            die;
           }
            
        }else{
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Gaklat BookShop!</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="userlogin_container">
      <div class="welcomeBar">
        <img src="images/logo.png" class="welcomelogo" />
        <span class="welcometext">Welcome to Gaklat BookShop</span>
      </div>
      <div class="loginWrapper">
        <form method="post">
          <h1>Register</h1>
          <div class="input-box">
            <input
              type="text"
              name = "user_name"
              placeholder=" Enter username"
              required
            />
            <input type="password"  name = "password" placeholder=" Enter password" required />
          </div>
         <button type="submit" class="buttons">Register Now</button>
          <p class="register-link">
            already have an account? <a href="loginPage.php"> login now</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
