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
<?php
require_once("Paginator.php");

//$campaignPDO = new CampaignPDO();

//$campaigns = $campaignPDO->getCampaigns();

    $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'customer_conversion' );

  $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 15;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
   $query      = "SELECT * FROM CONVERSION";

    $Paginator  = new Paginator( $conn, $query );

    $results    = $Paginator->getData( $limit, $page );
echo "Customer Conversion<br>";
echo "<table border=1>";
echo "<tr>";
        echo "<th>Customer Name</th>";
        echo "<th>Campaign ID</th>";
        echo "<th>Header</th>";
        echo "<th>Coupon Id</th>";
echo "</tr>";


for( $i = 0; $i < count( $results->data ); $i++ )
{
        echo "<tr>";
        echo "<td >";
        echo $results->data[$i]['customername'];
        echo "</td>";
        echo "<td >";
        echo $results->data[$i]['campaignid'];
        echo "</td>";
        echo "<td>";
        echo $results->data[$i]['header'];
        echo "</td>";
         echo "<td>";
        echo $results->data[$i]['couponid'];
        echo "</td>";
        echo "</tr>";

}

echo "</table>";
echo $Paginator->createLinks( $links, 'pagination pagination-sm' );
echo("<a href='welcome.php'> Back to Home</a>");
$conn = "";
?>

</form>
</body>
</html>
