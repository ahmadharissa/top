<link rel="stylesheet" type="text/css" href="../style/echo.css?ver=<?php echo filemtime('../style/echo.css');?>">
<?php
	session_start();

	@$user = trim($_POST['user']) ;
	@$email = trim($_POST['email']) ;
	@$password = trim($_POST['password']) ;

	$db = mysqli_connect('localhost','root','','top');
	mysqli_set_charset($db,'utf_8');

	$query = mysqli_query($db,"SELECT * FROM member where member_email='$email'");

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (mysqli_num_rows($query)==0)
		{
			mysqli_query($db,"INSERT INTO member (member_user_name,member_email,member_password) VALUES ('$user','$email','$password')");
			echo"<h1> welcome ".$user. " to this site</h1>";
			$query1 = mysqli_query($db,"SELECT * FROM member where member_email='$email'");

		    while ($obj = mysqli_fetch_object($query1))
			{
  				$_SESSION['id'] = $obj->member_id ;
  			}

			$_SESSION['user'] = $user ;
			$_SESSION['email'] = $email ;
			$_SESSION['password'] = $password ;
			header('REFRESH:2;url=home.php');
		}
		else
		{
			echo"<h1> This email already exists </h1>";
			header('REFRESH:2;url=log in.php');
		}
	}
	else
	{
		echo "<h1> You can/'t brwoser this page directly </h1>";
		header('REFRESH:2;url=sign up.php');
	}