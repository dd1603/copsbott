<?php
     $id=$_REQUEST["a"];
     $c_id=$_POST["c_id"];
     $reason=$_POST["reason"];
     
     $con=mysqli_connect("localhost","root","","cop");
     $f=mysqli_query($con,"insert into fakecomplaints c_id, reason where id='$id')
          values('$c_id','$reason')");
     $r=mysqli_query($con,"delete from userinfo where id='$id'");

     if($r)
         header("location:tables.php");

?>