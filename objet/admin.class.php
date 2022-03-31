<?php

include_once("user.class.php");

//Heritage depuis user

class Admin extends User
{
    private $droits;
    
    public function supprimerUser($user){
        echo "<p> L'adminstrateur " . $this->pseudo .
        " supprime l'utilisateur " .$user->pseudo . ".";
    }

}