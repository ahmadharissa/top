<?php
	session_start();

	if ( @isset($_SESSION['id']) )
	{
		$id = $_SESSION['id'] ;
	}
	else
		header('location:log in.php');
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css"
        href="../style/sign up.css?ver=<?php echo filemtime('../style/sign up.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../javascript/contact us.js"></script>
</head>

<body>

    <header class="parent">
        <a class="top" href="home.php">Top</a>
        <nav>
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="#">Contact us</a>
            <?php include 'include1.php' ?>
        </nav>
    </header>
    <br><br><br>

    <form method="post" action="contact us(action).php">
        <table class="tabl">
            <tr>
                <td>Title: <br> <textarea cols="20" rows="1" id="title" name="title" required></textarea></td>
            </tr>
            <tr>
                <td>Description: <br> <textarea cols="40" rows="10" id="description" name="description"
                        required></textarea></td>
            </tr>
            <tr>
                <td> <br> </td>
            </tr>
            <tr>
                <td><input class="type" type="reset" value="Cancel"><input class="type"
                        type="submit" value="Send"></td>
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