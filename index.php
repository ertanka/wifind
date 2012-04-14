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

    while ($userRow = mysql_fetch_assoc($result)) {
	echo $userRow['name'];
}

}
function disconnectFromDb(){    
mysql_close();
}

?>