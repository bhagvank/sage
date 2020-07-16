<!DOCTYPE html>
<html>
<head>

<meta http-equiv='Content-Type'' content='text/html; charset=UTF-8' >
<title>Update Customer</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
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

<?php
  require_once("CustomerPDO.php");
   require_once("Customer.php");
   $customerid = $_GET["id"];
   
   $customerPDO = new CustomerPDO();
   $customer = $customerPDO->getCustomer($customerid);
  
?>
<div class="wrapper">	
<form action="EditCustomer.php" method="post">
<input type="hidden" name="customerid" value="<?php echo $customerid ?>">
<div class="form-group">
<label>Input name</label>
<input type="text" name="name" class="form-control" value="<?php echo $customer->getName() ?>">
</div>
<div class="form-group">
<label>Input Street Address</label>
<input type="text" name="streetaddress" class="form-control" value="<?php echo $customer->getStreetAddress() ?>">
</div>
<div class="form-group">
<label>Input State</label>
<input type="text" name="state" class="form-control" value="<?php echo $customer->getState() ?>">
</div>
<div class="form-group">
<label>Input Country</label>
<input type="text" name="country" class="form-control" value="<?php echo $customer->getCountry() ?>">
</div>
<div class="form-group">
<label>Input ZipCode</label>
<input type="text" name="zipcode" class="form-control" value="<?php echo $customer->getZipCode() ?>">
</div>
<div class="form-group">
<label>Input City</label>
<input type="text" name="city" class="form-control" value="<?php echo $customer->getCity() ?>">
</div>
<div class="form-group">
<label>Input Contact No</label>
<input type="text" name="contactno" class="form-control" value="<?php echo $customer->getContactNo() ?>">
</div>
<div class="form-group">
<label>Input Email</label>
<input type="text" name="email" class="form-control" value="<?php echo $customer->getEmail() ?>">
</div>

<div class="form-group">
<input type="submit" name="submit" value="submit">
</div>
</form>
</div>
</body>
</html>
