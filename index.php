<?php

/**
* <index.php>
* This is the file that needs to execute
* This file contains all the three parts of the MVC pattern
* MVC is the subdirectory/folder where all the files are placed
*----------------------------------------------------------
* @author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 25th May 2019
*----------------------------------------------------------
*/

require_once __DIR__.'/../MVC/controller.php';
require_once __DIR__.'/../MVC/model.php'; 

print<<<__USER
	<h2 style="color:gray;"> Your Access In Auditorium: </h2>
	<form method='POST' action='$_SERVER[PHP_SELF]'>
	<label for='username'>User Name:
	<input type="text" name='username'>
	</label>
	<label for='password'>User Password:
	<input type="text" name='password'>
	</label>
	<input type='submit' value='Submit'>
	</form>
__USER;

// get the input from client/user through route/http

if ($_SERVER['REQUEST_METHOD']=='POST')
{	
	[$username, $password] = filterRequest($_POST);

	// send the filtered data to the model
	// receive the response from the model
	$response = retreatResponse($username, $password);

	// format the response
	$color = 'green';
	if ($response == 'denied')
	{
		$color = 'red';
	}

	// display the response to the client/user
	include(__DIR__.'/../MVC/view.php');
}

?>


