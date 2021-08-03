<?php 
 
require('connection.php');
extract($_POST);
 
if($_POST) {
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $contact = $_POST['contact'];
 
    $sql = "INSERT INTO student VALUES ('$name', '$usn', '$contact')";
    mysqli_query($conn,$sql);
    $err="<font color='blue'>Registration successfull !!</font>";
    echo "<a href='addStudent.php'><button type='button'>Back</button></a>";
    echo "<a href='index_admin.php'><button type='button'>Home</button></a>";
    
}
 
?>