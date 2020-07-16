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
  require_once("campaignPDO.php");
   require_once("campaign.php");
   $id = $_GET["id"];

   $campaignPDO = new CampaignPDO();
   $campaign = $campaignPDO->getCampaign($id);

?>
<div class="wrapper">



<form action="editCampaign.php" method="post">
<input type="hidden" name="id" value="<?php echo $id ?>">
<div class="form-group">
<label>Header</label>
<textarea name="header" class="form-control" ><?php echo $campaign->getHeader() ?>  </textarea>
</div>
<div class="form-group">
<label>Body</label>
<textarea name="body" class="form-control" ><?php echo $campaign->getBody() ?> </textarea>
</div>
<div class="form-group">
<label>Footer</label>
<textarea name="footer" class="form-control" ><?php echo $campaign->getFooter() ?> </textarea>
</div>
<div class="form-group">
<input type="submit" name="submit" value="submit">
</div>
</div>
</body>
</html>
