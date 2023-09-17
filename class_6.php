<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = validateForm($_POST['email']); 
        $password = validateForm($_POST['password']) ; 

        if($email == 'ar@gmail.com' && $password == "123"){
            echo "Login Successful";
        }else{
            echo "Invalid Creds";
        }
        echo "<br>";
        echo $email ;
        echo "<br>";
        echo $password;
    }

    function validateForm($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>








<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-warning p-5 mt-5">
        <h2 class="text-white">Login user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Email address </label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password"class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>