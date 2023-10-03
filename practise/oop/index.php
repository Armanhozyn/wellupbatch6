<?php require "./Calculator.php"; ?>
<?php 
    $num_one = "";
    $num_two = "";
?>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num_one = $_POST['number_one'];
        $num_two = $_POST['number_two'];

        $calc = new Calculator();
        $add = $calc->add($num_one,$num_two);
        $subs = $calc->subs($num_one,$num_two);
        $multi = $calc->multi($num_one,$num_two);
        $divide = $calc->divide($num_one,$num_two);

        echo "Addition is". "-". $add;
        echo "<br>";
        echo "Substraction is". "-". $subs;
        echo "<br>";
        echo "Multiplication is". "-". $multi;
        echo "<br>";
        echo "divide is". "-". $divide;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-dark text-white mt-5 p-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Number One</label>
                <input type="number" class="form-control" name="number_one">
            </div>
            <div class="mb-3">
                <label class="form-label">Number Two</label>
                <input type="number" class="form-control" name="number_two">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>