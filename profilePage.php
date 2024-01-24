<?php
   session_start();
   include("connection.php");
   include("functions.php");
   $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <span class="header_text">User Profile</span>
    <a href="index.php#homeid" class="buttons button5">←</a>
    <a href="logoutPage.php" class="buttons button4">LogOut</a>
    <div class="userprofile-container">
      <div class="user-card">
        <div class="user-card-img">
          <img src="images/usersprofile.png" alt="userprofile_picture" />
        </div>
        <div class="user-card-info">
          <h2><?php echo $user_data['user_name']; ?></h2>
          <p><span> Email:</span> loremlorem@gmail.com</p>
          <p><span> Location:</span> London, Bridge is falling down</p>
          <p><span> Occupation:</span> Student</p>
          <p>
            <span>About me: </span> Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Quos quasi exercitationem molestiae esse! Esse
            velit dolor reiciendis dignissimos molestias ipsa, natus officia.
            Laudantium reprehenderit neque quibusdam natus veniam praesentium
            autem odio. Iure ullam nesciunt quasi, sed est asperiores cum,
            assumenda nemo, quo sint accusantium odio sit. Voluptatum
            perferendis labore dolorem?
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
