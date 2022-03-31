<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduction php objet </h1>
    <h2>Instanciation</h2>
    <?php 

    function my_var_dump($var){

        echo "<pre style='background-color: orange; border: 2px solid black'>";
        var_dump($var);
        echo "</pre>";

    }

        include_once("user.class.php");

        $user1 = new User ("Dupont", "email@email.com", "DU");
        //var_dump($user1);
        $user2 = new User ("Durant", "email2@email.com", "DT");
        //var_dump($user1, $user2);
        $user3 = new User ("Duboit", "email3@email.com", "DUB");
        $user4 = new User ("1234", "134@mail.com", "123");

        //$user1->pseudo ="Dupont"; si la propriété était publique
        $user1->setPseudo ("Dupont");//on passe par un setter car la propriété est privée
        $user1->setEmail ("durand@gmail.com");
        $user2->setPseudo("Durand");
        $user3->setPseudo ("Dubois");
        $user4->setPseudo ("123456789");// doit retourner pseudo trop

        if($user1->envoyerEmail('le titre','le texte du mail')){
            echo "<p> Mail envoyé! </p>";
        }   
        else {
            echo "<p> Mail non envoyé! </p>";
        }     
        
        /*var_dump($user1);
        var_dump($user2);
        var_dump($user3);
        var_dump($user4); */ 

        echo "<pre style='background-color:orange;'>";
        my_var_dump($user1);

        $user1->bloquer();
        
        //echo "<br>";
        //my_var_dump($user1);
        //echo "</pre>";

        my_var_dump($user1);
        my_var_dump($user2);
        my_var_dump($user3);
        my_var_dump($user4);
    ?>
    <h2>Héritage</h2>
        <?php
        include_once("admin.class.php");
        $admin= new Admin("Admin1", "admin1@mail.com", "ADM");
        my_var_dump($admin);
        $admin->supprimerUser($user2);
        ?>

</body>
</html>