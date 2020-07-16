<?php
   
   require_once("CustomerPDO.php");
   require_once("Customer.php");
   $customerid = $_GET["id"];
   
   $customerPDO = new CustomerPDO();
   $customer = $customerPDO->getCustomer($customerid);
  
 // echo "UserId " .$user->getUserId();

   $customerPDO->deleteCustomer($customer);
   
   echo("<html>");
   echo("<head>");
  echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' >");
  echo("<link rel='stylesheet' type='text/css' href='menu.css'>");

  echo("<title>News Portal - Delete Customer</title>");
  echo("</head>");
  echo("<body>");
  include "menu.php";
  echo("Deleted Customer </br>");
 
  header( 'Location: CustomerList.php' ) ; 
  echo("</body>");
  echo("</html");
?>
