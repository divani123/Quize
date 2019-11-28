<?php
session_start(); ?>
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
    
    <title>Test Questions</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
               <link rel="stylesheet" type="text/css" href="css/main_2.css">
   


</head>
<body background="img/bg2.jpg" style="background-size: 1550px " >
   

<div class="logout">
    <p align="right"><a href="logout.php">Log Out!!</a></p>
</div>

    <div class="header" align="center"> 
     
        <h1 >Test IT Questions</h1>
 </div><br> 

 <form action="result.php" method="POST">
 <?php
 
 $a = array(1, 2, 3, 4, 5 );
 $count=0;
 $_SESSION['answers'] = array();
 $_SESSION['questions'] =array();
 shuffle($a);
 $b = array();

 for($i=0;$i<5;$i++){$b[$i] = $a[$i];}

 for ($x = 0; $x < count($b); $x++) {
     $count++;
     $chosing = "select * from questions where id='{$b[$x]}'";
     $result = mysqli_query($connection, $chosing);
     $rows = mysqli_fetch_assoc($result);

    
     array_push($_SESSION['answers'],$rows['correct_answer']);
     array_push($_SESSION['questions'],$rows['question']);

     ?>
    <div class="Box box-1">
        <h4><?php echo "Question:".$count." ".$rows['question']; ?></h4><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value="<?php echo $rows['answer_one']; ?>"> <?php echo $rows['answer_one']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['answer_two']; ?>"> <?php echo $rows['answer_two']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['answer_three']; ?>"> <?php echo $rows['answer_three']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['answer_four']; ?>"><?php echo $rows['answer_four']; ?><br/><br>

    </div>
   
<?php
 }
 ?><br> <br>
 <div class="btn" align="right">
    <input class="btn btn-primary" type="submit" name="result" id="result" value="Submit Answers">


 </div>
 
 </form>
 <br/><br/>
</body>
</html>
<?php mysqli_close($connection); ?> 