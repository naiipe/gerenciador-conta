<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body style="background-color: gray">
        <fieldset  style="font-family: Tahoma, Geneva, sans-serif">
            <legend><h3>Login</h3></legend>
            <form action="/gerenciador-conta/controller/Home.php" method="post">
                <label for="email">Email: </label><br>
                <input id="email" name="email" type="email" required><br>
                <label for="password">Password: </label><br>
                <input id="password" name="password" type="password" required><br>
                <button name="login" type="submit" value="HTML">Login</button>
            </form>
        </fieldset>
    </body>
    </html>