<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if ( $util->isPostRequest() ){
            $loginInfo = $accounts->login($email, $password);
            if( $loginInfo > 0){
                
                $_SESSION['user_id'] = $loginInfo;
                $util->redirect("admin.php");
            }else{
                
            }
        }
        include './views/login.html.php';
        ?>
    </body>
</html>
