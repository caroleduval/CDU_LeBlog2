<?php

set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), './Modele', './Controller', './View')));
spl_autoload_register();

try
{
    $routeur = new Router($_GET);
    $routeur->routerRequete();
}
catch (Exception $e) {
    Router::gererErreur($e);
};