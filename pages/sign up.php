<!Doctype html>
<html>

<head>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css"
        href="../style/sign up.css?ver=<?php echo filemtime('../style/sign up.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../javascript/sign up.js"></script>
    <script src="../JQuery/jquery-3.5.1.min.js"></script>
</head>

<body>

    <header class="parent">
        <a class="top" href="home.php">Top</a>
        <nav>
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="contact us.php">Contact us</a>
            <a target="_self" href="#">Sign up</a>
            <a target="_self" href="log in.php">Log in</a>
        </nav>
    </header>
    <br><br><br>

    <form method="post" action="sign up(action).php">
        <table class="tabl">
            <tr>
                <td>User_name:</td>
                <td><input type="text" placeholder="Enter User name" name="user" id="user" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" placeholder="Enter email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" placeholder="Enter Password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" placeholder="Enter Password" name="confirm_password" id="confirm_password"
                        required></td>
            </tr>
            <tr>
                <td> <br> </td>
                <td> <br> </td>
            </tr>
            <tr>
                <td colspan="2"><input class="type" type="reset" value="cancel"><input class="type" type="submit"
                        value="Send"></td>
            </tr>
        </table>
    </form>
    <br><br>

    <footer class="child">
        <table cellpadding="7px">
            <tr>
                <td><img class="round" src="../image/location.jpg" alt="location" width="20%"></td>
                <td><img class="round" src="../image/Phone.jfif" alt="location" width="20%"></td>
                <td><img class="round" src="../image/email.jpg" alt="location" width="15%"></td>
            </tr>
            <tr>
                <td class="paragraph">Lebanon, Beirut,EL Matar</td>
                <td class="paragraph">+961 71276017</td>
                <td class="paragraph">ahmadharissa25@gmail.com</td>
            </tr>
        </table>
    </footer>

    <script type="text/javascript">
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

    function confirm() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else
            confirm_password.setCustomValidity('');
    }
    password.onchange = confirm;
    confirm_password.onkeyup = confirm;

    $(document).ready(function() {
        $(".tabl").slideDown(2000);
    });
    </script>
</body>

</html>