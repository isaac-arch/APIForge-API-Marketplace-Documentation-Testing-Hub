<?php include("config/db.php");
if(isset($_POST['gen'])){
 $key=bin2hex(random_bytes(16));
 $uid=$_SESSION['user']['id'];
 $conn->query("INSERT INTO api_keys(user_id,api_key) VALUES($uid,'$key')");
}
$res=$conn->query("SELECT * FROM api_keys WHERE user_id=".$_SESSION['user']['id']);
while($k=$res->fetch_assoc()){
 echo $k['api_key']."<br>";
}
?>
<form method="post">
<button name="gen">Generate API Key</button>
</form>