<?php

function check_login($mysqli)
{

	if(isset($_SESSION['email']))
	{

		$id = $_SESSION['email'];
		$query = "select * from users where email = '$id' limit 1";

		$result = mysqli_query($mysqli,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	
	header("Location: log in.php");
	die;

}