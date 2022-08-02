function cancel()
{
	var bool =window.confirm("are you sure to cancel this form");
	if (bool)
	{
		document.getElementById('user').value="";
		document.getElementById('email').value="";
		document.getElementById('password').value="";
		document.getElementById('confirm_pass').value="";
		window.location.assign("../pages/home.php");
	}
}

var password = document.getElementById("password") ;

function valiDate()
{
	if (password.length <= 7)
	{
		password.setCustomValidity("Must be greater then 6 number + letter");
	}
}