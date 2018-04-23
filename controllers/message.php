<?php
$id = $params[1] ?? null;
$err404 = false;

if($id === null || id==='')
{
    $err404 = true;
}else{
    
    $message = messages_one($id);
    
    if ($message === false)
    {
        $err404 = true;
    }
}
if(!$err404)
{
    $inner = template('v_message',[
	'err404' => $err404,
	'message'  => $message ?? null
    ]);
    
    $title =  'View message';
}





