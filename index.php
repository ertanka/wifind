<?php
connectToDb();
getUpdates();

function connectToDb(){
$user="wifind";
$password="wifi0102";
$database="wifind"; //Database adõ
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
}
function getUpdates(){
    $query="SELECT * FROM Status JOIN User WHERE Status.user_id=User.id";
    $result=mysql_query($query);
    $arr=array();
    while ($row = mysql_fetch_assoc($result)) {
	array_push($arr,$row);
    }
    echo json_encode($arr);
}
function disconnectFromDb(){    
mysql_close();
}

?>