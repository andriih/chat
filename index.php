 <?php
        include_once 'models/messages.php';
        include_once 'models/system.php';
        
       $messages = messages_all();

        switch ($_GET['view']) {
            case 'base':
                $template = 'v_index';
                break;

            case 'inline':
                $template = 'v_index_inline';
                break;

            default:
                $template = 'v_index';
        }


        $inner = template($template, [
            'messages' => $messages
        ]);

        echo template('v_main',[
            'title'   => 'Main page',
            'content' => $inner
        ]);

?>
<a href="add.php" id="add">Add new article</a>


