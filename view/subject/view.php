<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

    <head>

        <title>View Records</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>

    </head>

    <body>
        <?php
            include ('../../config/connect-db.php');


            $result = mysql_query("SELECT * FROM subject")

            or die(mysql_error());
        ?>
        <div class="container">
            <p><a href="../subject/new.php"><button type="button" class="btn btn-default">Add a new subject</button></a></p>
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>S No.</th>
                    <th>Subject</th>
                    <th>Total Marks</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $count = 0;
                while($row = mysql_fetch_array( $result)){
                    $count++;
                    echo "<tr>";
                    echo '<td scope="row">' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . $row['id']. '</td>';
                    echo '<td>' . $row['total_marks'] . '</td>';
                    echo '<td>' . $row['semester'] . '</td>';
                    echo '<td><a href="../edit_subject.php?id= '.$row['id'].'"><button type="button" class="btn btn-success">Edit</button> </a> &nbsp;&nbsp;<a href="../../controller/studentController.php?delete=' .$row['id'].'"><button type="button" class="btn btn-danger">Delete</button> </a> </td>';
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>

        </div>
    </body>
</html>




