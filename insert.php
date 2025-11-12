
<?php
include 'connection.php';
$x=$_POST["first_name"];
$y=$_POST["last_name"];
$s=$_POST["father_name"];
$h=$_POST["user_name"];
$f=$_POST["pas"];

$servername="localhost";
$username="root";
$password="";
$database="batman";
$conn= connect("localhost","root","","batman");
function ql($x , $y , $s , $h , $f,$conn)
{
 $q="INSERT INTO baty (first_name, last_name, father_name, user_name, pas)
 VALUES ('$x' , '$y' , '$s' , '$h' , '$f')";
 mysqli_query($conn,$q);
}
 ql($x, $y, $s , $h, $f,$conn);
?>
