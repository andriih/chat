<?php

    include_once 'models/messages.php';
    include_once 'models/system.php';
       
    $controller = $_GET['c'] ?? 'home' ;
    
    include_once ("controllers/$controller.php");
     
    echo template('v_main',[
        'title'   => $title,
        'content' => $inner
    ]);