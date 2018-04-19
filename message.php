<?php

include_once 'models/messages.php';
include_once 'models/system.php';

$id = $_GET['id'];
$err404 = false;

if($id === null || id==='')
{
    $err404 = true;
}else{
    $message = messages_one($id);
    if ($message === false){
        $err404 = true;
    }
}

$inner = template('v_message',[
	'error404' => $error404,
	'message' => $message
]);

echo template('v_main',[
	'title' => 'View message',
	'content' => $inner
]);
