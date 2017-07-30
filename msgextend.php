<?php
require_once 'function.php';


$q="SELECT * FROM `recieve` ORDER BY no DESC LIMIT 2";
$result=$con->query($q);
$row =$result->num_rows;
for ($j=1; $j <=$row ; $j++) {

$row1= $result->fetch_assoc();


$qy="SELECT name FROM `userlist` WHERE id=".$row1['senderid'];
$result2=$con->query($qy);

$row2=$result2->fetch_assoc();
echo  "<b>".$row2['name'].":</b>". $row1['message']."<br>";


}
$con->close();

 ?>
