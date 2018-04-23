<?php

if(count($_POST) > 0){
        $name = trim($_POST['name']);
        $text = trim($_POST['text']);

        if($name == '' || $text == ''){
            $msg = 'Fill all fields';
        }else{
           $id = messages_add($name, $text);
           //var_dump($id);die;
           header("Location:". $ROOT ."message/$id ");
           exit;
        }
    }else{
        $name = '';
        $text = '';
        $msg = '';
    }
    
    $inner = template ('v_add',[
        'name' => $name,
        'text' => $text,
        'msg' => $msg
    ]);

    $title = 'Нове повідомлення';


