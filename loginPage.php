<?php
    
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

            //read from the database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

           if($result){
              if($result && mysqli_num_rows($result) > 0 ){
              $user_data = mysqli_fetch_assoc($result);
              if($user_data['password'] === $password){
                $_SESSION['user_id'] = $user_data['user_id'];
                if(isset($_POST['remember_me'])){
                  setcookie('user_name', $_POST['user_name'], time()+(60*60*24));
                  setcookie('password', $_POST['password'], time()+(60*60*24));
                }
                header("Location: indexPage.php");
                die;
              }
            }
           }
           echo "<script>alert('Wrong username or password!')</script>";
        }else{
          echo "<script>alert('Wrong username or password!')</script>";
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
          <h1>Login</h1>
          <div class="input-box">
          <input 
              type="text"
              name = "user_name"
              placeholder=" Username"
              required
            />
            <input  type="password" name = "password" placeholder=" Password" required />
          </div>
          <button type="submit" class="buttons">Log In</button>
          <p class="register-link">
            Don't have an account? <a href="registerPage.php"> register now</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
