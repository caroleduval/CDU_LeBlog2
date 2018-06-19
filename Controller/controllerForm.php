<?php

// Page Form : le contrôleur insère le formulaire de saisie article dans template.php
// vide quand il faut créer un article ou pré-rempli, s'il s'agit de modifier un post existant

require "Controller.php";
require "Modele/PostManager.php";

class ControllerForm extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
    
    public function update()
    {
        $PM = new PostManager();
        $post=array('post'=>$PM->getPost($this->id()));
        $this->genererVue($post);
    }
    
    public function record()
    {
        if ($_POST["title"]=="" || $_POST["author"]=="" || $_POST["standFirst"]=="" ||$_POST["content"]=="")
        { throw new Exception("Désolée, tous les champs de saisie doivent être renseignés.");}
        $post= new Post($_POST);
        $PM = new PostManager();
        if(($_GET["id"])=="")
        {
            $id=$PM->add($post);
            $messageConfirmation="Votre article a été publié sur le blog.";
        }
        else
        {
            $id=$PM->update($post);
            $messageConfirmation="Votre article a été modifié sur le blog.";
        }
        $routeur2 = new Router(array("controleur"=>"Post","action"=>"index","id"=>($id)));
        $routeur2->setMessage($messageConfirmation);
        $routeur2->routerRequete() ;
    }
    
}