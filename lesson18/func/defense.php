<?php 

function defense()
{
	if($_SESSION['user_id']) {
		return true;
	}

	else {
		return false;
	}
}


 ?>