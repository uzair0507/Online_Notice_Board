<?php require_once 'connection.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
    
    <!--<div class="item">
      <img src="images/notice3.jpg" alt="..."styles="width:100%">-->
 
<div class="manageMember">
    <a href="addStudent.php"><button type="button">Add Member</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            
            <tr>
               <th>Name</th>
                <th>USN</th>
                <th>Contact</th>
                <th>UID</th>
            </tr>
            
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn,$sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['id']."</td>
                        <td>".$row['mobile']."</td>
                        <td>
                            <a href='update_studinfo.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                        
                           
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
            
        </tbody>
    </table>
</div>
    
 
</body>
</html>
