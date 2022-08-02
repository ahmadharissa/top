<link rel="stylesheet" type="text/css" href="../style/echo.css?ver=<?php echo filemtime('../style/echo.css');?>">
<?php
	session_start();

	@$email = trim($_POST['email']) ;
	@$password = trim($_POST['password']) ;

	$db = mysqli_connect('localhost','root','','top');
	mysqli_set_charset($db,'utf_8');

	$query = mysqli_query($db,"SELECT * FROM member WHERE member_email='$email' AND member_password= '$password'");
	$query1 = mysqli_query($db,"SELECT * FROM member WHERE member_email='$email'");

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (mysqli_num_rows($query)>0)
		{
		    while ($obj = mysqli_fetch_object($query))
			{
  				echo "<h1> welcome back ". $obj->member_user_name . " to your site </h1>";
  				$_SESSION['id'] = $obj->member_id ;
  				$_SESSION['user'] = $obj->member_user_name;
  			}

			$_SESSION['email'] = $email ;
			$_SESSION['password'] = $password ;
			header('REFRESH:2;url=search.php');
		}
		else if (mysqli_num_rows($query1)>0)
		{
			echo"<h1> Incorrect password </h1>";
			header('REFRESH:2;url=log in.php');
		}
		else
		{
			echo"<h1> Pleas sign up to log in </h1>";
			header('REFRESH:2;url=sign up.php');
		}
	}
	else
	{
		echo "<h1> You can/'t brwoser this page directly </h1>";
		header('REFRESH:2;url=log in.php');
	}