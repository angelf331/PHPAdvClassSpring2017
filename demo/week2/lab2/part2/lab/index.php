<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    </head>
    <body>
        <!--displays table from view-address -->
        <div class="col-md-6">
            <?php
                include './autoload.php';
                
                $crud = new AddressCRUD();
                $addresses = $crud->readAllAddress();
            
                include './templates/view-address.html.php';
            ?>
        </div>
    </body>
</html>
