<?php
    require_once("Paginator.php");

    $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'customer_conversion' );

  $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
   $query      = "SELECT * FROM PROJECTIONSILVER";

    $Paginator  = new Paginator( $conn, $query );

    $results    = $Paginator->getData( $limit, $page );
// echo "count" .count( $results->data );
?>

<html>
<head>

<meta http-equiv='Content-Type'' content='text/html; charset=UTF-8' >
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='menu.css'>
<title>Bronze to Silver</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<img src="images/iot_logo.png" width="100" height="100" align="left">
</head>
<body>
<br>
<br>
<?php include "menu.php";

echo "<br>";
echo "<br>";
echo "<div class='wrapper'>";
echo "<table border=1 >";
echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Name</th>";
        echo "<th>Projected</th>";
        echo "<th>Loyalty Points</th>";
echo "</tr>";


for( $i = 0; $i < count( $results->data ); $i++ )
{
        echo "<tr>";
        echo "<td>";
        echo $results->data[$i]['customerid'];
        echo "</td>";
        echo "<td>";
        echo $results->data[$i]['customername'];
        echo "</td>";
        echo "<td>";
        echo $results->data[$i]['projected'];
        echo "</td>";
        echo "<td>";
        echo $results->data[$i]['loyaltypoints'];
        echo "</td>";
        echo "</tr>";

}

echo "</table>";
echo $Paginator->createLinks( $links, 'pagination pagination-sm' );
echo("<a href='welcome.php'> Back to Home</a>");
echo "</div>";
echo "</body>";
echo "</html>";

?>
