<?php
$filename = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'img_f85b40dcac67eaadabc38dc4b24dab72aea902bf.jpg';
  /* SplFileObject extends from SplFileInfo so you can use the same functions 
   * from SplFileInfo with SplFileObject 
   */         
$file = new SplFileObject($filename, "r");
$contents = $file->fread($file->getSize());

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($filename);

header('Content-Type: '.$mimeType);
header('Content-Length: ' . $file->getSize());
echo $contents;

 /* Alternative without the above headers */
 
$b64 = base64_encode($contents);
//echo '<img src="data:'.$mimeType.';base64,'.$b64.'"/>';