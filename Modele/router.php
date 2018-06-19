<?php

/** Récupère les infos url pour définir l'action à entreprendre
* - Controleur Accueil    + Action Index        => Affichage de la page d'Accueil
* - Controleur Accueil    + Action SendMail     => Envoi du message de contact + Affiche la page d'accueil avec confirmation
* - Controleur Blog       + Action Index  + id  => Affichage de la page n°id du Blog
* - Controleur Post       + Action Index  + id  => Affichage de l'article de l'id sélectionné
* - Controleur Formulaire + Action Index        => Affichage du formulaire Article vide pour création
* - Controleur Formulaire + Action Update + id  => Affichage du formulaire Article prérempli pour modification d'un article existant
* - Controleur Formulaire + Action record       => enregistrement dans la base de données soit en update (si id) soit en insert
*/



class Router
{
    private $controleur,
            $action,
            $id,
            $message="";
    
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            { $this->$method($value); }
        }
        $this->message();
    }
    
    public function controleur() {return $this->controleur;}
    public function action() {return $this->action;}
    public function id() {return $this->id;}
    public function message() {return $this->message;}
    
    public function setControleur($controleur)
    {
        
        $controleur=($controleur==""?"Accueil":ucfirst(strtolower($controleur)));
        $this->controleur=$controleur;
    }
    
    public function setAction($action)
    {
        $action=($action==""?"index":strtolower($action));
        $this->action=$action;
    }
                           
    public function setId($id)
    {
        if($id !="")
        {

            if (intval($id)<=0)
            { throw new Exception("Désolée, cette page n'est pas disponible.");}
        }
        $this->id = $id;
    }
    
    public function setMessage($msg)
    {
        $this->message=$msg;
    }
    
     public function routerRequete()
    {
         $typeControleur="Controller".$this->controleur;
         $file="Controller/".$typeControleur.".php";
         if (!file_exists($file))
         { throw new Exception("Désolée, cette page n'est pas disponible.");}
         require $file;
         $monControleur = new $typeControleur();
         $monControleur->setFichier("View/".$this->controleur.".php");
         $monControleur->setId($this->id); 
         $monControleur->setMessage($this->message);
         $action=$this->action();

         if (!method_exists($monControleur, $action))
         { throw new Exception("Désolée, cette page n'est pas disponible.");}
         $monControleur->$action();
     }

    public static function gererErreur(Exception $exception)
    {
        extract(array_merge(array('msgErreur' => $exception->getMessage()),array("messageConfirmation"=>"")));
        ob_start();
        require "View/Erreur.php";
        $contenu=ob_get_clean();
        require 'View/Template.php' ;
      }
    
    private function nettoyer($valeur) {
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }
  
}
