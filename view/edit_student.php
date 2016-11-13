<?php
$id = $_GET["id"];
include '../config/connect-db.php';
$result = mysql_query("SELECT * FROM student")

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
    <h1>Edit Student</h1>
    <form action = "edit_student.php?id=<?php echo $rs["id"];?>" method = "POST">
        Name : <input type="text" name="name" value=<?php echo $rs["name"];?> ><br>
        Address : <input type="text" name="address" value=<?php echo $rs["address"];?>><br>
        Batch : <input type="text" name="batch" value=<?php echo $rs["batch"];?>><br>
        Mobile : <input type="text" name="mobile" value=<?php echo $rs["mobile"];?>><br>
        Email : <input type="text" name="email" value=<?php echo $rs["email"];?>><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </body>
    </html>
<?php
if(isset($_POST["submit"])){
    $id = $_GET["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $batch=$_POST["batch"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $res = mysql_query("UPDATE `student` SET name='$name', address='$address' , batch='$batch', mobile='$mobile', email='$email'  WHERE id='$id'")

    or die(mysql_error());
    if($result){
        header("Location:student_info.php");
    }
}

?>