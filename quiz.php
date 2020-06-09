<?php
include 'db.php';

?>

<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>quiz</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
 <link href="css/resume.min.css" rel="stylesheet">


</head>
<body>


<div class="container-fluid m-auto d-block  ">
<div class="row">

<div class="col-md-8 ">

<?php
if (isset($_SESSION['uid'])){?>
 
  <h2> <?php echo "Hello"." ".$_SESSION['uname']." "."Welcome To Quiz Web";?></h2>

  <?php
}
else{
    echo "<script>location.assign('index.php')</script>";
}

?>


<form action="check.php" method="post">
<?php

for($i=1; $i<6; $i++){
$sq="select * from questions where qid=$i";
$query=mysqli_query($con,$sq);
while ($rows = mysqli_fetch_array($query) ) {
?>


<div class="card">
	<h3 class="card-header"> <?php echo  $rows['question']; ?></h3>
	

<?php



$sq="select * from answers where ans_id=$i";
$query=mysqli_query($con,$sq);
while ($rows = mysqli_fetch_array($query) ) {
?>

<div class="card-body">
<input type="radio" name="quizcheck[<?php echo $rows['ans_id'] ?>]" value="<?php echo $rows['aid']; ?>">
<?php echo $rows['answer']; ?>
 </div>






<?php
}
}
}
?>




<input type="submit" name="submit" value="submit" class="btn btn-primary m-auto d-block"><br>



</form>


</div>
</div>
</div>
</div>


</body>
</html>















