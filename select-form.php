
<?php
/*
 * Select Single DropDown/ Multiple DropDown
 */

include_once 'functions.php';
$fruits=['mango','Banana','orange','apple','lemon','peach'];
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
        <h4>Select/Dropdowns</h4>
            <p>
        <!--   For Single-->
                <?php if (isset($_REQUEST['fruits']) && !empty($_REQUEST['fruits'])) { ?>
                    <?php echo "You have selected: ".filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING) ?>
                <?php } ?>
                <br>

        <!--  For Multiple Select-->
                <?php
               // $selectedFruits=$_POST['fruits'] ?$_POST['fruits']:array();
                // $selectedFruits=$_POST['fruits'] ?? array();  //PHP 7 SUPPORT
                 $selectedFruits=filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY)?? array();
                if(count($selectedFruits)>0){
                    echo "You have selected: ".join(", ",$selectedFruits);
                }
                ?>
            </p>
            <p>
                <?php
                if (isset($_REQUEST['fruits'])){
                    print_r($_REQUEST['fruits']);
                }
                ?>
            </p>

            <div class="row">
                <div class="col-md-6 card p-2" style="background: antiquewhite">
                    <form method="POST">
                        <div class="col-md-8">
                            <div class="mb-2">
                                <select name="fruits">
                                    <option value="" disabled selected>Select Some Fruits</option>
                                    <?php displayOptions($fruits,$selectedFruits); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-2">
                                <select style="height: 200px" name="fruits[]" multiple>
                                    <option value="" disabled selected>Select Multiple Fruits</option>
                                    <?php displayOptions($fruits,$selectedFruits); ?>
                                </select>
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