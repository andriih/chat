 <?php
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

        $title = 'Main page';