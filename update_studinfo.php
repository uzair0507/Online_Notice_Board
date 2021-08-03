<?php 
 
require('connection.php');
session_start();
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM student WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
 
    $data = $result->fetch_assoc();

 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
    
<body>
 
<fieldset>
    <legend>Edit Member</legend>
 
    <form action="updatephp.php" method="update">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="<?php echo $data['name'] ?>" /></td>
            </tr>     
            <tr>
                <th>USN</th>
                <td><input type="text" name="usn" value="<?php echo $data['id'] ?>" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" value="<?php echo $data['mobile'] ?>" /></td>
            </tr>
           
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><a href="index_admin.php"><button type="submit">Save Changes</button></a></td>
                <td><a href="index_admin.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>