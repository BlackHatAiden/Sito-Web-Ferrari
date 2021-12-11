</html>

    <head></head>

    </body>

        <?php

            //avvio sessione
            session_start();


            
            //connessione con database
            $dbconn = pg_connect(" host=localhost port=5432 dbname=Login user=postgres password=Password1" ) or die ("Could not connect :".pg_last_error() ) ;

            //controllo esistenza ed premuta bottone evita indirizzamento diretto a registrazione.php
            if ( !(isset($_POST["changeButton"]))) 
            {
                
                //reindirizzo alla pagina di gestione
                header ("Location: index.php") ;
            }
            else
            {

                //se il campo password non è vuoto
                if($_POST['Password'] != "")
                {
                    //creazione query
                    $e = "'".$_SESSION['email']."'" ;
                    $p = "'".$_POST['Password']."'" ;

                    //effettuo query
                    $query = 'update public."Utente" set password = '.$p.' where(email = '.$e.')';

                    //risultato query
                    $result = pg_query($query) or die("Query fallita :".pg_last_error()) ;

                    
                }

                //se il campo lavoro non è vuoto
                if($_POST['Lavoro'] != "")
                {
                    //creazione query
                    $e = "'".$_SESSION['email']."'" ;
                    $l = "'".$_POST['Lavoro']."'" ;

                    
                    //effettuo query
                    $query = 'update public."Utente" set lavoro = '.$l.' where(email = '.$e.')';

                    //risultato query
                    $result = pg_query($query) or die("Query fallita :".pg_last_error()) ;

                    
                }

                //se il campo via non è vuoto
                if($_POST['Via'] != "")
                {
                    //creazione query
                    $e = "'".$_SESSION['email']."'" ;
                    $v = "'".$_POST['Via']."'" ;

                    //effettuo query
                    $query = 'update public."Utente" set via = '.$v.' where(email = '.$e.')';

                    //risultato query
                    $result = pg_query($query) or die("Query fallita :".pg_last_error()) ;

                    
                }

                //se il campo cap non è vuoto
                if($_POST['Cap'] != "")
                {
                    //creazione query
                    $e = "'".$_SESSION['email']."'" ;
                    $c = "'".$_POST['Cap']."'" ;

                    //effettuo query
                    $query = 'update public."Utente" set cap = '.$c.' where(email = '.$e.')';

                    //risultato query
                    $result = pg_query($query) or die("Query fallita :".pg_last_error()) ;

                    
                }
                
                
                //reinderizzo alla stessa pagina di gestione ma aggiornata
                header ("Location: index.php") ;

                

            }

            
        ?>
        
     
    </body>

</html>