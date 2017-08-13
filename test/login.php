
<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.min.js">
        </script>
    </head>
<body>
    <form action="logging.php" method="post" >
        
       username: <input type="text" name="uname" >
       password: <input type="text" name="pass" >
       <input type="submit" value="login">
        
    </form>
    <br>
        
    <form action="logging.php" method="post">
        
        mobile no :<input type="text" name="mobile" max="10" maxlength="10" pattern="[0-9]+" title="Mobile number" required> <br><br>
        password  :<input type="password" name="pass" required> <br><br>
        retype      :<input type="password" name="re-pass" required><br><br>
        name  :<input type="text" name="name"  />
        
        <input type="submit" value="sign up" /> 
        
        
        
    </form>
        
</body>
</html>