function cancel()
{
	var bool =window.confirm("are you sure to cancel this form");
	if (bool)
	{
		document.getElementById('title').value="";
		document.getElementById('description').value="";
		window.location.assign("../pages/home.php");
	}
}