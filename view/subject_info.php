<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

    <title>View Records</title>

</head>

<body>
<?php
    include '../config/connect-db.php';


    $result = mysql_query("SELECT * FROM subject")

    or die(mysql_error());
?>

<table class="table">
    <thead class="thead-inverse">
    <tr>
        <th>S No.</th>
        <th>Subject</th>
        <th>Total Marks</th>
        <th>Semester</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $count = 0;
        while($row = mysql_fetch_array( $result)){
            $count++;
            echo "<tr>";
            echo '<td>' . $count . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['total_marks'] . '</td>';
            echo '<td>' . $row['semester'] . '</td>';
            echo '<td>'. '<a href="edit_subject.php?id=<?php echo $row["id"];?>Edit</a>'.'</td>';
            echo "</tr>";
        }
    ?>

    </tbody>
</table>




