<?php

    define('ROOT','/hometasks/1.5/chat/');

    include_once 'models/messages.php';
    include_once 'models/system.php';
    
   $params = explode('/', $_GET['php1chpu'] );
   $end = count($params) - 1;
   
   if($params[$end] === '')
   {
       unset($params[$end]);
       $end--;
   }
    //debug($_GET);
    //var_dump($params);
    
    $title = '';
    $inner = '';
    $err404 = false;
       
    $controller = trim($params[0] ?? 'home') ;
    
    if(
            $controller === ''  || 
            !file_exists("controllers/$controller.php") ||
            !preg_match("/^[a-zA-Z0-9]+$/", $controller)
      )
    {
        $err404 = true;
    }
    else{
        include_once ("controllers/$controller.php");
    }
    
    if($err404)
    {
        $title = 'Error 404';
        $inner = template('v_404');
    }
    
    
    
    echo template('v_main',[
        'title'   => $title,
        'content' => $inner
    ]);