<link rel="stylesheet" type="text/css" href="../style/echo.css?ver=<?php echo filemtime('../style/echo.css');?>">
<?php
	session_start();	

	@$user_id = $_SESSION['id'];	
	@$title = trim($_POST['title']);
	@$description = trim($_POST['description']) ;

	$db = mysqli_connect('localhost','root','','top');
	mysqli_set_charset($db,'utf_8');
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (@isset($user_id))
		{
			mysqli_query($db,"INSERT INTO issue(issue_title,issue_description,member_id) VALUES ('$title','$description','$user_id')");
			echo"<h1>I will reply coming soon <br> Thanks<h1>";
			header('REFRESH:2;url=contact us.php');
		}
		else
		{
			echo"<h1> Pleas log in to contuct us <h1>";
			header('REFRESH:2;url=log in.php');
		}
	}
	else
	{
		echo "<h1> You can/'t brwoser this page directly </h1>";
		header('REFRESH:2;url=sign up.php');
	}