<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">
	<title></title>
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>                                            
        <script>
               function abc()
               {
                    var pass=document.getElementById("password").value;

                    var confirms=document.getElementById("confirm").value;
                    if(pass==confirms)
                        return true;
                        else
                        {
                            alert("Password Not Match");
                            return false;
                        }
               } 
        </script>
<div class="container">
   <div class="container">
<form action='rformnext.php' method='post' onsubmit='return abc()' >
<div class="form-group row">
<div class="form-group col-md-6">
  <label for="fname">First Name</label>
    <input class="form-control" type="text" name="fname" value="" id="fname">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
  <label for="lname" >Last Name</label>
    <input class="form-control" type="text" name="lname"  id="lname">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
  <label for="email" >Email</label>
    <input class="form-control" type="email" name="email" id="email">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
<label for="phone" >Phone Number</label>
    <input class="form-control" type="tel " name="phone"  id="phone">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
  <label for="dob" >Date</label>
    <input class="form-control" type="date" name="dob" id="dob">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
    <label for="state" >State</label>
    <select name="state" id="state"  class="form-control">
  <option value="Select State"> </option>     
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Ladakh">Ladakh</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>   
</div>

<div class="form-group row">
<div class="form-group col-md-6">
    <label for="city" >City</label> 
       <input class="form-control" type="text" name="city" id="city">
    </div>   
</div>    

<div class="form-group row">
<div class="form-group col-md-6">
    <label for="gender" >Gender</label>
     <input class="form-control" type="radio" name="gender" value="female">Female
     <input class="form-control" type="radio" name="gender" value="male">Male
</div>
<div class="form-group row">
<div class="form-group col-md-6">
  <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password">
  </div>
</div>
<div class="form-group row">
<div class="form-group col-md-6">
    <label for="confirm" >Confirm Password</label>
        <input class="form-control" type="password" name="confirm" id="confirm">
    </div> 
</div>  

    <button type="submit" class="btn btn-success">Register</button> 
</form>
   </div>
</div>
</body>


