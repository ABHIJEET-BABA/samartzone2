<?php 

$NAME = $_POST['name'];
$EMAIL= $_POST['email'];
$MOBILE= $_POST['mobile'];
$MESSAGE= $_POST['message'];


//database//


$conn = new mysqli('localhost','root','','enquiredata');
if ($conn->connect_error){
    die('registration failed :' .$conn->connect_error);


}else{
    $stmt = $conn->prepare("insert into enquireresult(Name,Email,Mobile,Message)values(?,?,?,?)");
    $stmt->bind_param("ssis",$NAME,$EMAIL,$MOBILE,$MESSAGE);
    $stmt->execute();
    echo "enquire is done";

}







?>