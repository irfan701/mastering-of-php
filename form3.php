
<?php

include_once 'functions.php'
?>
<?php

/*
 *
 * Sanitize of User Input
 */
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
        <div class="col col-md-12 offset-md-3">

       <h2>Input Checkbox & Group Checkbox</h2>

            <?php
            $fname = '';
            $lname = '';
            $checked='';

            ?>

            <p>
                <?php if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1) {

                    $checked="checked";
                }?>



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
                First Name :<?php echo $fname ?>
                <br/>
                Last Name :<?php echo $lname ?>
            </p>

            <?php
            print_r($_REQUEST['fruits'])
            ?>
            ?>

            <div class="row">
                <div class="col-md-6 card">
                    <form method="POST">
                        <div class="col-md-8">
                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" value="<?php echo $fname ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" value="<?php echo $lname ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-2">
                                <input type="checkbox" name="cb1" value="1" <?php echo $checked ?>>
                                <label class="form-label">CheckBox 1</label>
                            </div>
                            <label class="form-label">Select Some Fruits</label>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-2">
                                <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange'); ?>>
                                <label class="form-label">Orange</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits','mango'); ?>>
                                <label class="form-label">Mango</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits','banana'); ?>>
                                <label class="form-label">Banana</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits','lemon'); ?>>
                                <label class="form-label">Lemon </label>
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