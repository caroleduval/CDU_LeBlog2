<?php

class Mail {
    
    private $myMail = "kdu-prog@orange.fr",
            $myName = "Carole DUVAL",
            $prenom,
            $nom,
            $email,
            $message;
                
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    
    
    public function hydrate(array $donnees)
    {
        if ($donnees["prenom"]=="" || $donnees["nom"]=="" || $donnees["email"]=="" || $donnees["message"]=="")
            { throw new Exception("Désolée, tous les champs de saisie doivent être renseignés.");}
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    // Getters
    
    public function myMail() {
        return $this->myMail;
    }

    public function myName() {
        return $this->myName;
    }

    public function prenom() {
        return $this->prenom;
    }

    public function nom() {
        return $this->nom;
    }

    public function email() {
        return $this->email;
    }

    public function message() {
        return $this->message;
    }
    
    // Setters
    
    public function SetPrenom($prenom)
    {
        if (is_string($prenom))
        {$this->prenom = $prenom;}
    }
    
    public function SetNom($nom)
    {
        if (is_string($nom))
        {$this->nom = $nom;}
    }
    
    public function setEmail($email)
    {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
        {$this->email = $email;}
    }
    public function setMessage($message)
    {
        if (is_string($message))
        {$this->message = $message;}
    }

    
    public function envoyerMail()
    {
    // On filtre les serveurs qui rencontrent des bogues.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", "kdu-prog@orange.fr"))
        { $passage_ligne = "\r\n"; } else { $passage_ligne = "\n";}

    //=====Déclaration des messages au format texte et au format HTML.
    $message_txt  = $this->prenom." ".$this->nom." vous a écrit :".$passage_ligne;
    $message_txt .= $this->message.$passage_ligne;
    $message_txt .= "Lui répondre :".$this->email.$passage_ligne;
    $message_html = "<html><head></head><body>";
    $message_html.= "<p><strong>".$this->prenom." ".$this->nom."<strong> vous a écrit :</p>";
    $message_html.= "<p>".$this->message."</p><p>Lui répondre :".$this->email."</body></html>";
    //==========
        
    //====Création de ma boundary
    $boundary="-----=".md5(rand());


    //=====Définition du sujet.
    $sujet = "Message de ".$this->prenom." ".$this->nom;
    //=========

    //=====Création du header de l'e-mail.
    $mailHeader = "From: \"".$this->prenom." ".$this->nom."\"<".$this->email.">".$passage_ligne;
    $mailHeader.= "Reply-to: \"".$this->myName()."\" <".$this->myMail().">".$passage_ligne;
    $mailHeader.= "MIME-Version: 1.0".$passage_ligne;
    $mailHeader.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    //==========

    //=====Création du message.
    $content = $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format texte.
    $content.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
    $content.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $content.= $passage_ligne.$message_txt.$passage_ligne;
    //==========
    $content.= $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format HTML
    $content.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
    $content.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $content.= $passage_ligne.$message_html.$passage_ligne;
    //==========
    $content.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $content.= $passage_ligne."--".$boundary."--".$passage_ligne;
    //==========

    //=====Envoi de l'e-mail.
    $messageConfirmation=(mail($this->myMail(),$sujet,$content,$mailHeader)?"Votre message a bien été envoyé.":"Désolée, une erreur est survenue. Merci de réessayer ultérieurement.");
    return $messageConfirmation;
    //==========
    }
}
