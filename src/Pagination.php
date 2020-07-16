<!DOCTYPE html>
    <head>
        <title>PHP Pagination</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <?php
    require_once("Paginator.php");
 
    $conn       = new mysqli( '127.0.0.1', 'root', 'root', 'customer_conversion' );
 
  $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;  
   $query      = "SELECT * FROM CUSTOMER";
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit, $page );
// echo "count" .count( $results->data );
?>
    <body>
        <div class="container">
                <div class="col-md-10 col-md-offset-1">
                <h1>PHP Pagination</h1>
                <table class="table table-striped table-condensed table-bordered table-rounded" border=1>
                        <thead>
                                <tr>
                                <th width="20%">Customer Name</th>
                                <th width="20%">Contact No</th>
                                <th width="25%">City</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
        <tr>
                <td><?php echo $results->data[$i]['customername']; ?></td>
                <td><?php echo $results->data[$i]['contactno']; ?></td>
                <td><?php echo $results->data[$i]['city']; ?></td>
        </tr>
<?php endfor; ?>
 

                       </tbody>
                </table>
     <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
                </div>
        </div>
        </body>
</html>
