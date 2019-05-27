<?php

/**
* <model.php>
*/

/**
* @param int $count
* @return array
*/

function database($count)
{
	$dataStorage = array( 
		'userid1' => array('username' => 'username1', 'password'=>'password1'),
		'userid2' => array('username' => 'username2', 'password'=>'password2'),
		'userid3' => array('username' => 'username3', 'password'=>'password3'),
		); 
	return  ($count < count($dataStorage) + 1 )? $dataStorage['userid'.$count]: [];
}

/**
* @param array $userinfo
* @return boolean
*/

function getResponse($userinfo)
{
	$response = false;
	$count = 1;
	while($data = database($count++))
	{
		if ($data == $userinfo)
		{
			$response = true;
			break;
		}
	}
	return $response;
}	


/**
* @param string $username $password
* @return string
*/

function retreatResponse($uname, $pw)
{
	$user_info = array('username' => $uname, 'password'=> $pw);
	if(getResponse($user_info))
	{
	 	return 'granted';
	}
	return 'denied';
}

?>