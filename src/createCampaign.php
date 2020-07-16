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

<div class="wrapper">



 <form action="insertCampaign.php" method="post">

<div class="form-group">
<label>Header</label>
<textarea name="header" class="form-control" > </textarea>
</div>
<div class="form-group">
<label>Body</label>
<textarea name="body" class="form-control" > </textarea>
</div>
<div class="form-group">
<label>Footer</label>
<textarea name="footer" class="form-control" > </textarea>
</div>
<div class="form-group">
<input type="submit" name="submit" value="submit">
</div>
</div>
</body>
</html>
