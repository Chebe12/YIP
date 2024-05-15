<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>User Registration Form</title>
</head>
<body>
<div class="wrapper">
  <div class="registration_form">
    <div class="title">User Registration Form</div>
    <ul>
    <li><?php echo "$errors" ?></li>
</ul>
    <form action="process_registration.php" method="post">
      <div class="form_wrap">
        <div class="input_wrap">
          <label>First Name</label>
          <input type="text" name="username" id="fname" />
        </div>
        <div class="input_wrap">
          <label>Email Address</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="input_wrap">
          <label>Password</label>
          <input type="password" name="password" id="password" />
        </div>

        <div class="input_wrap">
          <input type="submit" value="Register Now" class="submit_btn" />
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
