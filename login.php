<php
echo '
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h1>Login</h1>
  <form action="admin.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
