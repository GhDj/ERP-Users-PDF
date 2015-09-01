<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>



    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="/css/style.css">




  </head>

  <body>
<br><br><br><br><br>
    <div class="login-card">
    <h1>Register</h1><br>
  <form method="POST" action="/auth/register">

      {!! csrf_field() !!}


    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="role" placeholder="Role">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Password confirmation">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="/auth/login">Log-in</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>





  </body>
</html>
