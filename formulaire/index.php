<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Introduction php objet 
    </h1>
    <h2>Formulaire</h2>

    <!-- CODE VALIDE -->
    <?php if (isset($_GET["code"])) { ?>
            <div class="alert alert-success" role="alert">
                <?php if($_GET["code"] == 1) echo "Votre code est correct!"; ?>
            </div>
            <?php var_dump($_GET);   } ?> 

            <!--------- ERREUR -------->

            <?php if (isset($_GET["erreur"])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php if($_GET["erreur"] == 2) echo "Votre code n'est pas valide! Veuillez recommencer svp!"; ?>
            </div>
            <?php var_dump($_GET); } ?> 

    <form action="#" method="get" class="form-example">
    <div class="form-example">
    Code Banque :<br>
    <input type="nombre" name="codebank" size="40" maxlength="40"><br>
    Code Agence :<br>
    <input type="nombre" name="codeagence" size="40" maxlength="40"><br>
    Numéro de compte :<br>
    <input type="nombre" name="nombrecompte" size="40" maxlength="40"><br>
    Clé Rib :<br>
    <input type="nombre" name="ribcle" size="20" maxlength="20"><br>
    </div>
    <br>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
    <br>
    <div>
    <button type="reset"> Recommencer</button>
    </div>

</form>

    <?php 

    function my_var_dump($var){

        echo "<pre style='background-color: orange; border: 2px solid black'>";
        
        var_dump($var);
        
        echo "</pre>";

    }
    include_once("../rib/rib.class.php");

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