<?php

session_start();
$conn = mysqli_connect("localhost","root","","employeepartpaysep2022");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    a:link, a:visited {
  background-color:green;
  color: white;
  padding: 8px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #4bdb9d;
}
</style>
<body>
    <?php

        if(isset($_SESSION['status'])){
            echo "<h3 style='font-family:cursive;color:red;text-align:center'>".$_SESSION['status']."</h3>";
            unset($_SESSION['status']);
        }
        echo "<br><br>";
        
        //$conn=mysqli_connect("localhost","root","","employeepartpaysep2022") or die ("Coonection Failed");

        $sql="SELECT `Id`,`FirstName`,`TotalAmount`,`PaidAmount`,`DueAmount` FROM `employeemaster`";
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful...");

        echo "<html>
        <head>
        <style>
        td,table,th{border:2px solid; padding:12px 20px; font-size:20px}
        </style>
        </head>
        <body><center>
        <table>
        <tr align='center' style='background-color:#cdf5ba;'>
        <th>Name</th>
        <th>Total Amount</th>
        <th>Paid Amount</th>
        <th>Due Amount</th>
        <th>Action</th>
        </tr>" ;

        for($i=1;$i<=mysqli_num_rows($result);$i++){
            $row=mysqli_fetch_assoc($result);
            echo "<tr>
            <td>";echo $row['FirstName'];echo "</td>
            <td>";echo $row['TotalAmount'];echo "</td>
            <td>";echo $row['PaidAmount'];echo "</td>
            <td>";echo $row['DueAmount'];echo "</td>
            <td><a href=pay.php?id=$row[Id]>Pay</a></td>
            
            </tr>";
            
        }
        echo "</table>
        </center>
        </body>
        </html>";


    ?>
</body>
</html>


