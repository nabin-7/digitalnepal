   <?php
$con=mysqli_connect('localhost','root');

if($con){
  echo"connection sucessful";
}else{
   echo"no connection";
   $user= $_POST['user'];
   $email= $_POST['email']
   $mobile= $_POST['mobile'];
   $comments= $_POST['comments'];



  ?>

