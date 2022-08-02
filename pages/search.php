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
    <link rel="stylesheet" type="text/css" href="../style/Search.css?ver=<?php echo filemtime('../style/Search.css');?>"
        media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <header class="parent">
        <a class="top" href="home.php">Top</a>
        <nav>
            <a href="home.php">Home</a>
            <a href="#">Search</a>
            <a href="contact us.php">Contact us</a>
            <?php include'include1.php' ?>
        </nav>
    </header>
    <br><br><br>

    <?php
	$db = mysqli_connect('localhost','root','','top');
	mysqli_set_charset($db,'utf_8');
    $query = mysqli_query($db,"SELECT search_data_language FROM search_data");
	echo"<form method='Post' action='Search(action).php'>";
    echo "<select id='selected' name='selected'>";
        $array=[];
		while ($fetchedarray = mysqli_fetch_array($query))
            { $val=$fetchedarray['search_data_language'];
                if (!in_array($val,$array))
				{   
                    array_push($array,$val);
                    echo "<option value=" . $val . ">";
                    echo $val;
                    echo "</option>";
                }		
            }
    echo "</select>";
	echo "<input class='type' type='submit' value='Search' >";
	echo "</form>";	
	?>

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