<?php include("config/db.php");
$res = $conn->query("SELECT * FROM apis WHERE status='approved'");
while($api = $res->fetch_assoc()){
 echo "<div>
 <h3>{$api['name']}</h3>
 <p>{$api['description']}</p>
 <a href='api-details.php?id={$api['id']}'>View</a>
 </div>";
}
?>