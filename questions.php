<?php
session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<?php 
//checking if a user logged in.
if (!isset($_SESSION['user_id'])) {
 	header('Location:index.php');
 } 
 ?>
 
<?php

$randListArray=array(" A source program is the program written in which level language?",
	" Which of the following operating systems do you choose to implement a client server network?",
	" Which has the maximum capacity?",
    " Which is a non-standard version of computing language?",
    " A co-processor");
$randAnswerArray1=array("a"=>"English","b"=>"Symbolic","c"=>"High-Level","d"=>"Machine");
$randAnswerArray2=array("a"=>"MS DOS", "b"=> "Windows 95", "c"=>"Windows 98","d"=>" Windows 2000");
$randAnswerArray3=array("a"=>"Floppy disk","b"=>"Zip disk","c"=>"jaz-cartridge","d"=>"super disk");
$randAnswerArray4=array("a"=>"PROLOG","b"=>"APL","c"=>"ARMY","d"=>"PL/1");
$randAnswerArray5=array("a"=>"is relatively easy to support in software","b"=>"causes all processes to function equally","c"=>"works with any application","d"=>"is quite common in modern computers");

/*$rand_keys=array_rand($randListArray,5);
shuffle($rand_keys);*/

$rand_ans1=array_rand($randAnswerArray1,4);
shuffle($rand_ans1);

$rand_ans2=array_rand($randAnswerArray2,4);
shuffle($rand_ans2);

$rand_ans3=array_rand($randAnswerArray3,4);
shuffle($rand_ans3);

$rand_ans4=array_rand($randAnswerArray4,4);
shuffle($rand_ans4);

$rand_ans5=array_rand($randAnswerArray5,4);
shuffle($rand_ans5);


/*$randChoice1=$randListArray[$rand_keys[0]]; ;
$randChoice2=$randListArray[$rand_keys[1]];
$randChoice3=$randListArray[$rand_keys[2]];
$randChoice4=$randListArray[$rand_keys[3]];
$randChoice5=$randListArray[$rand_keys[4]];*/

$randAnswer1_1=$randAnswerArray1[$rand_ans1[0]];
$randAnswer1_2=$randAnswerArray1[$rand_ans1[1]];
$randAnswer1_3=$randAnswerArray1[$rand_ans1[2]];
$randAnswer1_4=$randAnswerArray1[$rand_ans1[3]];

$randAnswer2_1=$randAnswerArray2[$rand_ans2[0]];
$randAnswer2_2=$randAnswerArray2[$rand_ans2[1]];
$randAnswer2_3=$randAnswerArray2[$rand_ans2[2]];
$randAnswer2_4=$randAnswerArray2[$rand_ans2[3]];

$randAnswer3_1=$randAnswerArray3[$rand_ans3[0]];
$randAnswer3_2=$randAnswerArray3[$rand_ans3[1]];
$randAnswer3_3=$randAnswerArray3[$rand_ans3[2]];
$randAnswer3_4=$randAnswerArray3[$rand_ans3[3]];

$randAnswer4_1=$randAnswerArray4[$rand_ans4[0]];
$randAnswer4_2=$randAnswerArray4[$rand_ans4[1]];
$randAnswer4_3=$randAnswerArray4[$rand_ans4[2]];
$randAnswer4_4=$randAnswerArray4[$rand_ans4[3]];

$randAnswer5_1=$randAnswerArray5[$rand_ans5[0]];
$randAnswer5_2=$randAnswerArray5[$rand_ans5[1]];
$randAnswer5_3=$randAnswerArray5[$rand_ans5[2]];
$randAnswer5_4=$randAnswerArray5[$rand_ans5[3]];

?>

<!DOCTYPE html>
<html>
<head>
	
	
	<title>Test Questions</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

	<header>
		<div class="appname">Test IT Questions</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name']."!   "; ?><a href="logout.php">Log Out</a></div>
	</header><br>

	

	<?php echo "01)".$randListArray[0]."<br>  a)".$randAnswer1_1."<br>   b)".$randAnswer1_2."<br>    c)".$randAnswer1_3."<br>    d)".$randAnswer1_4; ?><br><br>
	<?php echo "02)".$randListArray[1]."<br>  a)".$randAnswer2_1."<br>   b)".$randAnswer2_2."<br>    c)".$randAnswer2_3."<br>    d)".$randAnswer2_4; ?><br><br>
	<?php echo "03)".$randListArray[2]."<br>  a)".$randAnswer3_1."<br>   b)".$randAnswer3_2."<br>    c)".$randAnswer3_3."<br>    d)".$randAnswer3_4; ?><br><br>
	<?php echo "04)".$randListArray[3]."<br>  a)".$randAnswer4_1."<br>   b)".$randAnswer4_2."<br>    c)".$randAnswer4_3."<br>    d)".$randAnswer4_4; ?><br><br>
	<?php echo "05)".$randListArray[4]."<br>  a)".$randAnswer5_1."<br>   b)".$randAnswer5_2."<br>    c)".$randAnswer5_3."<br>    d)".$randAnswer5_4; ?><br><br>



</body>
</html>