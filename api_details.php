<?php include("config/db.php");
$id=$_GET['id'];
$api=$conn->query("SELECT * FROM apis WHERE id=$id")->fetch_assoc();
?>
<h2><?= $api['name'] ?></h2>
<p><?= $api['description'] ?></p>
<a href="api-docs.php?id=<?= $id ?>">Docs</a>
<a href="api-test.php?id=<?= $id ?>">Test API</a>