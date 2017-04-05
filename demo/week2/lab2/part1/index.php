<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './autoload.php';
            
            $test = new ErrorMessage();
            
            $test->addMessage("test1", 'Testing Error message 1');
            $test->addMessage("test2", 'Testing Error message 2');
            $test->addMessage("test3", 'Testing Error message 3');
            
            $test->removeMessage("test2");
            var_dump('<br />', $test->getAllMessages());
            
            $test2 = new Message();
            
            $test2->addMessage("test1", 'Testing Error message 1');
            $test2->addMessage("test2", 'Testing Error message 2');
            $test2->addMessage("test3", 'Testing Error message 3');
            
            $test2->removeMessage("test3");
            var_dump('<br />', $test2->getAllMessages());
        ?>
    </body>
</html>
