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
        <?php
        $folder = './uploads';

        $directory = new DirectoryIterator($folder);
        ?>
        
        <table class="table table-striped table-hover">
            <tr>
                <th>FileName</th>
                
            </tr>
            <?php foreach ($directory as $fileInfo) : ?>
                <?php if ($fileInfo->isFile()) : ?>
                    
                    <tr>
                        <td><?php echo $fileInfo->getFilename(); ?></td>
                        <td><a href="details.php?file=<?php echo $fileInfo->getPathname(); ?>">View</a></td>
                        <td><a href="delete.php?file=<?php echo $fileInfo->getPathname(); ?>">Delete</a></td>
<!--                        <td><?php echo $fileInfo->getSize(); ?></td>
                        <td><?php echo $fileInfo->getType(); ?></td>
                        <td><?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></td>
                        <td><?php echo $fileInfo->getPathname(); ?></td>-->
                    </tr>
                    
                <?php endif; ?>
        <?php endforeach; ?>
    </table>
        <a href="upload-form.php">Add another upload</a>
</body>
</html>
