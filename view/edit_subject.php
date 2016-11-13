<?php
$id = $_GET["id"];
include '../config/connect-db.php';
$result = mysql_query("SELECT * FROM subject")

or die(mysql_error());
$rs= mysql_fetch_assoc( $result)

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
    </head>
    <body>
    <h1>Edit Subject</h1>
    <form action = "edit_subject.php?id=<?php echo $rs["id"];?>" method = "POST">

        Name : <input type="text" name="name" value=<?php echo $rs["name"];?>><br>
        Total Marks : <input type="text" name="total_marks" value=<?php echo $rs["total_marks"];?>><br>
        Semester : <input type="text" name="semester" value=<?php echo $rs["semester"];?>><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </body>
    </html>
<?php
if(isset($_POST["submit"])){
    $id = $_GET["id"];
    $name = $_POST["name"];
    $total_marks = $_POST["total_marks"];
    $semester=$_POST["semester"];

    $res = mysql_query("UPDATE `subject` SET name='$name', total_marks='$total_marks' , semester='$semester' WHERE id='$id'")

    or die(mysql_error());
    if($res){
        header("Location:subject_info.php");
    }
}

?>