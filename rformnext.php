<?php
     $fnm = $_POST["fname"];
     $lnm= $_POST["lname"];
     $email= $_POST["email"];
     $phone=$_POST["phone"];
     $dob=$_POST["dob"];
     $state=$_POST["state"];
     $city=$_POST["city"];
     $gender=$_POST["gender"];
     $password=$_POST["password"];

     $con=mysqli_connect("localhost","root","","cop");
     $r=mysqli_query($con,"insert into userinfo(fnm,lnm,email,phone,dob,state,city.gender,password)
        values('$fnm','$lnm','$email','$phone','$dob',''$state','$city','$gender','$password')");
?>
