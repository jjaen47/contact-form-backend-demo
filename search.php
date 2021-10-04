<?php
$postcodeNo=$_REQUEST['postcode'];
$con = mysqli_connect("localhost","root","","contact");
if($postcodeNo!==""){
    $query = mysqli_query($con, "SELECT * FROM `state` WHERE postcode_num='$postcodeNo'");
    $row = mysqli_fetch_array($query);
    $state = $row["state"];
}
$result = array("$state");
$myJSON = json_encode($result);
echo $myJSON;

?>