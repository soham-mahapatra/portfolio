<?php
extract ($_POST);
header ('Location:index.html');
date_default_timezone_set("Asia/Calcutta");

$file=fopen("messages.txt","a");

	fwrite($file,"\n");
	fwrite($file,"Name=>");
	fwrite($file,$name);
	
	fwrite($file,"\n");
	fwrite($file,"Phone=>");
	fwrite($file,$phone);
	
	fwrite($file,"\n");
	fwrite($file,"Email=>");
	fwrite($file,$email);
	
	fwrite($file,"\n");
	fwrite($file,"Subject=>");
	fwrite($file,$subject."\n");
	
	fwrite($file,"Message=>");
	fwrite($file,$message."\n");
	fwrite($file,date("[d-M-Y H:i]"));
	fwrite($file,"\n");
	
fclose($file);

?>