
  
  <?php
include('con.php');



if(isset($_POST['submit'])){



$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$query1= "INSERT INTO `sign up`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
$res1=mysqli_query($con,$query1);


echo('<script>alert("You Have Successfully Registered")</script>');

echo('<script>window.location="signup.html"</script>');


}else{

    echo('<script>alert("Your Registration was Unsuccessful")</script>');
    echo('<script>window.location="index.html"</script>');



}

?>