<?php 

session_start();
?>
<?php require_once('inc/connection.php'); ?>
<?php 
//checking if a user logged in.
if (!isset($_SESSION['user_id'])) {
    header('Location:index.php');
 } 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Results</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                           <link rel="stylesheet" type="text/css" href="css/main_2.css">


</head>
<body background="img/bg2.jpg" style="background-size: 1550px ">

    <div class="logout">
    <p align="right"><a href="logout.php">Log Out!!</a></p>
</div>
 <div class="header" align="center" style="text-shadow: 2px 2px rgb(0, 162, 255)">  
        <h1>Results of IT Questions</h1>
 </div><br>

<table cellpadding="10" cellspacing="1" border="2" align="center"  >
        <tr>
            <th>Question No</th>
            <th>Question</th>
            <th>Your Answer</th>
            <th>Correct Answer</th>
            <th>Result</th>
            
        </tr>
<?php
if(isset($_POST['result'])) {

 for($x=0;$x<count($_SESSION['answers']);$x++){
     $y=$x+1;
     $result;
     if($_SESSION["answers"][$x]==$_POST['ans'.$y]){
         $result="Correct";
     }
     else{$result="Wrong";}
    
    ?>
<tr>
                    <td><?php echo $y; ?></td>
                    <td><?php echo $_SESSION["questions"][$x]; ?></td>
                    <td><?php echo $_POST['ans'.$y]; ?></td>
                    <td><?php echo  $_SESSION["answers"][$x]; ?></td>
                    <td><?php echo $result; ?></td>
                </tr>


    <?php
 }
}

?>
</body>
</html>


<?php mysqli_close($connection); ?>