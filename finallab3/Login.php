<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial;
        }

        .main {
            width: 100%;
            margin: auto;
            border: 1px solid black;
        }

        .header {
            padding: 15px;
            border-bottom: 1px solid black;
        }

        .nav {
            float: right;
        }

        .content {
            padding: 20px;
        }

        fieldset {
            width: 400px;
            margin: auto;
        }

        input[type="text"], input[type="password"] {
            width: 200px;
        }

        .footer {
            text-align: center;
            border-top: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="main">

    
    <div class="header">
        <b>X Company</b>

        <span class="nav">
            <a href="Publicuser.php">Home</a> |
            <a href="Login.php">Login</a> |
            <a href="Registration.php">Registration</a>
        </span>
    </div>

    
    <div class="content">
        <form>
            <fieldset>
                <legend><b>LOGIN</b></legend>

                User Name: <input type="text"><br><br>
                Password: <input type="password"><br><br>
                <input type="checkbox" name="" value="" >Remember Me
                <br>
                <input type="submit" value="Submit">
                <a href="">Forgot Password?</a>
            </fieldset>
        </form>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>