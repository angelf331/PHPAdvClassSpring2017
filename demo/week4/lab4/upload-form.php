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
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    </head>
    <body>
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <div class="col-md-8 centered">
                <!-- MAX_FILE_SIZE must precede the file input field -->
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                <!-- Name of input element determines name in $_FILES array -->
                Send this file: <input class="btn btn-file" name="upfile" type="file" /><br />
                <input class="btn btn-primary form-control" type="submit" value="Send File" />
                <a href="view-upload.php">view recent uploads</a>
            </div>
        </form>
    </body>
</html>
