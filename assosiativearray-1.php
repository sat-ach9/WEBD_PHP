<?php
$marks = array("Stu1" => 20, "Stu2" => 30, "Stu3" => 40);
$mark['Satyam']=34;
$mark['Harsh']=40;
for ($i = 1; $i <= count($marks); $i++) {
    echo $marks['Stu' . $i] . "<br/>";
}
?>