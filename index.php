<?php 
    
    session_start();

    include __DIR__ . "/functions.php";
    
    $length = $_GET["length"] ?? "";
    $password = createPassword($length);
    //header("Location: ./result.php");
    $_SESSION["password"] = $password;
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="result.php" method="GET">

        <label for="length">Lunghezza Password</label>
        <input type="text" name="length">
        <button>CALCOLA</button>
    </form>
    <h2>
    <?php echo $password; ?>
    </h2>
</body>
</html>