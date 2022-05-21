<?php 
$localhost = "bsyffxelnsbjnvlulpoq-mysql.services.clever-cloud.com";
$username = "ujznk78nqdfxhadg";
$password = "FjcUrjdT37vwK82JTm4l";
$database = "bsyffxelnsbjnvlulpoq";

/*$localhost = "localhost";
$username = "root";
$password = "";
$database = "oap";*/

$conn = mysqli_connect($localhost,$username,$password,$database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>