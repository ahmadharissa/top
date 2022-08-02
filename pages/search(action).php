<link rel="stylesheet" type="text/css" href="../style/search(action).css?ver=<?php echo filemtime('../style/Search(action).css');?>">
<?php

	@$select = trim($_POST['selected']) ;

	$db = mysqli_connect('localhost','root','','top');
	mysqli_set_charset($db,'utf_8');

	$query = mysqli_query($db,"SELECT * FROM search_data WHERE search_data_language ='$select'");

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (mysqli_num_rows($query)>0)
		{
			$query1 = mysqli_query($db,"SELECT * FROM search_data where search_data_language = '$select'");
			echo "<h1> " .$select. "</h1>";

		    while ($obj = mysqli_fetch_object($query1))
			{
				echo "<div><img src='../image/search/". $obj->search_data_image . "' width='100px' ></div>";
				echo "<h2> ". $obj->search_data_name . " </h2>";
  				echo "<p> ". $obj->search_data_description . " </p>";
  				echo "<div><a href='" .$obj->search_data_download. "'> <img src='../image/download.png' width='100px'></a></div>";
  				echo "<hr>";
  			}
		}
	}
	else
	{
		echo "<h1> You can/'t brwoser this page directly </h1>";
		header('REFRESH:2;url=home.php');
	}