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
                <legend><b>REGISTRATION</b></legend>

                Name: <input type="text"><br><br>
                Email: <input type="text"><br><br>
                User Name: <input type="text"><br><br>
                Password: <input type="password"><br><br>
                Confirm Password: <input type="password"><br><br>

                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="g"> Male
                    <input type="radio" name="g"> Female
                    <input type="radio" name="g"> Other
                </fieldset>
                <br>
                <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="date" id="dob">
                </fieldset>
                <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </fieldset>
        </form>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>