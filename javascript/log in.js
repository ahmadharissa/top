function cancel()
{
	var bool =window.confirm("are you sure to cancel this form");
	if (bool)
	{
		document.getElementById('email').value="";
		document.getElementById('password').value="";
		window.location.assign("../pages/home.php");
	}
}