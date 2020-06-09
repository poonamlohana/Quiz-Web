<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>signup</title>


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

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h2 class="text-center">Welcome To Quiz</h2>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h4 class="text-center"> Signup form</h4>
      <form action="" method="post"> 
<div class="form-group">
     <label> Username:</label><br>
    <input type="text "  name="uname" class="form-control">
</div>
<div class="form-group">
     <label > Password:</label>
    <input " type="password "  name="upass" class="form-control">
</div>
  <button type="submit" name="btnsign" class="btn btn-primary">Signup</button>



      </form>
      
    </div>

<?php 
// signup
if(isset($_POST['btnsign'])){
  $email=$_POST['uname'];
  $pass=$_POST['upass'];

  $sq= "insert into users(username,password)values('$email','$pass')";
  $query=mysqli_query($con,$sq);
  if ($query) {
    echo "inserted";
  }

}

  ?>



<!--login-->


 <div class="col-lg-5">
      <h4 class="text-center"> Login form</h4>
      <form action="" method="post"> 
<div class="form-group">
     <label> Username:</label><br>
    <input type="text "  name="uname1" class="form-control">
</div>
<div class="form-group">
     <label > Password:</label>
    <input " type="password "  name="upassword1" class="form-control">
</div>
  <button type="submit" name="btnlogin" class="btn btn-primary">Login</button>



      </form>
      
    </div>


    
  </div>
  

</div>



<?php 
if ( ! isset($_SESSION['uid'])) {
if(isset($_POST['btnlogin'])){
  $uname=$_POST['uname1'];
  $upass=$_POST['upassword1'];
$sql="select * from users where username='$uname' and password='$upass'";
$rs=mysqli_query($con,$sql);
$data=mysqli_fetch_array($rs);
$counts=mysqli_num_rows($rs);

if($counts>=1){
$_SESSION['uid']=$data[0];
$_SESSION['uname']=$data[1];
echo "<script>location.assign('quiz.php');</script>";
}

else{
    echo "<script>location.assign('quiz.php')</script>";


}



}
}
 ?>







  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>