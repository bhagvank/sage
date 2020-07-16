
<!DOCTYPE html>
<html>
        <head>
                <meta content="noindex, nofollow" name="robots">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel='stylesheet'' type='text/css' href='menu.css'>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<img src="images/iot_logo.png" width="100" height="100" align="left">
</head>
<body>
<br>
<br>
<?php include "menu.php"; ?>

<div class="wrapper">


<form action="InsertCustomer.php" method="post">
<div class="form-group">
<label>Input name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="form-group">
<label>Input Street Address</label>
<input type="text" name="streetaddress" class="form-control">
</div>
<div class="form-group">
<label>Input State</label>
<input type="text" name="state" class="form-control">
</div>
<div class="form-group">
<label>Input Country</label>
<input type="text" name="country" class="form-control">
</div>
<div class="form-group">
<label>Input ZipCode</label>
<input type="text" name="zipcode" class="form-control">
</div>
<div class="form-group">
<label>Input City</label>
<input type="text" name="city" class="form-control">
</div>
<div class="form-group">
<label>Input Contact No</label>
<input type="text" name="contactno" class="form-control">
</div>
<div class="form-group">
<label>Input Email</label>
<input type="text" name="email" class="form-control">

<div class="form-group">
<input type="submit" name="submit" value="submit">
</div>
</form>
</div>
</body>
</html>
