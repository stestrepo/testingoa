<?php
if(isset($_POST['file']))
{
$file=$_POST['f1'];
header('Content-disposition:attachment;
fillename="'.$file.'"');
header('Content-type:audio/mpeg');
readfile('/songs/'.$file);
exit();
}
?>