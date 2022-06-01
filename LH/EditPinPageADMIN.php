<?php 

$db = mysqli_connect("localhost", "root", "", "rptra_lh");

?>



<!DOCTYPE html>
<html>

<head>
<title> Edit PIN Registrasi </title>
</head>
<body>

<table style="width: 80%" border="1">

<tr>
<th>PIN</th>
<th>Edit PIN</th>
</tr>
<?php 
$i = 1;
$qry = "select * from pinadminlh";
$run = $db -> query($qry);
if($run -> num_rows > 0 ){
    while($row = $run -> fetch_assoc()){
        $id = $row['ID_PIN'];

?>
<tr>
<td><?php echo $row['PIN'] ?></td>
<td>
        <a href="EditPin.php?id=<?php echo $id; ?>">Edit</a>
</td>
</tr>
<?php 
    }
}
?>
</table>




</body>
</html>

