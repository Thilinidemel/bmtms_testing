<!DOCTYPE html>
<html>
<head>
    <!--give page title-->
    <title>LOGIN</title>
    <!--attach css file-->
    <link rel="stylesheet" href="text/css" href="style.css">
</head>
<body>
  <!--main frame-->
  <div class="main">
    <!--left side of main frame-->
    <div class="left_side">
      <!--title-->
      <h1 align=center>WELCOME BACK</h1>
      <!--subtitle-->
      <h4 align=center>Welcome back! Please enter your details.</h4>
      <!--create a form-->
      <form class="login_form" action="index.html" method="post">
      <!--labels for user name and password-->
      <div class="un_div">
        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name">
      </div>
      <div class="pass_div">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
      <!--remember me checkbox-->
      <!--forgot password link-->
      <!--sign in button-->
      <button type="submit" name="signin">Sign in</button>
      <!--create account link-->
      </form>
      <!--signature-->
    </div>
    <!--right side of main frame-->
    <div class="right_side">
      <!--image file-->
      <img src="https://images.pexels.com/photos/8798942/pexels-photo-8798942.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image doesn't load. Please refreash ypur browser.">
    </div>
  </div>
</body>
</html>
