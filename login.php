<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h2>Login Page</h2>
    <a href="Soliva.php">Click here to go back</a><br/><br/>
    <form action="checklogin.php" method="post">
      Enter Username: <input type="text" name="username" required="required"/> <br/>
      Enter Password: <input type="password" name="password" required="required" /> <br/>
      <input type="submit" value="Login"/>
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST METHOD"] == "POST") {
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);


}
?>