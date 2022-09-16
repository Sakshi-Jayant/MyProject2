<?php
session_start();

$conn=mysqli_connect("localhost","root","","employeepartpaysep2022") or die ("Coonection Failed");

$id=$_GET['id'];

// print_r($id);
// exit;
$q="SELECT `FirstName`,`TotalAmount`,`PaidAmount`,`DueAmount` FROM `employeemaster` WHERE`Id`='$id'";

$result=mysqli_query($conn,$q);

$row=mysqli_fetch_assoc($result);

$name = $row['FirstName'];
$ta = $row['TotalAmount'];
$pa = $row['PaidAmount'];
$da = $row['DueAmount'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Form</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head> 
<style>
        td,table,th{ padding:18px 10px; font-size:20px}
</style>
<body style="text-align:center"><br><br><br>
<center>
<table >
     <tr><th><h3>Employee</h3><th>
         <th><h3><?=$name ?></h3></th>
     </tr>
     
     <form method="POST" style="font-size:18px;font-family:cursive">
     <tr>
        <td><label>Total:</label>&nbsp;&nbsp;
         <input type=text name="total" value="<?=$ta ?>"></td>
    </tr>
    <tr>
        <td><label>Due:</label>&nbsp;&nbsp;&nbsp;
        <input type=text name="da" value="<?=$da ?>"></td>
    </tr>
    <tr>
        <td><label>Paid:</label>&nbsp;&nbsp;&nbsp;
        <input type=text name="pa" value="<?=$pa ?>"><td>
    </tr>
    <tr>
        <td><label>Amount to be Paid:</label>&nbsp;&nbsp;&nbsp;
        <input type=text id="solve" value="<?=$pa ?>"><td>
    </tr>
    <tr>   
        <td><button type="submit" name="Update" value="Update" class ="btn btn-success">Pay</button></td>
    </tr>
</form>
</table>
</center>
</body>
 </html>
