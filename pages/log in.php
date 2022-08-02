<!Doctype html>
<html>

<head>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css"
        href="../style/sign up.css?ver=<?php echo filemtime('../style/sign up.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../javascript/log in.js"></script>
    <script src="../JQuery/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".tabl").slideDown(2000);
    });
    </script>
</head>

<body>

    <header class="parent">
        <a class="top" href="home.php">Top</a>
        <nav>
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="contact us.php">Contact us</a>
            <a target="_self" href="sign up.php">Sign up</a>
            <a target="_self" href="#">Log in</a>
        </nav>
    </header>
    <br><br><br>

    <form method="post" action="log in(action).php">
        <table class="tabl">
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" placeholder="Enter email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="password" placeholder="Enter Password" name="password" required></td>
            </tr>
            <tr>
                <td> <br> </td>
                <td> <br> </td>
            </tr>
            <tr>
                <td colspan="2"><input class="type" type="reset" value="Cancel"><input class="type"
                        type="submit" value="Log in"></td>
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

</body>

</html>