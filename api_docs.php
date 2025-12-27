<?php include("config/db.php");
$id=$_GET['id'];
$res=$conn->query("SELECT * FROM api_endpoints WHERE api_id=$id");
while($e=$res->fetch_assoc()){
 echo "<p><b>{$e['method']}</b> {$e['endpoint']}<br>{$e['description']}</p>";
}
?>