<?php

function setActive($routeName)
{

    return request()->routeIs($routeName) ? 'active': '';
}
/* Para que funcione este archivo se tiene que ir al json de composer y en la seccion
    de autoload agregar los este file para que lo cargue asi
    /* "files":["app/helpers.php"] */
    /* y luego en la consolo sobre el proyecto ejecutar el comando
    composer dumpautoload
    para que funcione  */
