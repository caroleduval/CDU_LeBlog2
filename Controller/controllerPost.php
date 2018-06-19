<?php

// Page Post : le contrôleur insère le post correspondant à id dans template.php
// + un message de confirmation si l'opération avec la bdd est effective

Require_once "Controller.php";
Require_once "Modele/PostManager.php";

class ControllerPost extends Controller
{
    public function index()
    {
        $PM = new PostManager();
        $post=array('post'=>$PM->getPost($this->id()));
        $this->genererVue($post);
    }
}
