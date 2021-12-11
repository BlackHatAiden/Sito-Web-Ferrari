<html>
    <head>
    </head>

    <body>

        <?php

            //avvio sessione 
            session_start() ; 

            //termino la sessione corrente
            session_destroy() ; 
            
            //reinderizzo alla pagina di login
            header ("Location: index.php") ;
            
            exit();
        ?>

    </body>

</html>