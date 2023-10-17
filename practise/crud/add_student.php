<?php 
    $db = new mysqli('localhost','root','','students');
    if($db->connect_error){
        echo "Failed to connect db reason: ". $db->connect_error . "<br>";
    }else{
        echo "Database Connected Successfully!";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into user(first_name,last_name,email,password) values('".$first_name."','".$last_name."','".$email."','".$password."')";

        $result = $db->query($sql);
        if($result){
            header('Location: success.php');
        }
    }
    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Crud Application</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary">Student List</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="mb-3">
                    <label class="form-label">First Name </label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name"class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email"class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password"class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>
        </div>
    </div>    



</body>
</html>