
<?php 
require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="container" style="padding-top: 50px;">
            <div id="slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel" style="margin-top: 50px;">
              <ol class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Cara1.jpg" class="d-block mx-auto" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img src="images/Cara2.jpg" class="d-block mx-auto" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img src="images/Cara3.jpg" class="d-block mx-auto" alt="Third slide">
              </div>
          </div>
    </div>

</div>
<div class="h-40 center-me">
    <div class="my-auto">
        <form class="forms-signin" action="includes/login-helper.php" method="post" style="background: white;">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Username or Email Address</label>
            <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3" style="margin: 10px;" style="text-align: left;">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
              </label>
          </div>
          <button class="btn btn-lg btn-success btn-block" name="login-submit" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
      </form>
  </div>
</div>
</div>
</main>