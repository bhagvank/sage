<?php
   
   require_once("campaignPDO.php");
   require_once("campaign.php");
   $id = $_GET["id"];
   
   $campaignPDO = new CampaignPDO();
   $campaign = $campaignPDO->getCampaign($id);
  
 
   $campaignPDO->deleteCampaign($campaign);
   
   echo("<html>");
   echo("<head>");
  echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' >");
  echo("<link rel='stylesheet' type='text/css' href='menu.css'>");

  echo("<title>SAAS - Delete Campaign</title>");
  echo("</head>");
  echo("<body>");
  
  echo("Deleted Campaign </br>");
  echo("<a href='campaignList.php'> Back to Campaign List</a>");
  
  echo("</body>");
  echo("</html");
?>