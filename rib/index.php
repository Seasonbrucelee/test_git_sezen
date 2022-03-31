<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIB</title>
</head>
<body>
    <h1>Introduction php objet </h1>
    <h2>RIB Algorythm</h2>

    <?php 

    function my_var_dump($var){

        echo "<pre style='background-color: orange; border: 2px solid black'>";
        var_dump($var);
        echo "</pre>";

    }

    include_once("rib.class.php");

    $validator = new RIBValidator ("12345", "67891", "1234567891","43");
    my_var_dump($validator);
    //$validator->isValid();
    
    if ($validator->isValid()){//Intéroger la variable isValid qui est dans l'instance et pointé dans $
        echo "<p> Ce RIB est valide.</p>";
    }
    else{
        echo "<p> Ce RIB n'est pas valide!!!</p>";
    }

    ?>
    
</body>
</html>