<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    </head>
    <body>
        <!--this page gets content from all files and posts it on page-->
        <?php
            require_once './models/dbconnect.php';
            require_once './models/util.php';
            require_once './models/addressCRUD.php';
            require_once './models/validation.php';
            
            //posts html input text boxes
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
            
            $errors = [];
            $states = getStates();
            
            // if text boxes empty displays error message
            if ( isPostRequest() ){
                if( empty($fullname) ){
                    $errors[] = 'Full name is required.';
                }
                if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
                    $errors[] = 'Email is not valid.';
                }
                if( empty($addressline1) ){
                    $errors[] = 'Address is required.';
                }
                if( empty($city) ){
                    $errors[] = 'City is required.';
                }
                if( isZipValid($zip) === false ){
                    $errors[] = 'Zip is required.';
                }
                if( empty($state) ){
                    $errors[] = 'State is required.';
                }
                if( isDateValid($birthday) === false ){
                    $errors[] = 'Birthday is required.';
                }
                // if not empty add to database
                if ( count($errors) === 0){
                    if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)){
                        $message = 'Address Added';
                    }
                }
            }
            
            include './templates/messages.html.php';
            include './templates/errors.html.php';
            include './templates/add-address.html.php';
            
            
            
        ?>
    </body>
</html>
