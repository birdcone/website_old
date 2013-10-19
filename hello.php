
<?php
$conn = mysql_connect("localhost", "birdcone", "birdfood4u") or die(mysql_error());
mysql_select_db("BirdCone") or die(mysql_error());
?>


<html>
 <head>
  <title>Hello World</title>
 </head>
 <body>
 <?php echo '<p>Hello SQL</p>'; ?> 

<?php
    
    $q = "INSERT INTO User (Email, UserName) VALUES ('larry@bird.com', 'larry Bird')";
    $result = mysql_query($q) or die(mysql_error());

    Print "<table border cellpadding=3>"; 

     $data = mysql_query("SELECT * FROM User"); 
     if (!$data) {
        die('Invalid query: ' . mysql_error());
     }

     while($info = mysql_fetch_array( $data )) 
     { 
        Print "<tr>"; 
        Print "<th>Email:</th> <td>".$info['Email'] . "</td> "; 
        Print "<th>UserName:</th> <td>".$info['UserName'] . "</td> "; 
        Print "</tr>"; 
     } 
    Print "</table>"; 

mysql_close($conn);

?>

 </body>
</html>