<html>
<head>
    <title>Public User</title>
    <style>
        body {
            font-family: Arial;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            border: 1px solid black;
            background-color: #c7bdd1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }

        .left {
            width: 40%;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
        }

        .right a {
            text-decoration: none;
            color: black;
            display: block;
        }

        .right a:hover {
            background-color: #a99bbd;
        }
    </style>
</head>

<body>

<div class="container">
    <table>
        <tr>
            <td class="left" rowspan="4">
                <b>Public User</b>
            </td>
            <td class="right"><a href="PublicHome.php">Public Home</a></td>
        </tr>
        <tr>
            <td class="right"><a href="Registration.php">Registration</a></td>
        </tr>
        <tr>
            <td class="right"><a href="Login.php">Login</a></td>
        </tr>
        <tr>
            <td class="right"><a href="">Forgot Password</a></td>
        </tr>
    </table>
</div>

</body>
</html>