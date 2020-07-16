<?php
require_once("CustomerPDO.php");
require_once("Customer.php");

$name = $_POST["name"];
$streetaddress= $_POST["streetaddress"];
$state= $_POST["state"];
$country = $_POST["country"];
$zipcode = $_POST["zipcode"];
$contactno = $_POST["contactno"];
$city = $_POST["city"];
$email = $_POST["email"];
  $customerPDO = new CustomerPDO();

  $customer = new Customer();
  $customer->setName($name);
  $customer->setStreetAddress($streetaddress);
       $customer->setState($state);
       $customer->setCountry($country);
       $customer->setZipCode($zipcode);
       $customer->setContactNo($contactno);
       $customer->setCity($city);
       $customer->setEmail($email);
 $customerPDO->insertCustomer($customer);

    header( 'Location: CustomerList.php' ) ;
  
?>
