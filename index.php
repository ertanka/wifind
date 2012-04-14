<?php
connectToDb();
$query="SELECT * FROM User";
$result=mysql_query($query);
var_dump($result);

function connectToDb(){
$user="wifind";
$password="wifi0102";
$database="wifind"; //Database adõ
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
}
function disconnectFromDb(){    
mysql_close();
}
?>