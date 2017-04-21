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
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if ( $util->isPostRequest() ){
            if( $accounts->signup($email, $password)){
                
                $util->redirect("login.php", array("email"=>$email));
            }else{
                echo 'did not work';
            }
        }
        include './views/signup.html.php';
        ?>
    </body>
</html>
