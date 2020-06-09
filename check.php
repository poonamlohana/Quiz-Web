<?php
include 'db.php';
error_reporting(0);
?>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>quiz result</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
 <link href="css/resume.min.css" rel="stylesheet">


</head>
<body class="contanier">
	<div class="row">
<div class="col-md-8 ">

<table class="text-center table table-bordered table-hover">
	<tr>
		<th colspan="4" class="bg-dark m-auto " ><h1 class="text-white">Result</h1></th>
	</tr>
	<tr>
		<td>Question Attempt</td>
	
	<?php  $_SESSION['uname'];  ?>


<?php
$i = 1;
$result=0;
if (isset($_POST['submit'])){
	if(!empty($_POST['quizcheck'])){ 

		$count = count($_POST['quizcheck']);

?>
<td>
<?php	
          echo "out of 5 , you have selected ".$count."options";?>	
</td>


<?php
$selected = $_POST['quizcheck'];

$sq="select * from questions";
$query=mysqli_query($con,$sq);

while ($rows = mysqli_fetch_array($query) ) {
   $flag = $rows['ans_id'] == $selected[$i];
        if($flag){
              $result++;

}
else{

}

$i++;
}
?>
<tr>
	<td>Total score</td>
<td colspan="2">
	<?php
	echo "<br>Your total score is"." ".$result;
//  <!-- database result store-->
$name=$_SESSION['uname'];
$fresult="insert into user(username,totalques,answerscorrect) values ('$name','5','$result')";
$query=mysqli_query($con,$fresult);
}
else{
	echo "plz select atleast one option ";
}
}
?>


</td>
</tr>





</table>
<form action="" method="post">
<input  type="submit" name="btn1" value="Logout" class="btn btn-warning m-auto d-block">
</form>
</div>
</div>
<?php

if (isset( $_POST['btn1'])){
    session_unset();
    session_destroy();
    echo "<script>location.assign('index.php')</script>";
}
?>






</body>
</html>