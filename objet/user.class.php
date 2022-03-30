<?php

class User {
    //propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    //Methodes
    public function __construct($pseudo,$email, $signature)
    {
        //echo "Construct!";
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->signature = $signature;
        $this->actif = true;
    }
    public function __destruct()
    {
        echo "Destruct de" . $this->pseudo . "!";
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($newPseudo){
        if (!empty($newPseudo) and strlen($newPseudo) < 10) {
            $this->pseudo = $newPseudo;
        }
        else{
            echo"<p>pseudo vide ou trop long!</p>";
        }
    }

    public function setEmail($newEmail)
    {
        if(!empty($newEmail) and strlen($newEmail) < 100) {
            $this->email = $newEmail;
        } else{
            echo '<p>Email vide ou trop long!</p>';
        }  
    }

    public function envoyerEmail($titre,$message="Texte par défaut"){
        $retour = mail($this->email,$titre,$message);
        //if (!$retour and DEBUG) my_log("Pb mail!");
        return $retour;
        //return mail($this->email,$titre,$message);
    }
    public function bloquer(){
        $this->actif = false;
        $this->envoyerEmail("Alerte user!", "Vous êtes bloqué!");
    }
}

