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
        // put your code here
        $fileLoc = filter_input(INPUT_GET, "file");
        $file = new SplFileObject($fileLoc, "r");
        $contents = $file->fread($file->getSize());
        $fileExt = $file->getExtension();
        
        $fileTime = date("l F j, Y, g:i a", $file->getMTime());
        $fileSize = $file->getSize();
        $file = null;
        ?>
        
        <p>file extension: <?php echo $fileExt;?></p>
        <p>file created: <?php echo $fileTime;?></p>
        <p>file size: <?php echo $fileSize;?> bytes</p>
        <p>link: <a href="<?php echo $fileLoc;?>">download</a></p>
        
        
        <?php switch($fileExt):
           case 'pdf': ?>
           <?php case 'html': ?>
        <iframe src="<?php echo $fileLoc;?>"></iframe>
        <?php break; ?>
           <?php case 'txt': ?>
        <textarea><?php echo $contents; ?></textarea>
        <?php break; ?>
           <?php case 'png': ?>
           <?php case 'jpg': ?>
           <?php case 'jpeg': ?>
           <?php case 'gif': ?>
        <img src="<?php echo $fileLoc;?>">
        <?php break; ?>
        <?php endswitch; ?>
    </body>
</html>
