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
        include_once("user.class.php");
        $user1 = new User ();
        //var_dump($user1);
        $user2 = new User ();
        //var_dump($user1, $user2);
        $user3 = new User ();
        $user4 = new User ();

        //$user1->psudo ="Dupont"; si la propriété était publique
        $user1->setPseudo ("Dupont");//on passe par un setter car la propriété est privée
        $user1->setEmail ("durand@gmail.com");
        $user2->setPseudo("Durand");
        $user3->setPseudo ("Dubois");
        $user4->setPseudo ("lojed");// doit retourner pseudo trop

        $user1->envoyerEmail('le titre','le texte du mail');        
        
        //var_dump($user1);
        /* var_dump($user2);
        var_dump($user3);
        var_dump($user4);  */

    ?>
</body>
</html>