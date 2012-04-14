<?php
connectToDb();
addStatus(2,"Mesaj","FF:FF:FF:FF:FF:FF");

function connectToDb(){
$user="wifind";
$password="wifi0102";
$database="wifind"; //Database adõ
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
}
function getUpdates(){
    $query="SELECT * FROM Status JOIN User WHERE Status.user_id=User.id ORDER BY status_id DESC";
    $result=mysql_query($query);
    $arr=array();
    while ($row = mysql_fetch_assoc($result)) {
	array_push($arr,$row);
    }
    echo json_encode($arr);
}
function addStatus($userId,$message,$accesPointMAC){
    $apQuery="SELECT id FROM AccessPoint WHERE MAC=".$accesPointMAC;
    $apResult=mysql_query($apQuery);
    $apResult = mysql_fetch_assoc($apResult);
    echo $apResult['id'];
}
function disconnectFromDb(){    
mysql_close();
}

?>