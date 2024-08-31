<?php
$con = mysqli_connect('localhost', 'root', '','college');



  $name = ($_POST["name"]);
  $email = ($_POST["email"]);
  $gender = ($_POST["gender"]);
  $password = ($_POST["password"]);
  $course=($_POST["course"]);

$sql="INSERT INTO `clg_application`(`uname`, `passwords`, `email`, `gender`, `cource`) VALUES ('$name','$password','$email','$gender','$course')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>window.location = "registrationsucessful.html"</script>'; 
}
else{
  echo "not enterd";
}
mysqli_close($con);
?>