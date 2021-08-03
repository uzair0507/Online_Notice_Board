<?php 
session_start();
include('connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login_admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Notice Board Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  
          
<body>
 
<fieldset>
    <legend>Add Member</legend>
 
    <form action="createStudent.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" /></td>
            </tr>     
            <tr>
                <th>USN</th>
                <td><input type="text" name="usn" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact"/></td>
            </tr>
        
            <tr>
                <td><a href="update_studinfo.php"></a><button type="submit">Save</button></td>
                <td><a href="index_admin.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
     
</fieldset>
</body>
</html>            
          