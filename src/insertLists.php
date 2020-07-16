<?php
require_once("CustomerPDO.php");
require_once("Customer.php");
require_once("CampaignPDO.php");
require_once("campaign.php");

$customerPDO = new CustomerPDO();


$campaignPDO = new CampaignPDO();


$customers = $_POST['sbTwo'];

//echo count($customers);
$campaigns = $_POST['sbFour'];

?>
<html>
<head>

<meta http-equiv='Content-Type'' content='text/html; charset=UTF-8' >
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='menu.css'>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<img src="images/iot_logo.png" width="100" height="100" align="left">
</head>
<body>
<br>
<br>
<?php include "menu.php"; 


//echo count($campaigns);
echo "<table border=1 >";
echo "<tr>";
        echo "<th>Customer id</th>";
        echo "<th>Name</th>";
        echo "<th>Campaign Id</th>";
        echo "<th>Header</th>";
        echo "</tr>";
foreach($customers as $customer)
{
	$customerObject = $customerPDO->getCustomer($customer);
  //echo "Customers " .$customerObject->getName();
foreach($campaigns as $campaign)
{
	$campaignObject = $campaignPDO->getCampaign($campaign);
        echo "<tr>";
        echo "<td>";
        echo $customerObject->getCustomerId();
        echo "</td>";
        echo "<td>";
        echo $customerObject->getName();
        echo "</td>";
        echo "<td>";
        echo $campaignObject->getId();
        echo "</td>";
        echo "<td>";
        echo $campaignObject->getHeader();
        echo "</td>";
        echo "</tr>";
}

}
echo "</table>";
 //echo "Campaigns " .$campaignObject->getHeader();

?>