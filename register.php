<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>register test</title>
    </head>
    <body>
        <form method="post" action="check.php">
            <p>ID : <input type="text" name="id" required /></p>
            <p>PW : <input type="password" name="pw" required /></p>
            <p>E-mail : <input type="email" name="email" required /></p>
            <p>Address : <input type="text" name="addr" /></p>
            <p>Sex : <input type="radio" name="sex" value="male" />Male <input type="radio" name="sex" value="female" /> Female</p>
            <input type="submit" value="register" />
        </form>
    </body>
</html>