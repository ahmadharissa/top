<?php include'include.php' ?>
<!Doctype html>
<html>

<head>
    <meta charset="utf_8">
    <link rel="stylesheet" type="text/css" href="../style/home.css?ver=<?php echo filemtime('../style/home.css');?>"
        media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <header class="parent">
        <a class="top" href="#">Top</a>
        <nav>
            <a href="#">Home</a>
            <a href="search.php">Search</a>
            <a href="contact us.php">Contact us</a>
            <?php include'include1.php' ?>
        </nav>
    </header>
    <br><br>

    <p>This website <a href="#"><span class="top">Top</span></a> gives for users the best 20 programs in the
        <b>World</b> , But all you have to do is write a name to search for this content in the search field.<b>Thank
            you</b></p>

    <div>
        <img src="../image/best2.jpg" alt="top" style="width:60%">
    </div>
    <p>Can you use this website to searche any operating System in laptop app:</p>
    <ol>
        <li>Windows</li>
        <li>Apple</li>
        <li>Mac</li>
        <li>Linux</li>
        <li>Hackintosh</li>
    </ol>

    <div>
        <img src="../image/os.jpg" alt="top" style="width:60%">
    </div>
    <p> and Phone app:</p>
    <ol>
        <li>Android</li>
        <li>Apple</li>
        <li>Nokia</li>
    </ol>

    <div>
        <img src="../image/best1.jpg" alt="top" style="width:60%">
    </div>
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