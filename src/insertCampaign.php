<?php
require_once("campaignPDO.php");
require_once("campaign.php");

if(isset($_POST['submit']))
{
 $header = $_POST["header"];
 echo $header . "<br>\n";

 $body = $_POST["body"];
 echo $body ."<br>\n";

 $footer = $_POST["footer"];
 echo $footer ."<br>\n";

if($header !='' && $body !='' && $footer !='')
{
  
  $campaignPDO = new CampaignPDO(); 

  $campaign = new Campaign();
  $campaign->setHeader($header);
  $campaign->setBody($body);
  $campaign->setFooter($footer);
  $campaignPDO->insertCampaign($campaign);
  
  echo("<html>");
  echo("<head>");
  echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' >");
  echo("<link rel='stylesheet' type='text/css' href='menu.css'>");

  echo("<title>Content Marketing- Insert Campaign</title>");
  echo("</head>");
  echo("<body>");
  echo("Created a Campaign </br>");
  
   header( 'Location: campaignList.php' ) ;
  
  echo("</body>");
  echo("</html");
  
 }
 else {
     echo "Please fill all of the fields" . "<br>\n";
	 echo("<a href='createCampaign.php'> Back to Create Campaign</a>");
 }

  
}
?>
