<?php

// Page Accueil : le contrôleur insère Accueil.php dans template.php
// + un message de confirmation si envoi de mail

require "Controller.php";
require "Modele/Mail.php";


class ControllerAccueil extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
    
    public function sendMail()
    {
        $monMail= new Mail($_POST);
        $messageConfirmation=$monMail->envoyerMail();
        $this->setMessage($messageConfirmation);
        $this->genererVue();
    }   
}