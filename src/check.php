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

$campaignPDO = new CampaignPDO();

$campaigns = $campaignPDO->getCampaigns();

echo "<table border=1>";
echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Header</th>";
        echo "<th>Body</th>";
    echo "<th>Footer</th>";
    echo "<th>Update</th>";
    echo "<th>Delete</th>";
echo "</tr>";


foreach($campaigns as $campaign)
{
        echo "<tr>";
        echo "<td >";
        echo $campaign->getId();
        echo "</td>";
        echo "<td >";
        echo $campaign->getHeader();
        echo "</td>";
        echo "<td>";
        echo $campaign->getBody();
        echo "</td>";
    echo "<td>";
        echo $campaign->getFooter();
        echo "</td>";
        echo "<td border=1>";
        echo "<a href='updateCampaign.php?id=" .$campaign->getId() ."'> Update Campaign </a>";
        echo "</td>";
        echo "<td border=1>";
        echo "<a href='deleteCampaign.php?id=" .$campaign->getId() ."'> Delete Campaign </a>";
        echo "</td>";
        echo "</tr>";

}

echo "</table>";

echo("<a href='index.html'> Back to Home</a>");

?>


</body>
</html>
