<?php

// Classe mère des Controllers


abstract class Controller
{
    private  $fichier;
    private  $id;
    private  $message="";
    
    public function fichier() {
        return $this->fichier;
    }

    public function setFichier($fichier){
        if(is_string($fichier)){
            $this->fichier = $fichier;
        }
    }
    
    public function id() {
        return $this->id;
    }

    public function setId($id){
        $id = (int) $id;
        if ($id > 0){
            $this->id = $id;
        }
    }
    
    public function message() {
        return $this->message;
    }

    public function setMessage($msg) {
        $this->message=$msg ;
    }

    public function genererVue (array $posts=[])
    {
        $posts["messageConfirmation"] = $this->message;
        $contenu=self::genererFichier($posts);
        require 'View/Template.php' ;
    }
    
    public function genererFichier($posts=[])
    {
        extract($posts);
        // Enclenche la temporisation
        ob_start();
        // Inclut le fichier vue
        require $this->fichier();
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
    }
    
    public abstract function index();
}