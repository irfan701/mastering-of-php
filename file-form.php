
<?php
/*
 * File Input
 */
include_once 'functions.php'
?>

<?php
//chmod 0755 files

if (isset($_FILES['photo'])){
    $fileName=$_FILES['photo']['tmp_name'];
    $destination='files/'.$_FILES['photo']['name'];

    $fileType=$_FILES['photo']['type'];
    $allowedType=['image/png','image/jpg','image/jpeg'];

    $fileSize=$_FILES['photo']['size']<5*1024*1024;

    if (in_array($fileType,$allowedType)!=false && $fileSize){
        move_uploaded_file($fileName,$destination);
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        margin-top: 30px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <h4>File Input</h4>


        <div class="col-md-4">


            <?php
            $fname = '';
            $lname = '';
            ?>

            <p>
                <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { ?>
                    <!--              --><?php // $fname=htmlspecialchars($_REQUEST['fname']) ?>
                    <?php $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING) ?>
                <?php } ?>
                <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { ?>
                    <!--                    --><?php //$lname=htmlspecialchars($_REQUEST['lname']) ?>
                    <?php $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING) ?>
                <?php } ?>
            </p>
            <p>
                First Name : <?php echo $fname ?>
                <br/>
                Last Name : <?php echo $lname ?>
                <br>

                <?php

                if (isset($_REQUEST)){
                    echo "<pre>";
                    print_r($_REQUEST);
                }

                if (isset($_FILES)){
                    echo "<pre>";
                    print_r($_FILES);
                }
                ?>
            </p>


        </div>


        <div class="col col-md-6">
            <div class="row">
                <div class="card p-2" style="background: antiquewhite">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" id="fname" value="<?php echo $fname ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" id="lname" value="<?php echo $lname ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-2">
                                <label class="form-label">Photo</label>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-2">
                                <button type="submit"class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
</body>
</html>