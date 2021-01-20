<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me).
------------------------------------------------------------------------------------------------
Si el código es útil para ti, puedes agradecerme siguiéndome: https://parzibyte.me/blog/sigueme/
Y compartiendo mi blog con tus amigos
También tengo canal de YouTube: https://www.youtube.com/channel/UCroP4BTWjfM0CkGB6AFUoBg?sub_confirmation=1
------------------------------------------------------------------------------------------------
*/ ?>
<?php
$nombreCookie = "mi_cookie_visitas";
if (isset($_COOKIE[$nombreCookie])) {
    echo "Ya has visitado anteriormente esta página";
    # Enlace para ir al archivo que borra la cookie
    echo "<br><a href='borrar.php'>Borrar la cookie</a>";
} else {
    # Establecemos la cookie para marcar que ya ha venido. Recuerda que debes establecerla
    # antes de imprimir cualquier valor
    # Cuándo expira la cookie? debe expirar en algún momento del futuro. Yo la pondré a 30 días
    $tiempoExpiracion = time() + 60 * 60 * 24 * 30;
    setcookie($nombreCookie, true, $tiempoExpiracion);
    echo "Esta es la primera vez que visitas la página";
}
