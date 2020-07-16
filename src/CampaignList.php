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
require_once("CampaignPDO.php");
require_once("campaign.php");
require_once("Paginator.php");

//$campaignPDO = new CampaignPDO();

//$campaigns = $campaignPDO->getCampaigns();

    $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'customer_conversion' );

  $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
   $query      = "SELECT * FROM CAMPAIGN";

    $Paginator  = new Paginator( $conn, $query );

    $results    = $Paginator->getData( $limit, $page );
// echo "count" .count( $results->data );
echo "Campaign List<br>";
echo "<table border=1>";
echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Header</th>";
        echo "<th>Body</th>";
    echo "<th>Footer</th>";
    echo "<th>Update</th>";
    echo "<th>Delete</th>";
echo "</tr>";


for( $i = 0; $i < count( $results->data ); $i++ )
{
        echo "<tr>";
        echo "<td >";
        echo $results->data[$i]['id'];
        echo "</td>";
        echo "<td >";
        echo $results->data[$i]['header'];
        echo "</td>";
        echo "<td>";
        echo $results->data[$i]['body'];
        echo "</td>";
    echo "<td>";
        echo $results->data[$i]['footer'];
        echo "</td>";
        echo "<td border=1>";
        echo "<a href='updateCampaign.php?id=" .$results->data[$i]['id'] ."'> Update Campaign </a>";
        echo "</td>";
        echo "<td border=1>";
        echo "<a href='deleteCampaign.php?id=" .$results->data[$i]['id'] ."'> Delete Campaign </a>";
        echo "</td>";
        echo "</tr>";

}

echo "</table>";
echo $Paginator->createLinks( $links, 'pagination pagination-sm' );
echo("<a href='welcome.php'> Back to Home</a>");
$conn = "";
?>

<div class="wrapper">
<form action="SendCampaigns.php" method="post">
 <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send">
            </div>

</form>
</body>
</html>
