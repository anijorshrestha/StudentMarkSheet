<?php

function renderForm($subject, $semester , $total_marks,  $error)

{

    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <html>

    <head>

        <title>Add Subject</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>

    </head>

    <body>
    <?php

    // if there are any errors, display them

    if ($error != '')

    {

        echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

    }

    ?>

    <div class="container">
        <form action="" method="post">
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Subject Name</label>

                <div class="col-xs-10">
                    <input class="form-control" type="text" value="<?php echo $subject; ?>" id="example-text-input" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Total Marks</label>

                <div class="col-xs-10">
                    <input class="form-control" type="text" value="<?php echo $total_marks; ?>" id="example-text-input"
                           name="total_marks">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Semester</label>

                <div class="col-xs-10">
                    <input class="form-control" type="text" value="<?php echo $semester; ?>" id="example-text-input"
                           name="semester">
                </div>
            </div>
            <div class="col-md-12">
                <input class="btn btn-primary btn-block" name="submit" type="submit" value="Add" />
            </div>
        </form>
    </div>
    </body>
    </html>

<?php
    }
    include '../../config/connect-db.php';

    if (isset($_POST['submit'])){
        $subject = $_POST['name'];
        $total_marks = $_POST['total_marks'];
        $semester = $_POST['semester'];
        if($subject == "" || $semester == ""  || $total_marks == ""){
            $error = 'ERROR: Please fill in all required fields!';

            renderForm($subject, $semester, $total_marks, $error);

        }
        else

        {

            settype($semester,int);
            settype($total_marks,int);

            mysql_query("insert into subject (name, total_marks, semester) VALUES ('$subject','$total_marks','$semester')")

            or die(mysql_error());

            header("Location: view.php");

        }
    }
    else

    {

        renderForm('','','','');

    }

?>