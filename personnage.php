<?php
// on créé en premier lieu la classe du personnage

class personnage { //dedans on va définir des propriétés de notre personnage, ces propriétés seront des variables

    public $vie = 20; //on baisse la vie de 100 à 80 et on créé une fonction pour le regenerer à 100
    public $atk = 20;
    public $nom;

    public function __construct($nom){ //quand on instancie notre classe pour créer les diff objets, on fait appelle à un constructeur
        $this->nom = $nom; // on passe le nom dans le propriété au dessus (dans class), le constructeur va nous permettre de faire des opérations initiales et de sauvegarder des informations au niveau de notre instance, pour avoir un code plus clair
    }

    public function regenerer($vie = null){
        $this->vie = 100; //this fait référence à l'instance en cours, si on veut la vie, on fait this->vie, la fonction prend la vie du perosnnage et la remonte
    // le $this appelle les variables dans index.php
        if(is_null($vie)){
            $this->vie= 100;
        }else{
            $this->vie += $vie;
        }
    }

    public function crier() { //ici la fonction est aussi appelée méthode
        echo 'je sais me battre';
    }

    public function mort(){
        return $this->vie <= 0;
}

    public function attaque($cible){ //notre objet est passé en paramètre, c'est à dire $cible
        /*$this //Attaquant
        $cible // défenseur
        defenseur.vie -= attaquant.atk */
        $cible->vie -= $this->atk;

    }

}