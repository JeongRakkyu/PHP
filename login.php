<!DOCTYPE html>
<html>
    <head>
        <title>login test</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p>ID : <input type="text" name="id" required/></p>
            <p>PW : <input type="password" name="pw" required/></p>
            <input type="submit" value="Login">
        </form>
    </body>
</html>