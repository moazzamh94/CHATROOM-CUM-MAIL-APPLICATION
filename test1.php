<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  $source=$_FILES["file"]["tmp_name"];
  $dest='G:\Desktop\g.txt';
//$homepage = file_get_contents($_FILES["file"]["tmp_name"]);
//header('Content-type: application/pdf');
//readfile($homepage);
//$ew=copy ( $source , string $dest [, resource $context ] )
$ew=copy ( $source , $dest);
echo "RESULTTTTTTTTTTTTTT=$ew";
//header('Content-type: application/rar');
//readfile('C:\xampp\htdocs\v.pdf');
}
?>