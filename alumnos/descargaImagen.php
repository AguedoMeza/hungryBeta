<?php
$id=$_GET["id"];
$sql = "select * from table1 where id=$id "; // 1
$res = $con->query($sql);
while($row = $res->fetch_assoc())
{ 
    $name = $row['name'];
    $size =  $row['size'];
    $type = $row['extension'];
    $image = $row['image'];
}

header("Content-type: ".$type);
header('Content-Disposition: attachment; filename="'.$name.'"');
header("Content-Transfer-Encoding: binary"); 
header('Expires: 0');
header('Pragma: no-cache');
header("Content-Length: ".$size);

echo $image;
exit();
?>