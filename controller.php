<?php

/**
* <controller.php>
* @param array $posted_data = [$_POST['username'], $_POST['password']]
* @return array
*/

function filterRequest($posted_data)
{
	$username = trim($posted_data['username']);
	$password = trim($posted_data['password']);
	return [$username, $password];
}

?>