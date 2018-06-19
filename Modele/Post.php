<?php

// Classe des articles du Blog

class Post {
    
    private $id,
            $title,
            $author,
            $standFirst,
            $content,
            $lastModif;
        
    
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
            {
                $this->$method($this->nettoyer($value));
            }
        }
    }
    
    // Getters
    
    public function id() {return $this->id;}
    public function title() {return $this->title;}
    public function author() {return $this->author;}
    public function standFirst() {return $this->standFirst;}
    public function content() {return $this->content;}
    public function lastModif() {return $this->lastModif;}
    
    // Setters
    
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {$this->id = $id;}
    }
    
    public function setTitle($title)
    {
        if (is_string($title))
        {$this->title = $title;}
    }
    
    public function setAuthor($author)
    {
        if (is_string($author))
        {$this->author = $author;}
    }
    

    public function setStandFirst($standFirst)

    {
        if (is_string($standFirst))
        {$this->standFirst = $standFirst;}
    }
    
    public function setContent($content)
    {
        if (is_string($content))
        {$this->content = $content;}
    }
    

    public function setLastModif($lastModif)

    {
        $this->lastModif = $lastModif;
    }

    public function nettoyer($valeur) {
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }

}