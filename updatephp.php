<?php 
 
require_once 'connection.php';
 
if($_POST) {
    $name = $_POST['name'];
    $usn = $_POST['id'];
    $contact = $_POST['contact'];
    $id = $_POST['id'];
 
    $sql = "UPDATE student SET name = '$name', id= '$usn', contact = '$contact' WHERE id = '$id'";
    mysqli_query($conn,$sql);
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='update_studinfo.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='index_admin.php'><button type='button'>Home</button></a>";
 
}   
 
?>  