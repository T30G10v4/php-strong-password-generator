<?php 
            
    function createPassword($length) {

        $characters =   [["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],
                        ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"],
                        ["0","1","2","3","4","5","6","7","8","9"],
                        ["!","£","$","%","&","/","(",")","="]];

        $password = [];

        for($i = 0; $i<$length; $i++) {

            $type = rand(0, (count($characters)-1));
        
            $value = rand(0, (count($characters[$type])-1));

            $password[] = $characters[$type][$value];

        }

        $password = implode("", $password);

        return $password;

    }   
            
?>