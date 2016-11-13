<?php
$id = $_GET["id"];
include '../../config/connect-db.php';
$result = mysql_query("SELECT * FROM subject where id=$id")

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
    <form action = "editSubject.php?id=<?php echo $rs["id"];?>" method = "POST">

        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Subject Name</label>

            <div class="col-xs-10">
                <input class="form-control" type="text" value="<?php echo $rs["name"]; ?>" id="example-text-input" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Total Marks</label>

            <div class="col-xs-10">
                <input class="form-control" type="text" value="<?php echo $rs["total_marks"]; ?>" id="example-text-input"
                       name="total_marks">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Semester</label>

            <div class="col-xs-10">
                <input class="form-control" type="text" value="<?php echo $rs["semester"]; ?>" id="example-text-input"
                       name="semester">
            </div>
        </div>
        <div class="col-md-12">
            <input class="btn btn-primary btn-block" name="submit" type="submit" value="Add" />
        </div>
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