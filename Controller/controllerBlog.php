<?php

// Page Blog : le contrôleur insère une liste détaillée de 4 posts dans template.php

require "Controller.php";
require "Modele/PostManager.php";



class ControllerBlog extends Controller
{
    private $nbPostsParPage = 4 ;
    
    public function index()
    {
        $pageDde = $_GET["id"];
        $PM = new PostManager();
        $posts=array('posts'=>$PM->getBlog($pageDde,$this->nbPostsParPage));
        $nbPages=$PM->nbPages();
        $posts["nbPages"] = $nbPages;
        $this->genererVue($posts);
    }
}