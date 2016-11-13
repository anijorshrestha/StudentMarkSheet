<html>

<head>

    <title>View Records</title>

</head>

<body>
<?php
include '../config/connect-db.php';


$result = mysql_query("SELECT * FROM student")

or die(mysql_error());
?>

<table class="table">
    <thead class="thead-inverse">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Batch</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysql_fetch_assoc( $result)){
        ?>
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["name"];?></td>

        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["batch"];?></td>
        <td><?php echo $row["mobile"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><a href="edit_student.php?id=<?php echo $row["id"];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>

    </tr>

    <?php }?>


    </tbody>

</table>




