<?php
$errfile = ""; 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_FILES['upload_file'])){
            
            $filename = $_FILES['upload_file']['name'];
            $fileTemp = $_FILES['upload_file']['tmp_name'];
            $fileType = $_FILES['upload_file']['type'];
            if($fileType == "image/jpeg" || $fileType == "image/png"){
                move_uploaded_file($fileTemp,'./image/'.$filename);
                echo "File Uploaded Successfully";
            }else{
                $errfile = "<span style='color:red'>Only JPEG and PNG file Supported</span>";
            }
            
        }
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Upload your file </label>
                <input type="file" name="upload_file" class="form-control">
                <?php echo $errfile; ?>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>