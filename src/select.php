<?php
require_once("CustomerPDO.php");
require_once("Customer.php");
require_once("CampaignPDO.php");
require_once("campaign.php");
//require_once("Paginator.php");

$customerPDO = new CustomerPDO();

$customers = $customerPDO->getCustomers();

$campaignPDO = new CampaignPDO();

$campaigns = $campaignPDO->getCampaigns();
?>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
$(function () { function moveItems(origin, dest) {
    $(origin).find(':selected').appendTo(dest);
}
 
function moveAllItems(origin, dest) {
    $(origin).children().appendTo(dest);
}
 
$('#left').click(function () {
    moveItems('#sbTwo', '#sbOne');
});
 
$('#right').on('click', function () {
    moveItems('#sbOne', '#sbTwo');
});
 
$('#leftall').on('click', function () {
    moveAllItems('#sbTwo', '#sbOne');
});
 
$('#rightall').on('click', function () {
    moveAllItems('#sbOne', '#sbTwo');
});
$('#left1').click(function () {
    moveItems('#sbFour', '#sbThree');
});
 
$('#right1').on('click', function () {
    moveItems('#sbThree', '#sbFour');
});
 
$('#leftall1').on('click', function () {
    moveAllItems('#sbFour', '#sbThree');
});
 
$('#rightall1').on('click', function () {
    moveAllItems('#sbThree', '#sbFour');
});

});
</script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include "menu.php"; ?>
    <form action="insertLists.php" method="POST">
    <div class="wrapper">
     Select Customers- Create a List<br>
     <br>
     <select name="sbOne[]" id="sbOne" multiple="multiple" size=10>
        <optgroup label="Customers">
        <?php
         foreach($customers as $customer)
         {
          echo "<option value=\"".$customer->getCustomerId()."\">".$customer->getName()."</option>";
         }
        ?>
       </optgroup>
       
     </select>
 
     <select name="sbTwo[]" id="sbTwo" multiple="multiple" size=10>
        <option selected disabled>Choose one</option>
     </select>
 
     <br>
 
     <input type="button" id="left" value="<" />
     <input type="button" id="right" value=">" />
     <input type="button" id="leftall" value="<<" />
     <input type="button" id="rightall" value=">>" />

     <br>
     <br>
    
     Select Camapaigns - Create a List<br>
     <br>
     <select name="sbThree[]" id="sbThree" multiple="multiple" size=10>
        <optgroup label="Campaigns">
        <?php
         foreach($campaigns as $campaign)
         {
          echo "<option value=\"".$campaign->getId()."\">".$campaign->getHeader()."</option>";
         }
        ?>
        </optgroup>
     </select>

 
     <select name="sbFour[]" id="sbFour" multiple="multiple" size=10>
        <option selected disabled>Choose one</option>
     </select>
 
     <br />
 
     <input type="button" id="left1" value="<" />
     <input type="button" id="right1" value=">" />
     <input type="button" id="leftall1" value="<<" />
     <input type="button" id="rightall1" value=">>" />
    <br>
    <br>
     <div class="form-group">
     <input type="submit" name="submit" value="Send SMS & Email">
     </div>
     </form>
</body>
</html>
