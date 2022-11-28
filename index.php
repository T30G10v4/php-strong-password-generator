<?php 
            
    $characters =   [["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],
                    ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"],
                    ["0","1","2","3","4","5","6","7","8","9"],
                    ["!","£","$","%","&","/","(",")","="]];

    $length = $_GET["length"] ?? "";
    $password = [];
    for($i = 0; $i<$length; $i++) {

        $type=rand(0, (count($characters)-1));
        
        $value = rand(0, (count($characters[$type])-1));

        $password[] = $characters[$type][$value];

    }

    $password = implode("", $password);
    
            
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
    <form action="index.php" method="GET">

        <label for="length">Lunghezza Password</label>
        <input type="text" name="length">
        <button>CALCOLA</button>
    </form>
    <h2>
    <?php var_dump($password) ; ?>
    </h2>
</body>
</html>