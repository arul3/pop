<?php
require_once "function.php";
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" ?>';
echo '<requests >';
$qw="SELECT * FROM `requests`";
$result=$con->query($qw);
$row=$result->num_rows;

for ($i=0; $i <$row ; $i++) {
 $r=$result->fetch_assoc();


  echo '<request><name>'.$r['name']."</name><id>".$r['id']."</id></request>";

}

echo "</requests>";

 ?>
