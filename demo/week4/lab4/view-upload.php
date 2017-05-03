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
        $folder = './uploads';

        $directory = new DirectoryIterator($folder);
        ?>
        
        <table class="table table-striped table-hover">
            <?php foreach ($directory as $fileInfo) : ?>
            <tr>
                <?php if ($fileInfo->isFile()) : ?>
                    <td><?php echo $fileInfo->getFilename(); ?></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
        <a href="upload-form.php">Add another upload</a>
</body>
</html>
